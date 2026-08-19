<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use Illuminate\Http\Request;
use App\Mail\AdviesgesprekAanvraag;
use App\Services\OdooService;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'ruimte_type' => 'required|string|max:100',
            'oppervlakte' => 'required|string|max:50',
            'dienst' => 'required|string|max:100',
            'bericht' => 'nullable|string|max:2000',
            'naam' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefoon' => 'required|string|max:20',
            'bedrijfsnaam' => 'nullable|string|max:255',
            'utm_source' => 'nullable|string|max:255',
            'utm_medium' => 'nullable|string|max:255',
            'utm_campaign' => 'nullable|string|max:255',
            'utm_term' => 'nullable|string|max:255',
            'utm_content' => 'nullable|string|max:255',
        ]);

        Submission::create([
            'type' => 'adviesgesprek',
            'naam' => $validated['naam'],
            'email' => $validated['email'],
            'telefoon' => $validated['telefoon'],
            'bedrijfsnaam' => $validated['bedrijfsnaam'] ?? null,
            'data' => $validated,
        ]);

        Mail::to(config('mail.to_address', 'info@fitnessaannemer.nl'))
            ->send(new AdviesgesprekAanvraag($validated));

        try {
            $odoo = new OdooService();
            if ($odoo->isConfigured()) {
                $leadId = $odoo->createLead($validated);
                Log::info("Odoo lead created: #{$leadId}");
            }
        } catch (\Exception $e) {
            Log::error('Odoo lead creation failed: ' . $e->getMessage());
        }

        $dienstSlugs = [
            'Interieur ontwerp en turn key realisatie' => 'turnkey',
            'Apparatuur' => 'apparatuur',
            'Interieur ontwerp' => 'interieur-ontwerp',
            'Overig' => 'overig',
        ];
        $slug = $dienstSlugs[$validated['dienst']] ?? 'overig';

        return redirect("/bedankt/{$slug}");
    }

    public function bedankt(string $dienst)
    {
        $pages = [
            'turnkey' => ['title' => 'Interieur ontwerp en turn key realisatie', 'value' => 100],
            'apparatuur' => ['title' => 'Apparatuur', 'value' => 50],
            'interieur-ontwerp' => ['title' => 'Interieur ontwerp', 'value' => 25],
            'overig' => ['title' => 'Overig', 'value' => 10],
        ];

        if (!isset($pages[$dienst])) {
            abort(404);
        }

        return view('bedankt', [
            'dienst' => $dienst,
            'dienstTitle' => $pages[$dienst]['title'],
            'conversionValue' => $pages[$dienst]['value'],
        ]);
    }

    public function submitOfferte(Request $request)
    {
        $validated = $request->validate([
            'naam' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefoon' => 'required|string|max:20',
            'bedrijf' => 'nullable|string|max:255',
            'type_ruimte' => 'required|string|max:100',
            'oppervlakte' => 'nullable|string|max:50',
            'budget' => 'nullable|string|max:50',
            'diensten' => 'nullable|array',
            'diensten.*' => 'string|max:100',
            'bericht' => 'nullable|string|max:2000',
            'bestanden' => 'nullable|array|max:5',
            'bestanden.*' => 'file|max:10240',
        ]);

        $bestanden = $request->file('bestanden', []);

        $storedPaths = [];
        foreach ($bestanden as $file) {
            if ($file && $file->isValid()) {
                $storedPaths[] = $file->store('submissions', 'local');
            }
        }

        Submission::create([
            'type' => 'offerte',
            'naam' => $validated['naam'],
            'email' => $validated['email'],
            'telefoon' => $validated['telefoon'],
            'bedrijfsnaam' => $validated['bedrijf'] ?? null,
            'data' => $validated,
            'bestanden' => $storedPaths ?: null,
        ]);

        Mail::to(config('mail.to_address', 'info@fitnessaannemer.nl'))
            ->send(new \App\Mail\OfferteAanvraag($validated, $bestanden));

        try {
            $odoo = new OdooService();
            if ($odoo->isConfigured()) {
                $offerteData = [
                    'naam' => $validated['naam'],
                    'email' => $validated['email'],
                    'telefoon' => $validated['telefoon'],
                    'bedrijfsnaam' => $validated['bedrijf'] ?? '',
                    'ruimte_type' => $validated['type_ruimte'],
                    'oppervlakte' => $validated['oppervlakte'] ?? '',
                    'budget' => $validated['budget'] ?? '',
                    'bericht' => ($validated['bericht'] ?? '') . "\n\nGewenste diensten: " . implode(', ', $validated['diensten'] ?? []),
                ];
                $leadId = $odoo->createLead($offerteData);
                Log::info("Odoo offerte lead created: #{$leadId}");
            }
        } catch (\Exception $e) {
            Log::error('Odoo offerte lead creation failed: ' . $e->getMessage());
        }

        return back()->with('offerte_success', true);
    }
}
