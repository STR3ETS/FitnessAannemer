<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class OdooService
{
    private string $url;
    private string $db;
    private string $username;
    private string $apiKey;
    private ?int $uid = null;

    public function __construct()
    {
        $this->url = rtrim(config('odoo.url'), '/');
        $this->db = config('odoo.db');
        $this->username = config('odoo.username');
        $this->apiKey = config('odoo.api_key');
    }

    public function isConfigured(): bool
    {
        return !empty($this->url) && !empty($this->db) && !empty($this->username) && !empty($this->apiKey);
    }

    private function jsonRpc(string $service, string $method, array $args): mixed
    {
        $response = Http::timeout(10)->post("{$this->url}/jsonrpc", [
            'jsonrpc' => '2.0',
            'method' => 'call',
            'params' => [
                'service' => $service,
                'method' => $method,
                'args' => $args,
            ],
            'id' => random_int(1, 999999),
        ]);

        $result = $response->json();

        if (isset($result['error'])) {
            $message = $result['error']['data']['message'] ?? json_encode($result['error']);
            throw new \RuntimeException("Odoo API error: {$message}");
        }

        return $result['result'] ?? null;
    }

    public function authenticate(): int
    {
        if ($this->uid !== null) {
            return $this->uid;
        }

        $uid = $this->jsonRpc('common', 'authenticate', [
            $this->db,
            $this->username,
            $this->apiKey,
            [],
        ]);

        if (!$uid) {
            throw new \RuntimeException('Odoo authentication failed - check credentials');
        }

        $this->uid = $uid;
        return $uid;
    }

    public function create(string $model, array $values): int
    {
        $uid = $this->authenticate();

        return $this->jsonRpc('object', 'execute_kw', [
            $this->db, $uid, $this->apiKey,
            $model, 'create', [$values],
        ]);
    }

    public function write(string $model, array $ids, array $values): bool
    {
        $uid = $this->authenticate();

        return $this->jsonRpc('object', 'execute_kw', [
            $this->db, $uid, $this->apiKey,
            $model, 'write', [$ids, $values],
        ]);
    }

    public function searchRead(string $model, array $domain, array $fields = [], int $limit = 0): array
    {
        $uid = $this->authenticate();

        $kwargs = ['fields' => $fields];
        if ($limit > 0) {
            $kwargs['limit'] = $limit;
        }

        return $this->jsonRpc('object', 'execute_kw', [
            $this->db, $uid, $this->apiKey,
            $model, 'search_read', [$domain], $kwargs,
        ]);
    }

    /**
     * Find existing UTM record by name, or create a new one.
     */
    public function findOrCreateUtm(string $model, string $name): ?int
    {
        if (empty($name)) {
            return null;
        }

        $records = $this->searchRead($model, [['name', '=', $name]], ['id'], 1);

        if (!empty($records)) {
            return $records[0]['id'];
        }

        return $this->create($model, ['name' => $name]);
    }

    /**
     * Map form ruimte_type to Odoo Concepttype selection ID.
     */
    private function mapConcepttype(string $ruimteType): ?string
    {
        $map = [
            'Sportschool'           => 'dfb52cbc9cb1123f', // Commerciële sportschool
            'PT-studio / boutique'  => '138f0925fdbd1f8b', // PT studio
            'Bedrijfsfitness'       => 'b2398e68969878f5',
            'Homegym'               => '9020a1653db54ef0', // Home gym
            'Hotel / hospitality'   => '271db15a93182c99', // Hotel gym
            'Anders'                => '139bb0dc4a43aced', // Overig
        ];

        return $map[$ruimteType] ?? null;
    }

    /**
     * Parse budget string to numeric value (midpoint of range).
     */
    private function parseBudget(string $budget): ?float
    {
        $map = [
            '10.000 - 25.000'   => 17500,
            '25.000 - 50.000'   => 37500,
            '50.000 - 100.000'  => 75000,
            '100.000 - 250.000' => 175000,
            '250.000 - 500.000' => 375000,
            '> 500.000'         => 500000,
        ];

        return $map[$budget] ?? null;
    }

    /**
     * Build lead_properties array for Odoo Properties fields.
     */
    private function buildLeadProperties(array $data): array
    {
        $properties = [];

        // Leadbron -> Website
        $properties[] = ['name' => 'fd926b57f3aadcf5', 'value' => '539ba62f3629075c'];

        // Soort lead -> Inbound
        $properties[] = ['name' => 'bca2e462a1065e40', 'value' => '1a1f28099c982987'];

        // Concepttype (ruimte_type)
        $conceptId = $this->mapConcepttype($data['ruimte_type'] ?? '');
        if ($conceptId) {
            $properties[] = ['name' => '960da7a7a8a4973e', 'value' => $conceptId];
        }

        // Budget (monetary)
        $budgetValue = $this->parseBudget($data['budget'] ?? '');
        if ($budgetValue !== null) {
            $properties[] = ['name' => 'a6751992a13d161f', 'value' => $budgetValue];
        }

        // Oppervlakte pand (char, suffix m²)
        if (!empty($data['oppervlakte'])) {
            // Strip " m2" suffix since Odoo adds m² automatically
            $opp = str_replace(' m2', '', $data['oppervlakte']);
            $properties[] = ['name' => '878a289b73308249', 'value' => $opp];
        }

        return $properties;
    }

    /**
     * Create a CRM lead from form submission data.
     */
    public function createLead(array $data): int
    {
        $description = "Type ruimte: {$data['ruimte_type']}\n"
            . "Oppervlakte: {$data['oppervlakte']}\n"
            . "Budget: {$data['budget']}\n"
            . "Gewenste start: {$data['startdatum']}";

        if (!empty($data['bericht'])) {
            $description .= "\n\nBericht:\n{$data['bericht']}";
        }

        // Add UTM info to description as fallback
        $utmParts = [];
        foreach (['utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content'] as $key) {
            if (!empty($data[$key])) {
                $utmParts[] = "{$key}: {$data[$key]}";
            }
        }
        if (!empty($utmParts)) {
            $description .= "\n\nUTM: " . implode(' | ', $utmParts);
        }

        $leadData = [
            'name' => "{$data['ruimte_type']} - {$data['naam']}",
            'contact_name' => $data['naam'],
            'email_from' => $data['email'],
            'phone' => $data['telefoon'],
            'description' => $description,
            'type' => 'lead',
        ];

        if (!empty($data['bedrijfsnaam'])) {
            $leadData['partner_name'] = $data['bedrijfsnaam'];
        }

        // Map UTM params to Odoo's built-in UTM fields
        try {
            if (!empty($data['utm_source'])) {
                $id = $this->findOrCreateUtm('utm.source', $data['utm_source']);
                if ($id) $leadData['source_id'] = $id;
            }
            if (!empty($data['utm_medium'])) {
                $id = $this->findOrCreateUtm('utm.medium', $data['utm_medium']);
                if ($id) $leadData['medium_id'] = $id;
            }
            if (!empty($data['utm_campaign'])) {
                $id = $this->findOrCreateUtm('utm.campaign', $data['utm_campaign']);
                if ($id) $leadData['campaign_id'] = $id;
            }
        } catch (\Exception $e) {
            Log::warning('Odoo UTM linking failed: ' . $e->getMessage());
        }

        $leadId = $this->create('crm.lead', $leadData);

        // Set Properties fields (must be written after create, as they're
        // initialized by the pipeline stage definition on record creation)
        try {
            $properties = $this->buildLeadProperties($data);
            if (!empty($properties)) {
                $this->write('crm.lead', [$leadId], ['lead_properties' => $properties]);
            }
        } catch (\Exception $e) {
            Log::warning('Odoo lead properties update failed: ' . $e->getMessage());
        }

        return $leadId;
    }
}
