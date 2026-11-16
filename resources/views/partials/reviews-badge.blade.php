{{-- Google-reviewscore voor donkere achtergronden. Komen er reviews bij, pas dan alleen hier de cijfers aan. --}}
@php $googleReviewsUrl = 'https://www.google.com/search?q=google+reviews+fitnessaannemer&si=AE1YtOqiKPb2pdLXAi8quZ9vbH4aVq_aX8-3H9iFBLpRNK95c1dyuCyHHshdgfOq8DSOXy0tpRiJOixfMmWV6BXvloR_Hq2HI5Tq-BjW6pKNl-NIicHo6BA%3D'; @endphp
<a href="{{ $googleReviewsUrl }}" target="_blank" rel="noopener" class="group inline-flex flex-wrap items-center justify-center gap-x-2.5 gap-y-1 {{ $class ?? '' }}" aria-label="Beoordeeld met 5 van de 5 sterren op basis van meer dan 30 Google reviews (opent in een nieuw tabblad)">
    <span class="flex items-center gap-0.5 text-[#FBBC05] text-xs" aria-hidden="true">
        @for($i = 0; $i < 5; $i++)<i class="fa-solid fa-star"></i>@endfor
    </span>
    <span class="text-white text-xs font-semibold" style="font-family: 'Inter'">5,0</span>
    <span class="text-white/60 group-hover:text-white text-xs transition-colors" style="font-family: 'Inter'">op basis van 30+ Google reviews</span>
</a>
