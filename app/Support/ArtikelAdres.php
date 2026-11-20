<?php

namespace App\Support;

use App\Http\Controllers\PageController;

/**
 * Waar een artikel van InSpace op de site staat. Meestal onder Tips &
 * inspiratie; is het een herschreven vast artikel uit een andere rubriek, dan
 * op het adres van dat artikel (zie PageController::bestaandAdres).
 */
class ArtikelAdres
{
    private static ?PageController $paginas = null;

    public static function van(string $slug): string
    {
        self::$paginas ??= app(PageController::class);

        return self::$paginas->bestaandAdres($slug) ?? '/fitnesswijzer/tips-en-inspiratie/' . $slug;
    }
}
