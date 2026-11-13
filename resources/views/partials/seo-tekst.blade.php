{{-- Extra tekst van InSpace onderaan een vaste pagina (zie App\Services\PaginaTeksten). Zonder tekst staat hier niets. --}}
@if($seoTekst = $teksten->seoTekst())
    @include('partials.cms-tekst-stijl')
    <section class="bg-white py-16 lg:py-24 relative overflow-hidden border-t border-secondary/[0.04]" data-header-light>
        <div class="max-w-3xl mx-auto px-4 sm:px-6 relative">
            <div class="cms-tekst">{{ $seoTekst }}</div>
        </div>
    </section>
@endif
