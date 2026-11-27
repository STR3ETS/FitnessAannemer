<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

/**
 * Punten uit de technische scan van InSpace (nov 2026): een main-landmark,
 * iconen met een naam voor schermlezers en leesbare lichte tekst.
 */
class ToegankelijkheidTest extends TestCase
{
    use RefreshDatabase;

    public function test_de_pagina_heeft_een_main_en_iconen_met_een_naam(): void
    {
        $this->withoutVite();
        Http::fake();

        $html = $this->get('/over-ons')->assertOk()->getContent();

        $this->assertSame(1, substr_count($html, '<main'));
        $this->assertStringContainsString('aria-label="Fitness Aannemer op Instagram"', $html);
        $this->assertStringContainsString('aria-label="Aanmelden voor de nieuwsbrief"', $html);
        $this->assertStringContainsString('.text-white\/40', $html);
        $this->assertDoesNotMatchRegularExpression('~<a href="https://www\.instagram\.com/fitnessaannemer\.nl/" target="_blank" rel="noopener" class=~', $html);
    }
}
