<?php

namespace App\Support;

class Merken
{
    /**
     * Slug van de merkpagina voor een merknaam, of null als het merk (nog) geen eigen pagina heeft.
     * Vergelijkt hoofdletterongevoelig, zodat "GYM80" en "Gym80" allebei matchen.
     */
    public static function slugVoor(string $naam): ?string
    {
        foreach (config('merken.paginas', []) as $slug => $merknaam) {
            if (strcasecmp(trim($naam), $merknaam) === 0) {
                return $slug;
            }
        }

        return null;
    }

    /**
     * Volledige URL van de merkpagina voor een merknaam, of null.
     */
    public static function urlVoor(string $naam): ?string
    {
        $slug = static::slugVoor($naam);

        return $slug ? url('/onze-merken/' . $slug) : null;
    }
}
