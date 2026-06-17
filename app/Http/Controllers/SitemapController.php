<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $urls = collect();

        // Static pages
        $staticPages = [
            ['url' => '/', 'priority' => '1.0', 'changefreq' => 'weekly'],
            ['url' => '/diensten', 'priority' => '0.9', 'changefreq' => 'monthly'],
            ['url' => '/diensten/inrichting-en-planning', 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['url' => '/diensten/levering-en-installatie', 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['url' => '/diensten/onderhoud-en-reparaties', 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['url' => '/diensten/leasing-en-financiering', 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['url' => '/projecten', 'priority' => '0.8', 'changefreq' => 'weekly'],
            ['url' => '/apparatuur', 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['url' => '/over-ons', 'priority' => '0.7', 'changefreq' => 'monthly'],
            ['url' => '/onze-merken', 'priority' => '0.7', 'changefreq' => 'monthly'],
            ['url' => '/fitnesswijzer', 'priority' => '0.8', 'changefreq' => 'weekly'],
            ['url' => '/fitnesswijzer/gym-verdienmodellen', 'priority' => '0.7', 'changefreq' => 'weekly'],
            ['url' => '/fitnesswijzer/tips-en-inspiratie', 'priority' => '0.7', 'changefreq' => 'weekly'],
            ['url' => '/fitnesswijzer/gymreviews', 'priority' => '0.7', 'changefreq' => 'weekly'],
            ['url' => '/contact', 'priority' => '0.6', 'changefreq' => 'monthly'],
            ['url' => '/gratis-adviesgesprek', 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['url' => '/offerte-aanvragen', 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['url' => '/privacybeleid', 'priority' => '0.3', 'changefreq' => 'yearly'],
            ['url' => '/algemene-voorwaarden', 'priority' => '0.3', 'changefreq' => 'yearly'],
            ['url' => '/cookies', 'priority' => '0.3', 'changefreq' => 'yearly'],
        ];

        foreach ($staticPages as $page) {
            $urls->push($page);
        }

        // Oplossingen pages
        $oplossingen = [
            'sportschool-inrichten',
            'pilates-studio-inrichten',
            'pt-studio-inrichten',
            'hotel-gym-inrichten',
            'wellnessruimte-inrichten',
            'boksruimte-inrichten',
            'homegyms-inrichten',
            'crossfit-box-inrichten',
            'bedrijfsfitness-inrichten',
            'hyrox-box-inrichten',
            'recovery-ruimte-inrichten',
            'groepsfitness-ruimte-inrichten',
        ];

        foreach ($oplossingen as $slug) {
            $urls->push(['url' => '/' . $slug, 'priority' => '0.8', 'changefreq' => 'monthly']);
        }

        // Apparatuur categories
        $apparatuur = ['collecties', 'cardio', 'krachtapparatuur', 'apparatuur-functioneel', 'gewichten', 'flooring', 'herstel'];
        foreach ($apparatuur as $slug) {
            $urls->push(['url' => '/apparatuur/' . $slug, 'priority' => '0.7', 'changefreq' => 'monthly']);
        }

        // Projecten detail pages
        $projecten = ['ballin-fit-amsterdam', 'vitality-sports-duiven', 'upshape-gym-den-haag', 'farm-fit-culemborg'];
        foreach ($projecten as $slug) {
            $urls->push(['url' => '/projecten/' . $slug, 'priority' => '0.7', 'changefreq' => 'monthly']);
        }

        // Verdienmodellen articles
        $verdienmodellen = [
            'eigen-gym-starten', 'boutique-gym-starten', 'wat-kost-een-sportschool-per-maand',
            'wat-verdient-een-sportschoolhouder', 'hyrox-studio-starten-kosten-en-verdienmodel',
            'fitnessapparatuur-leasen', 'dit-kost-het-bouwen-van-een-pilates-studio',
            'verdriedubbel-je-omzet-met-een-slimme-fitnessinvestering',
            'zoveel-verdienen-gyms-aan-goede-voornemens',
            'zo-verdienen-gyms-aan-trainingsschemas-fitnessaannemer',
            'het-verdienmodel-concept-van-sportcity',
        ];
        foreach ($verdienmodellen as $slug) {
            $urls->push(['url' => '/fitnesswijzer/gym-verdienmodellen/' . $slug, 'priority' => '0.6', 'changefreq' => 'monthly']);
        }

        // Tips & Inspiratie articles
        $tips = [
            'waar-haal-je-het-geld-vandaan-om-een-gym-te-starten',
            'gym-inrichten-tips', 'airco-in-gym-luxe-of-noodzakelijk',
            'de-grootste-gym-die-wij-tot-nu-toe-hebben-gebouwd',
            'de-meest-winstgevende-gymconcepten-van-dit-moment',
            'meerdere-pilatesstudios-openen-met-een-slim-concept',
            'een-eigen-gym-openen-van-idee-tot-opening',
            'zo-krijg-je-sneller-een-vergunning-voor-jouw-sportschool',
            'sportschool-opzetten', 'verlichting-in-je-sportschool-tips',
            'ervaring-met-een-sportschool-laten-bouwen',
            'de-grootste-fitnessbeurs-ter-wereld-dit-heb-je-gemist',
            'upshape-review-een-personal-training-studio-waar-alleen-een-op-een-wordt-getraind',
            'pilates-studio-openen-zo-deed-club-confidence-het',
        ];
        foreach ($tips as $slug) {
            $urls->push(['url' => '/fitnesswijzer/tips-en-inspiratie/' . $slug, 'priority' => '0.6', 'changefreq' => 'monthly']);
        }

        // Gymreviews
        $gymreviews = [
            'gymreview-aerofitt-duiven', 'gymreview-cardio-fitness-beverwijk',
            'gymreview-holyfit-holypadel-arnhem-fitness-aannemer',
            'gymreview-trainmore-black-label', 'gymreview-credo-gym-haarlem',
            'gymreview-r-gym-beverwijk', 'gymreview-xxl-nutrition-gym',
            'gymreview-black-phantom-huizen',
            'gymreview-saint-stars-in-amsterdam-fitness-aannemer',
            'healthclub-heijenoord-arnhem-review', 'gymreview-golds-gym-nieuwegein',
            'gymreview-van-der-valk-hotel-deventer-gym', 'gymreview-kossos-gym',
            'movement-gym-amersfoort', 'gymreview-joel-beukers-gym-concept',
            'gymreview-de-basic-fit-kerk',
        ];
        foreach ($gymreviews as $slug) {
            $urls->push(['url' => '/fitnesswijzer/gymreviews/' . $slug, 'priority' => '0.6', 'changefreq' => 'monthly']);
        }

        $content = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $content .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

        foreach ($urls as $entry) {
            $content .= '  <url>' . "\n";
            $content .= '    <loc>' . url($entry['url']) . '</loc>' . "\n";
            $content .= '    <changefreq>' . $entry['changefreq'] . '</changefreq>' . "\n";
            $content .= '    <priority>' . $entry['priority'] . '</priority>' . "\n";
            $content .= '  </url>' . "\n";
        }

        $content .= '</urlset>';

        return response($content, 200, [
            'Content-Type' => 'application/xml',
        ]);
    }
}
