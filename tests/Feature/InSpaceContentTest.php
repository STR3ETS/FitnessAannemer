<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

/**
 * Content van InSpace komt uit EazyDash en staat hier als gewone pagina's. De
 * vaste pagina's van de site merken er niets van, ook niet als de API wegvalt.
 */
class InSpaceContentTest extends TestCase
{
    use RefreshDatabase;

    private const API = 'https://eazyonline.test/api/v1';

    protected function setUp(): void
    {
        parent::setUp();

        $this->withoutVite();
        config(['services.eazyonline.url' => self::API, 'services.eazyonline.token' => 'leestoken']);
    }

    private function stuk(array $velden = []): array
    {
        return $velden + [
            'id' => 1,
            'external_id' => 'nova_1',
            'type' => 'blog',
            'title' => 'Wat kost een sportschool inrichten?',
            'slug' => 'wat-kost-een-sportschool-inrichten',
            'excerpt' => 'Een overzicht van de kosten.',
            'featured_image' => 'https://eazyonline.test/storage/blogs/banner.jpg',
            'featured_image_alt' => 'Een sportschool',
            'meta_title' => null,
            'meta_description' => 'Wat je kwijt bent aan een sportschool.',
            'published_at' => '2026-10-30T10:00:00+01:00',
            'updated_at' => '2026-10-30T10:00:00+01:00',
            'author' => ['name' => 'Kevin Jansen', 'slug' => 'kevin-jansen', 'role' => 'Adviseur', 'bio' => 'Bouwt al jaren gyms.', 'photo' => null, 'photo_alt' => null, 'same_as' => ['https://www.linkedin.com/in/kevin']],
        ];
    }

    private function api(): void
    {
        $artikel = $this->stuk();
        $dienst = $this->stuk(['id' => 2, 'type' => 'service', 'title' => 'Sportschool laten bouwen', 'slug' => 'sportschool-laten-bouwen', 'author' => null]);

        Http::fake([
            self::API . '/content/' . $artikel['slug'] => Http::response(['data' => $artikel + ['content' => '<h1>Wat kost een sportschool inrichten?</h1><h2>De kosten</h2><p>Reken op <a href="/contact" onclick="x()">veel</a>.</p><script>alert(1)</script>']]),
            self::API . '/content/' . $dienst['slug'] => Http::response(['data' => $dienst + ['content' => '<h2>Wat we doen</h2><p>Alles.</p>']]),
            self::API . '/content*' => Http::response(['data' => [$artikel, $dienst], 'meta' => ['current_page' => 1, 'last_page' => 1, 'per_page' => 100, 'total' => 2]]),
            self::API . '/authors' => Http::response(['data' => [$artikel['author']]]),
        ]);
    }

    /** InSpace herschreef het vaste artikel Eigen gym starten (gym-verdienmodellen). */
    private function herschreven(): void
    {
        $artikel = $this->stuk([
            'title' => 'Eigen gym starten',
            'slug' => 'eigen-gym-starten',
            'meta_title' => 'Eigen gym starten in 2026 | Fitness Aannemer',
            'meta_description' => 'De nieuwe omschrijving van InSpace.',
        ]);

        Http::fake([
            self::API . '/content/eigen-gym-starten' => Http::response(['data' => $artikel + ['content' => '<h2>Zo begin je</h2><p>De tekst van InSpace.</p>']]),
            self::API . '/content*' => Http::response(['data' => [$artikel], 'meta' => ['current_page' => 1, 'last_page' => 1, 'per_page' => 100, 'total' => 1]]),
            self::API . '/authors' => Http::response(['data' => [$artikel['author']]]),
        ]);
    }

    public function test_een_herschreven_vast_artikel_staat_op_zijn_eigen_adres(): void
    {
        // November 2026: Eigen gym starten stond twee keer online, het oude artikel
        // en de tekst van InSpace onder Tips & inspiratie.
        \App\Models\SeoMetadata::create([
            'url_path' => '/fitnesswijzer/gym-verdienmodellen/eigen-gym-starten',
            'page_title' => 'Eigen gym starten',
            'meta_title' => 'Een complete gym starten voor 2.000 euro per maand | Fitness Aannemer',
            'meta_description' => 'De oude omschrijving.',
        ]);
        $this->herschreven();
        $adres = '/fitnesswijzer/gym-verdienmodellen/eigen-gym-starten';

        $this->get($adres)
            ->assertOk()
            ->assertSee('De tekst van InSpace.')
            ->assertSee('<title>Eigen gym starten in 2026 | Fitness Aannemer</title>', false)
            ->assertSee('content="De nieuwe omschrijving van InSpace."', false)
            ->assertDontSee('Een complete gym starten voor 2.000 euro per maand')
            ->assertDontSee('De oude omschrijving.')
            ->assertSee('<link rel="canonical" href="' . url($adres) . '">', false)
            ->assertSee('Gym verdienmodellen');

        $this->get('/fitnesswijzer/tips-en-inspiratie/eigen-gym-starten')->assertStatus(301)->assertRedirect(url($adres));

        // Geen tweede versie tussen de tips, en één keer in de sitemap.
        $this->get('/fitnesswijzer/tips-en-inspiratie')->assertOk()->assertDontSee('/fitnesswijzer/tips-en-inspiratie/eigen-gym-starten', false);
        $sitemap = $this->get('/sitemap.xml')->assertOk()->getContent();
        $this->assertStringNotContainsString('/fitnesswijzer/tips-en-inspiratie/eigen-gym-starten', $sitemap);
        $this->assertSame(1, substr_count($sitemap, url($adres) . '</loc>'));
        $this->get('/auteur/kevin-jansen')->assertSee($adres, false);
    }

    public function test_zonder_herschreven_versie_blijft_het_vaste_artikel_staan(): void
    {
        $this->api();

        $this->get('/fitnesswijzer/gym-verdienmodellen/eigen-gym-starten')
            ->assertOk()
            ->assertSee('hoeft geen fortuin te kosten');
    }

    public function test_een_artikel_staat_onder_tips_en_inspiratie(): void
    {
        $this->api();

        $this->get('/fitnesswijzer/tips-en-inspiratie/wat-kost-een-sportschool-inrichten')
            ->assertOk()
            ->assertSee('Wat kost een sportschool inrichten?')
            ->assertSee('<h2>De kosten</h2>', false)
            ->assertSee('<a href="/contact">veel</a>', false)
            ->assertSee('Kevin Jansen')
            ->assertSee('/auteur/kevin-jansen', false)
            ->assertSee('30 oktober 2026')
            ->assertSee('https://eazyonline.test/storage/blogs/banner.jpg', false)
            ->assertSee('"@type":"Article"', false)
            ->assertDontSee('alert(1)', false)
            ->assertDontSee('onclick', false);
    }

    public function test_de_eigen_h1_uit_de_tekst_valt_weg(): void
    {
        $this->api();

        $html = $this->get('/fitnesswijzer/tips-en-inspiratie/wat-kost-een-sportschool-inrichten')->getContent();

        $this->assertSame(1, substr_count($html, '<h1'));
    }

    public function test_een_artikel_staat_bovenaan_het_overzicht_naast_de_vaste_artikelen(): void
    {
        $this->api();

        $html = $this->get('/fitnesswijzer/tips-en-inspiratie')->assertOk()->getContent();

        $nieuw = strpos($html, '/fitnesswijzer/tips-en-inspiratie/wat-kost-een-sportschool-inrichten');
        $vast = strpos($html, '/fitnesswijzer/tips-en-inspiratie/gym-inrichten-tips');

        $this->assertNotFalse($nieuw);
        $this->assertNotFalse($vast);
        $this->assertLessThan($vast, $nieuw);
        // Een servicepagina hoort niet tussen de artikelen.
        $this->assertStringNotContainsString('Sportschool laten bouwen', $html);
    }

    public function test_een_vast_artikel_blijft_gewoon_werken(): void
    {
        $this->api();

        $this->get('/fitnesswijzer/tips-en-inspiratie/gym-inrichten-tips')->assertOk();
    }

    public function test_een_servicepagina_staat_direct_onder_het_domein(): void
    {
        $this->api();

        $this->get('/sportschool-laten-bouwen')
            ->assertOk()
            ->assertSee('Sportschool laten bouwen')
            ->assertSee('Alle diensten')
            ->assertSee('"@type":"Service"', false)
            ->assertDontSee('Kevin Jansen');
    }

    public function test_de_vaste_pagina_s_gaan_voor_en_een_onbekend_adres_is_een_404(): void
    {
        $this->api();

        $this->get('/sportschool-inrichten')->assertOk()->assertDontSee('"@type":"Service"', false);
        $this->get('/over-ons')->assertOk();
        $this->get('/bestaat-niet')->assertNotFound();

        // Een willekeurig adres raakt de API voor de tekst niet.
        Http::assertNotSent(fn ($request) => str_contains($request->url(), '/content/bestaat-niet'));
    }

    public function test_een_auteurspagina_met_de_artikelen(): void
    {
        $this->api();

        $this->get('/auteur/kevin-jansen')
            ->assertOk()
            ->assertSee('Kevin Jansen')
            ->assertSee('Bouwt al jaren gyms.')
            ->assertSee('/fitnesswijzer/tips-en-inspiratie/wat-kost-een-sportschool-inrichten', false)
            ->assertSee('"@type":"ProfilePage"', false);

        $this->get('/auteur/niemand')->assertNotFound();
    }

    public function test_de_sitemap_noemt_de_nieuwe_pagina_s(): void
    {
        $this->api();

        $this->get('/sitemap.xml')
            ->assertOk()
            ->assertSee(url('/fitnesswijzer/tips-en-inspiratie/wat-kost-een-sportschool-inrichten'), false)
            ->assertSee(url('/sportschool-laten-bouwen'), false)
            ->assertSee('<lastmod>2026-10-30T10:00:00+01:00</lastmod>', false)
            ->assertSee(url('/diensten'), false);
    }

    public function test_zonder_token_blijft_de_site_zoals_hij_was(): void
    {
        config(['services.eazyonline.token' => null]);
        Http::fake();

        $this->get('/fitnesswijzer/tips-en-inspiratie')->assertOk()->assertSee('gym-inrichten-tips');
        $this->get('/sitemap.xml')->assertOk();
        $this->get('/fitnesswijzer/tips-en-inspiratie/wat-kost-een-sportschool-inrichten')->assertNotFound();

        Http::assertNothingSent();
    }

    public function test_een_nieuwe_pagina_verschijnt_ook_als_de_eerste_bezoeker_een_404_krijgt(): void
    {
        $dienst = $this->stuk(['id' => 2, 'type' => 'service', 'title' => 'Sportschool laten bouwen', 'slug' => 'sportschool-laten-bouwen', 'author' => null]);

        Http::fake([
            self::API . '/content/' . $dienst['slug'] => Http::response(['data' => $dienst + ['content' => '<p>Alles.</p>']]),
            // Met het vraagteken: anders loopt ook de losse pagina hierdoor en raakt de reeks op.
            self::API . '/content?*' => Http::sequence()
                ->push(['data' => [], 'meta' => ['last_page' => 1]])
                ->push(['data' => [$dienst], 'meta' => ['last_page' => 1]]),
        ]);

        // De lijst is nog leeg en staat in de cache.
        $this->get('/fitnesswijzer/tips-en-inspiratie')->assertOk();
        $this->travel(6)->minutes();

        // Na de eerste vijf minuten: deze bezoeker krijgt nog de oude lijst, en daarna wordt hij ververst.
        $this->get('/sportschool-laten-bouwen')->assertNotFound();
        $this->get('/sportschool-laten-bouwen')->assertOk();
    }

    public function test_als_de_api_wegvalt_blijft_de_site_werken(): void
    {
        Http::fake(['*' => Http::response('Storing', 500)]);

        $this->get('/fitnesswijzer/tips-en-inspiratie')->assertOk()->assertSee('gym-inrichten-tips');
        $this->get('/sitemap.xml')->assertOk();

        // Na de eerste mislukking wacht niet elke bezoeker op de time-out.
        Http::assertSentCount(1);
    }

    public function test_als_de_api_wegvalt_blijft_de_laatste_stand_staan(): void
    {
        $this->api();
        $this->get('/fitnesswijzer/tips-en-inspiratie/wat-kost-een-sportschool-inrichten')->assertOk();

        Http::swap(new \Illuminate\Http\Client\Factory);
        Http::fake(['*' => Http::response('Storing', 500)]);
        Cache::forget('cms.storing');

        $this->get('/fitnesswijzer/tips-en-inspiratie/wat-kost-een-sportschool-inrichten')->assertOk()->assertSee('De kosten');
    }
}
