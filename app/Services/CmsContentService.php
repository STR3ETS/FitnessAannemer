<?php

namespace App\Services;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

/**
 * Content die InSpace aanlevert. De pagina's staan in EazyDash; deze site haalt
 * ze op met het leestoken en bewaart ze, zodat een bezoeker nooit op de API
 * wacht en de site gewoon doorwerkt als die even weg is.
 *
 * Zonder token (EAZY_CMS_TOKEN) doet dit niets en blijft de site zoals hij was.
 */
class CmsContentService
{
    public const ARTIKELEN = ['blog', 'knowledgebase'];

    public const DIENSTEN = ['service', 'pillar'];

    /** Vijf minuten vers; daarna krijgt de bezoeker de vorige stand en komt de nieuwe op de achtergrond. */
    private const VERS = 300;

    /** Zo lang houden we de vorige stand aan als de API wegblijft. */
    private const BEWAAR = 604800;

    /** Na een storing zo lang niet opnieuw proberen, anders wacht elke bezoeker op de time-out. */
    private const STORING = 60;

    /** @return Collection<string, array<string, mixed>> blog en kennisbank, op slug, nieuwste eerst */
    public function artikelen(): Collection
    {
        return $this->overzicht()->whereIn('type', self::ARTIKELEN);
    }

    /** @return Collection<string, array<string, mixed>> servicepagina's en pillar pages, op slug */
    public function diensten(): Collection
    {
        return $this->overzicht()->whereIn('type', self::DIENSTEN);
    }

    /** Een artikel met de volledige tekst, of null. */
    public function artikel(string $slug): ?array
    {
        return $this->volledig($this->artikelen()->get($slug));
    }

    /** Een servicepagina met de volledige tekst, of null. */
    public function dienst(string $slug): ?array
    {
        return $this->volledig($this->diensten()->get($slug));
    }

    /** Een auteur, met de artikelen erbij. Null als die er niet is. */
    public function auteur(string $slug): ?array
    {
        $auteur = $this->auteurs()->get($slug);

        if (! $auteur) {
            return null;
        }

        return $auteur + [
            'artikelen' => $this->artikelen()->filter(fn (array $a) => ($a['author']['slug'] ?? null) === $slug),
        ];
    }

    /**
     * De tekst zoals InSpace hem stuurt, met drie dingen eruit. Een eigen h1: die
     * staat al in de kop, en twee verwarren Google. Scripts en gebeurtenissen.
     * En een omhulsel van een heel document, als dat meekwam.
     */
    public static function schoon(string $html, string $titel): string
    {
        if (preg_match('~<body\b[^>]*>(.*)</body>~is', $html, $m)) {
            $html = $m[1];
        }

        $html = (string) preg_replace(['~<(script|style)\b[^>]*>.*?</\1\s*>~is', '~</?(script|style)\b[^>]*>~i'], '', $html);

        // Alleen binnen een tag: "online = ..." in de lopende tekst blijft staan.
        $html = (string) preg_replace_callback('~<[a-z][a-z0-9-]*\b[^>]*>~i', fn (array $tag) => (string) preg_replace(
            ['~\s+on[a-z]+\s*=\s*(?:"[^"]*"|\'[^\']*\'|[^\s>]+)~i', '~(\s(?:href|src)\s*=\s*)(["\'])\s*javascript:[^"\']*\2~i'],
            ['', '$1$2#$2'],
            $tag[0]
        ), $html);

        $html = (string) preg_replace_callback(
            '~^\s*<h1\b[^>]*>(.*?)</h1\s*>~is',
            fn (array $kop) => trim(html_entity_decode(strip_tags($kop[1]))) === trim($titel) ? '' : $kop[0],
            $html,
            1
        );

        return trim((string) preg_replace('~<(/?)h1\b~i', '<$1h2', $html));
    }

    private function overzicht(): Collection
    {
        return collect($this->bewaard('cms.overzicht', $this->haalOverzicht(...)));
    }

    private function auteurs(): Collection
    {
        return collect($this->bewaard('cms.auteurs', fn () => collect($this->vraag('/authors')->json('data', []))->keyBy('slug')->all()));
    }

    /**
     * Haalt de tekst erbij. Met de wijzigingsdatum in de sleutel: is de tekst
     * aangepast, dan is dat na de volgende ronde van het overzicht meteen te zien.
     */
    private function volledig(?array $stuk): ?array
    {
        if (! $stuk) {
            return null;
        }

        try {
            $pagina = Cache::remember(
                'cms.pagina.' . md5($stuk['slug'] . '|' . ($stuk['updated_at'] ?? '')),
                self::BEWAAR,
                fn () => $this->vraag('/content/' . rawurlencode($stuk['slug']))->json('data')
            );
        } catch (\Throwable $e) {
            Log::warning('Pagina uit EazyDash niet opgehaald', ['slug' => $stuk['slug'], 'fout' => $e->getMessage()]);

            // Geen 404: de pagina bestaat wel, en Google hoeft hem niet te vergeten.
            abort(503);
        }

        return $pagina;
    }

    /** @return array<string, array<string, mixed>> */
    private function haalOverzicht(): array
    {
        $stukken = [];
        $pagina = 1;

        do {
            $antwoord = $this->vraag('/content', ['per_page' => 100, 'page' => $pagina]);
            array_push($stukken, ...$antwoord->json('data', []));
        } while ($pagina++ < (int) $antwoord->json('meta.last_page', 1));

        return collect($stukken)->keyBy('slug')->all();
    }

    private function vraag(string $pad, array $query = []): Response
    {
        return Http::withToken((string) config('services.eazyonline.token'))
            ->acceptJson()
            ->timeout(4)
            ->get(rtrim((string) config('services.eazyonline.url'), '/') . $pad, $query)
            ->throw();
    }

    /** Uit de cache, of opgehaald. Lukt dat niet, dan leeg: de vaste pagina's van de site doen het gewoon. */
    private function bewaard(string $sleutel, callable $ophalen): array
    {
        if (blank(config('services.eazyonline.token'))) {
            return [];
        }

        if (Cache::has('cms.storing') && ! Cache::has($sleutel)) {
            return [];
        }

        try {
            return Cache::flexible($sleutel, [self::VERS, self::BEWAAR], $ophalen);
        } catch (\Throwable $e) {
            Log::warning('Content uit EazyDash niet opgehaald', ['fout' => $e->getMessage()]);
            Cache::put('cms.storing', true, self::STORING);

            return [];
        }
    }
}
