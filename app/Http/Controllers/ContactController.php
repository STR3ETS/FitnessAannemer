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

    private array $ebooks = [
        'starten-sportschool' => [
            'title' => 'E-book Start je eigen sportschool',
            'odooName' => 'Website E-book starten sportschool',
            'metaDesc' => 'Gratis e-book: alles wat je moet weten om je eigen sportschool te starten. Van businessplan tot inrichting en opening.',
            'heroImage' => 'assets/e-book.jpeg',
            'heroTitle' => 'Start je eigen <span class="text-primary">sportschool</span>',
            'heroDesc' => 'Alles wat je moet weten voordat je begint: van concept en businessplan tot inrichting en opening. Download ons gratis e-book en start goed voorbereid.',
            'coverImage' => 'assets/e-book.jpeg',
            'formTitle' => 'Van idee tot <span class="text-primary">succesvolle sportschool</span>',
            'formDesc' => 'Alles wat je moet weten voordat je begint: van concept en businessplan tot inrichting en opening. Download ons gratis e-book en start goed voorbereid.',
            'usps' => ['Stap-voor-stap van idee tot opening', 'Praktische checklists en budgettips', 'Inzichten uit 60+ gerealiseerde projecten'],
            'pdfFile' => 'EBook_Startende_Ondernemers.pdf',
            'contentTitle' => 'Alles over je <span class="text-primary">sportschool starten</span>',
            'extraSections' => [
                ['icon' => 'lightbulb', 'title' => 'Van concept tot plan', 'desc' => 'Hoe je jouw visie vertaalt naar een concreet businessplan dat investeerders en verhuurders overtuigt.'],
                ['icon' => 'euro-sign', 'title' => 'Financiering en budget', 'desc' => 'Wat een sportschool starten kost, welke financieringsvormen er zijn en hoe je slim investeert.'],
                ['icon' => 'ruler-combined', 'title' => 'Inrichting en apparatuur', 'desc' => 'Hoe je de juiste apparatuur kiest en jouw ruimte optimaal indeelt voor jouw doelgroep.'],
            ],
        ],
        'pilates' => [
            'title' => 'E-book Pilates studio inrichten',
            'odooName' => 'Website E-book pilates',
            'metaDesc' => 'Gratis e-book: alles over het inrichten van een pilates studio. Van reformers en apparatuur tot ruimte-indeling en sfeer.',
            'heroImage' => 'assets/e-book.jpeg',
            'heroTitle' => 'Pilates studio <span class="text-primary">inrichten</span>',
            'heroDesc' => 'Alles wat je moet weten over het opzetten en inrichten van een succesvolle pilates studio. Van reformers tot sfeer en beleving.',
            'coverImage' => 'assets/e-book.jpeg',
            'formTitle' => 'Jouw pilates studio <span class="text-primary">succesvol inrichten</span>',
            'formDesc' => 'Van de juiste reformers en apparatuur tot ruimte-indeling en sfeer. Download ons gratis e-book en richt jouw pilates studio professioneel in.',
            'usps' => ['Reformer keuze en positionering', 'Sfeer en beleving creeren', 'Praktische tips uit onze projecten'],
            'pdfFile' => 'EBook_Pilates_FitnessAannemer.pdf',
            'contentTitle' => 'Alles over je <span class="text-primary">pilates studio</span>',
            'extraSections' => [
                ['icon' => 'spa', 'title' => 'Sfeer en beleving', 'desc' => 'Hoe je met verlichting, kleuren en materialen de juiste sfeer creert voor jouw pilates studio.'],
                ['icon' => 'dumbbell', 'title' => 'Apparatuur kiezen', 'desc' => 'Welke reformers en props je nodig hebt en waar je op moet letten bij de aanschaf.'],
                ['icon' => 'drafting-compass', 'title' => 'Ruimte-indeling', 'desc' => 'Hoe je de beschikbare ruimte optimaal benut voor groepslessen en privesessies.'],
            ],
        ],
        'lease' => [
            'title' => 'E-book Leasing en financiering',
            'odooName' => 'Website E-book lease',
            'metaDesc' => 'Gratis e-book: alles over leasing en financiering van fitnessapparatuur. Vergelijk opties en maak de juiste keuze voor jouw gym.',
            'heroImage' => 'assets/e-book.jpeg',
            'heroTitle' => 'Leasing en <span class="text-primary">financiering</span>',
            'heroDesc' => 'Alles over de financieringsmogelijkheden voor jouw fitnessapparatuur. Van operational lease tot koop: vergelijk de opties en kies wat bij jou past.',
            'coverImage' => 'assets/e-book.jpeg',
            'formTitle' => 'Slim investeren in <span class="text-primary">fitnessapparatuur</span>',
            'formDesc' => 'Kopen, leasen of een combinatie? Download ons gratis e-book en ontdek welke financieringsvorm het beste past bij jouw situatie.',
            'usps' => ['Vergelijking lease vs. koop', 'Rekenvoorbeelden en scenario\'s', 'Tips voor de beste deal'],
            'pdfFile' => 'EBook_Lease.pdf',
            'contentTitle' => 'Alles over <span class="text-primary">financiering</span>',
            'extraSections' => [
                ['icon' => 'calculator', 'title' => 'Lease vs. koop', 'desc' => 'De voor- en nadelen van leasen versus kopen, met concrete rekenvoorbeelden voor jouw situatie.'],
                ['icon' => 'file-contract', 'title' => 'Contractvormen', 'desc' => 'Operational lease, financial lease of huurkoop: wat zijn de verschillen en waar let je op?'],
                ['icon' => 'piggy-bank', 'title' => 'Slim budgetteren', 'desc' => 'Hoe je jouw investering spreidt en je cashflow gezond houdt vanaf dag een.'],
            ],
        ],
    ];

    public function ebook(string $slug)
    {
        if (!isset($this->ebooks[$slug])) {
            abort(404);
        }

        return view('ebooks._template', array_merge(
            $this->ebooks[$slug],
            ['slug' => $slug]
        ));
    }

    public function ebookDownload(Request $request)
    {
        $validated = $request->validate([
            'naam' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefoon' => 'required|string|max:20',
            'ebook' => 'required|string|max:50',
        ]);

        $ebookData = $this->ebooks[$validated['ebook']] ?? null;
        $odooName = $ebookData ? $ebookData['odooName'] : 'Website E-book onbekend';

        Submission::create([
            'type' => 'ebook',
            'naam' => $validated['naam'],
            'email' => $validated['email'],
            'telefoon' => $validated['telefoon'],
            'data' => $validated,
        ]);

        $voornaam = explode(' ', trim($validated['naam']))[0];

        try {
            $odoo = new OdooService();
            if ($odoo->isConfigured()) {
                $leadId = $odoo->createLead([
                    'naam' => $validated['naam'],
                    'email' => $validated['email'],
                    'telefoon' => $validated['telefoon'],
                    'ruimte_type' => $odooName,
                    'oppervlakte' => '',
                    'bedrijfsnaam' => '',
                ]);
                Log::info("Odoo ebook lead created: #{$leadId}");
            }
        } catch (\Exception $e) {
            Log::error('Odoo ebook lead creation failed: ' . $e->getMessage());
        }

        return response()->json(['status' => 'ok']);
    }
}
