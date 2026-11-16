<?php

namespace Tests\Feature;

use App\Models\SeoMetadata;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

/**
 * InSpace past via EazyDash teksten aan op de vaste dienst-, apparatuur- en
 * inrichtenpagina's. Alleen de teksten: foto's, knoppen en opmaak blijven.
 */
class PaginaTekstenTest extends TestCase
{
    use RefreshDatabase;

    private const API = 'https://eazyonline.test/api/v1';

    protected function setUp(): void
    {
        parent::setUp();

        $this->withoutVite();
        config(['services.eazyonline.url' => self::API, 'services.eazyonline.token' => 'leestoken']);
    }

    /** @param array<string, array<string, string>> $paginas */
    private function aanpassingen(array $paginas): void
    {
        Http::fake([
            self::API . '/page-texts' => Http::response(['data' => collect($paginas)->map(fn ($velden, $pad) => ['path' => $pad, 'fields' => $velden, 'updated_at' => '2026-11-13T10:00:00+01:00'])->values()->all()]),
        ]);
    }

    public function test_de_lijst_met_velden_is_er_alleen_met_het_leestoken(): void
    {
        Http::fake();

        $this->get('/inspace/paginas')->assertNotFound();
        $this->getJson('/inspace/paginas', ['Authorization' => 'Bearer fout'])->assertNotFound();

        $lijst = $this->getJson('/inspace/paginas', ['Authorization' => 'Bearer leestoken'])->assertOk()->json('data');
        $paginas = collect($lijst)->keyBy('path');

        $this->assertCount(25, $paginas);
        $this->assertSame('apparatuur', $paginas['/apparatuur/kluisjes']['template']);
        $this->assertSame('inrichten', $paginas['/sportschool-inrichten']['template']);
        $this->assertSame('dienst', $paginas['/diensten/turnkey-sportschool-bouwen']['template']);

        $kluisjes = collect($paginas['/apparatuur/kluisjes']['fields'])->keyBy('name');
        $this->assertSame(['type' => 'text', 'default' => 'Kluisjes'], array_intersect_key($kluisjes['meta_title'], ['type' => 1, 'default' => 1]));
        $this->assertSame('<span class="text-primary">Kluisjes</span>', $kluisjes['hero_title']['default']);
        $this->assertSame('inline_html', $kluisjes['hero_title']['type']);
        $this->assertStringStartsWith('Leden beginnen en eindigen elk bezoek', $kluisjes['section2_text1']['default']);
        $this->assertSame('html', $kluisjes['seo_content']['type']);
        $this->assertSame('Blok 2, alinea 1', $kluisjes['section2_text1']['label']);

        $turnkey = collect($paginas['/diensten/turnkey-sportschool-bouwen']['fields'])->keyBy('name');
        $this->assertSame('Turnkey sportschool bouwen', $turnkey['meta_title']['default']);
        $this->assertSame('Kennismaking & intake', $turnkey['section3_step1_title']['default']);
        $this->assertSame('Blok 3, stap 1, kop (h3)', $turnkey['section3_step1_title']['label']);

        // Foto's, video's en knoppen zijn geen veld.
        $this->assertStringNotContainsString('assets/', json_encode($lijst));
        $this->assertStringNotContainsString('Vrijblijvend adviesgesprek', json_encode($lijst));

        // Het opbouwen van de lijst haalt geen aanpassingen op.
        Http::assertNothingSent();
    }

    public function test_een_aangepaste_tekst_staat_op_de_pagina_en_de_rest_blijft(): void
    {
        $this->aanpassingen(['/apparatuur/kluisjes' => [
            'meta_title' => 'Kluisjes voor je sportschool',
            'hero_text' => 'Lockers op maat & gemonteerd.',
            'section2_title' => 'Een kop met <span class="text-primary" onclick="x()">accent</span><script>alert(1)</script>',
            'seo_content' => '<h1>Kluisjes</h1><h2>Welke sluiting kies je?</h2><p>Een <a href="javascript:alert(2)">cijferslot</a> of <a href="/apparatuur/meubels">meubels</a>.</p><script>alert(3)</script>',
        ]]);

        $this->get('/apparatuur/kluisjes')
            ->assertOk()
            ->assertSee('<title>Kluisjes voor je sportschool | Fitness Aannemer</title>', false)
            ->assertSee('Lockers op maat &amp; gemonteerd.', false)
            ->assertSee('Een kop met <span class="text-primary">accent</span>', false)
            ->assertSee('<h2>Welke sluiting kies je?</h2>', false)
            ->assertSee('<a href="/apparatuur/meubels">meubels</a>', false)
            ->assertDontSee('Lockers die passen bij jouw club')
            ->assertDontSee('onclick', false)
            ->assertDontSee('alert(', false)
            ->assertDontSee('javascript:', false)
            // Wat niet is aangepast, en de foto's en knoppen, staan er nog.
            ->assertSee('Leden beginnen en eindigen elk bezoek')
            ->assertSee('assets/kl-hero.jpg', false)
            ->assertSee('assets/Lockers_FA2.webp', false)
            ->assertSee('Offerte aanvragen');

        // Een andere pagina merkt er niets van.
        $this->get('/apparatuur/meubels')->assertOk()->assertSee('Van receptiebalie en loungehoek')->assertDontSee('Welke sluiting');
    }

    public function test_ook_op_een_dienstpagina_en_een_inrichtenpagina(): void
    {
        $this->aanpassingen([
            '/diensten/turnkey-sportschool-bouwen' => ['hero_title' => 'Sportschool<br><span class="text-primary">laten bouwen</span>', 'section3_step1_title' => 'Eerst een gesprek'],
            '/hyrox-box-inrichten' => ['section2_text2' => 'Een nieuwe alinea.'],
        ]);

        $this->get('/diensten/turnkey-sportschool-bouwen')
            ->assertOk()
            ->assertSee('Sportschool<br><span class="text-primary">laten bouwen</span>', false)
            ->assertSee('Eerst een gesprek')
            ->assertDontSee('Kennismaking &amp; intake', false)
            ->assertSee('Ontwerp &amp; projectplan', false);

        $this->get('/hyrox-box-inrichten')->assertOk()->assertSee('Een nieuwe alinea.');
    }

    public function test_titel_en_omschrijving_uit_het_beheer_zijn_de_standaard_en_inspace_gaat_voor(): void
    {
        SeoMetadata::create(['url_path' => '/apparatuur/cardio', 'meta_title' => 'Cardio apparatuur | Fitness Aannemer', 'meta_description' => 'Premium cardio apparatuur.']);
        SeoMetadata::create(['url_path' => '/apparatuur/gewichten', 'meta_title' => 'Gewichten | Fitness Aannemer', 'meta_description' => 'Dumbbells en barbells.']);

        Http::fake();
        $lijst = collect($this->getJson('/inspace/paginas', ['Authorization' => 'Bearer leestoken'])->json('data'))->keyBy('path');
        $cardio = collect($lijst['/apparatuur/cardio']['fields'])->keyBy('name');
        $this->assertSame('Cardio apparatuur', $cardio['meta_title']['default']);
        $this->assertSame('Premium cardio apparatuur.', $cardio['meta_description']['default']);

        Http::swap(new \Illuminate\Http\Client\Factory);
        $this->aanpassingen(['/apparatuur/cardio' => ['meta_title' => 'Loopbanden en crosstrainers', 'meta_description' => 'Nieuwe omschrijving.']]);

        $this->get('/apparatuur/cardio')
            ->assertOk()
            ->assertSee('<title>Loopbanden en crosstrainers | Fitness Aannemer</title>', false)
            ->assertSee('<meta name="description" content="Nieuwe omschrijving.">', false);

        // Zonder aanpassing blijft het beheer precies staan.
        $this->get('/apparatuur/gewichten')
            ->assertOk()
            ->assertSee('<title>Gewichten | Fitness Aannemer</title>', false)
            ->assertSee('<meta name="description" content="Dumbbells en barbells.">', false);
    }

    public function test_bij_een_storing_blijft_de_tekst_zoals_hij_was(): void
    {
        Http::fake(['*' => Http::response('Storing', 500)]);

        $this->get('/apparatuur/kluisjes')->assertOk()->assertSee('Lockers die passen bij jouw club');
        $this->get('/diensten/turnkey-sportschool-bouwen')->assertOk()->assertSee('Kennismaking &amp; intake', false);
    }
}
