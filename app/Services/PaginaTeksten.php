<?php

namespace App\Services;

use App\Models\SeoMetadata;
use Illuminate\Support\HtmlString;

/**
 * Teksten op de vaste pagina's (diensten, apparatuur, inrichten) die InSpace via
 * EazyDash mag aanpassen. De pagina vraagt elk veld op met zijn eigen tekst als
 * standaard: staat er een aanpassing, dan komt die ervoor in de plaats, anders
 * verandert er niets. Foto's, knoppen en opmaak zitten niet in een veld en
 * blijven dus altijd staan.
 *
 * Dezelfde aanroepen bouwen ook de lijst van velden die EazyDash aan InSpace
 * laat zien (zie opname()): wat een pagina opvraagt, is aan te passen.
 */
class PaginaTeksten
{
    public const TEKST = 'text';

    public const INLINE = 'inline_html';

    public const HTML = 'html';

    /** @var array<string, string>|null */
    private ?array $teksten;

    /** @var array<string, array{name: string, type: string, label: string, default: string}> */
    private array $velden = [];

    private function __construct(private readonly ?string $pad, private readonly bool $opname = false)
    {
        $this->teksten = $opname ? [] : null;
    }

    /** De aanpassingen voor dit adres. Ze worden pas opgehaald als de pagina een veld vraagt. */
    public static function voor(string $pad): self
    {
        return new self('/' . trim($pad, '/'));
    }

    /** Zonder aanpassingen, en onthoudt welke velden de pagina opvraagt. */
    public static function opname(): self
    {
        return new self(null, opname: true);
    }

    /** Platte tekst. De standaard is de html zoals hij in de pagina stond. */
    public function tekst(string $naam, string $standaard): HtmlString
    {
        $eigen = $this->eigen($naam, self::TEKST, $standaard);

        return new HtmlString($eigen === null ? $standaard : e(self::plat($eigen)));
    }

    /** Een kop of alinea met een accent, regelafbreking, nadruk of link. */
    public function inline(string $naam, string $standaard): HtmlString
    {
        $eigen = $this->eigen($naam, self::INLINE, $standaard);

        return new HtmlString($eigen === null ? $standaard : self::schoonInline($eigen));
    }

    /** Titel of omschrijving voor Google. Een gewone tekst: Blade zet hem zelf veilig neer. */
    public function meta(string $naam, string $standaard): string
    {
        $eigen = $this->eigen($naam, self::TEKST, $standaard);

        return $eigen === null ? $standaard : self::plat($eigen);
    }

    /**
     * Bij de meeste vaste pagina's staan titel en omschrijving voor Google in het
     * beheer (SeoMetadata), en die gaan in de layout voor de tekst van de pagina.
     * Dat is dus wat er nu staat. Heeft InSpace ze aangepast, dan gaat dat voor;
     * anders blijft het beheer precies zoals het was.
     */
    public function metSeo(?SeoMetadata $seo): ?SeoMetadata
    {
        if (! $seo) {
            return null;
        }

        $seo = clone $seo;

        if ($seo->meta_title && ($titel = $this->eigen('meta_title', self::TEKST, self::zonderMerk($seo->meta_title))) !== null) {
            $seo->meta_title = self::plat($titel) . ' | Fitness Aannemer';
        }

        if ($seo->meta_description && ($omschrijving = $this->eigen('meta_description', self::TEKST, $seo->meta_description)) !== null) {
            $seo->meta_description = self::plat($omschrijving);
        }

        return $seo;
    }

    /** De extra tekst onderaan, of null als die er niet is. */
    public function seoTekst(): ?HtmlString
    {
        $eigen = $this->eigen('seo_content', self::HTML, '');
        $html = $eigen === null ? '' : CmsContentService::schoon($eigen, '');

        return $html === '' ? null : new HtmlString($html);
    }

    /** @return list<array{name: string, type: string, label: string, default: string}> */
    public function velden(): array
    {
        return array_values($this->velden);
    }

    private function eigen(string $naam, string $soort, string $standaard): ?string
    {
        if ($this->opname && ! isset($this->velden[$naam])) {
            $this->velden[$naam] = [
                'name' => $naam,
                'type' => $soort,
                'label' => self::label($naam),
                'default' => $soort === self::INLINE ? trim($standaard) : self::plat($standaard),
            ];
        }

        $this->teksten ??= app(CmsContentService::class)->paginaTeksten()->get($this->pad, []);
        $waarde = $this->teksten[$naam] ?? null;

        return is_string($waarde) && trim($waarde) !== '' ? $waarde : null;
    }

    private static function plat(string $html): string
    {
        return trim((string) preg_replace('~\s+~u', ' ', html_entity_decode(strip_tags(self::zonderScripts($html)), ENT_QUOTES | ENT_HTML5, 'UTF-8')));
    }

    private static function zonderMerk(string $titel): string
    {
        return trim((string) preg_replace('~\s*\|\s*Fitness Aannemer\s*$~i', '', $titel));
    }

    /** strip_tags laat de inhoud van een script staan; die moet er ook uit. */
    private static function zonderScripts(string $html): string
    {
        return (string) preg_replace('~<(script|style)\b[^>]*>.*?</\1\s*>~is', '', $html);
    }

    /**
     * Alleen een accent (span met text-primary), een regelafbreking, nadruk en
     * links. Alle andere tags en attributen gaan eruit.
     */
    private static function schoonInline(string $html): string
    {
        $html = strip_tags(self::zonderScripts($html), '<span><br><strong><em><b><i><a>');

        return trim((string) preg_replace_callback('~<(/?)(span|br|strong|em|b|i|a)\b([^>]*)>~i', function (array $m) {
            $tag = strtolower($m[2]);

            if ($m[1] === '/') {
                return $tag === 'br' ? '' : "</{$tag}>";
            }

            return match ($tag) {
                'span' => str_contains($m[3], 'text-primary') ? '<span class="text-primary">' : '<span>',
                'a' => preg_match('~href\s*=\s*(["\'])(.*?)\1~i', $m[3], $href) && ! preg_match('~^\s*(javascript|data):~i', $href[2])
                    ? '<a href="' . e(html_entity_decode($href[2])) . '">'
                    : '<a>',
                default => "<{$tag}>",
            };
        }, $html));
    }

    private static function label(string $naam): string
    {
        return match (true) {
            $naam === 'meta_title' => 'Paginatitel in Google (de title-tag, zonder "| Fitness Aannemer")',
            $naam === 'meta_description' => 'Omschrijving in Google (meta description)',
            $naam === 'hero_title' => 'Kop bovenaan de pagina (h1)',
            $naam === 'hero_text' => 'Tekst onder de kop bovenaan',
            $naam === 'seo_content' => 'Extra tekst onderaan de pagina, met eigen tussenkoppen (h2, h3), lijsten en links',
            (bool) preg_match('~^section(\d+)_step(\d+)_(title|text)$~', $naam, $m) => "Blok {$m[1]}, stap {$m[2]}, " . ($m[3] === 'title' ? 'kop (h3)' : 'tekst'),
            (bool) preg_match('~^section(\d+)_label$~', $naam, $m) => "Blok {$m[1]}, klein label boven de kop",
            (bool) preg_match('~^section(\d+)_title$~', $naam, $m) => "Blok {$m[1]}, kop (h2)",
            (bool) preg_match('~^section(\d+)_text(\d+)$~', $naam, $m) => "Blok {$m[1]}, alinea {$m[2]}",
            default => $naam,
        };
    }
}
