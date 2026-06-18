@extends('layouts.app')

@section('title', $page->meta_title ?? strip_tags($page->hero_title) . ' | Fitness Aannemer')
@section('meta_description', $page->meta_description ?? '')

@section('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "WebPage",
    "name": "{{ $page->meta_title ?? strip_tags($page->hero_title) }}",
    "description": "{{ $page->meta_description ?? '' }}",
    "url": "{{ $page->getUrl() }}",
    "publisher": {
        "@@type": "Organization",
        "name": "Fitness Aannemer",
        "url": "{{ url('/') }}"
    }
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        { "@@type": "ListItem", "position": 1, "name": "Home", "item": "{{ url('/') }}" },
        { "@@type": "ListItem", "position": 2, "name": "{{ strip_tags($page->hero_title) }}", "item": "{{ $page->getUrl() }}" }
    ]
}
</script>
@endsection

@section('content')
    {{-- Hero --}}
    <section class="bg-secondary pt-32 lg:pt-40 pb-16 lg:pb-30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="ip-hero-el flex items-center gap-2 mb-6">
                <a href="{{ url('/') }}" class="text-white/40 text-xs font-medium hover:text-white transition" style="font-family: 'Inter Tight'">Home</a>
                <i class="fa-solid fa-chevron-right text-white/20 text-[8px]"></i>
                <span class="text-white/70 text-xs font-medium" style="font-family: 'Inter Tight'">{{ $page->hero_label ?? strip_tags($page->hero_title) }}</span>
            </div>
            <div class="max-w-3xl">
                <h1 class="ip-hero-el text-white text-4xl lg:text-6xl font-bold leading-[1]">{!! $page->hero_title !!}</h1>
                <p class="ip-hero-el text-white/60 text-sm lg:text-base leading-relaxed max-w-xl my-8">{{ $page->hero_description }}</p>
                <div class="ip-hero-el flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                    <a href="{{ url($page->hero_cta_url) }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">{{ $page->hero_cta_text }} <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                    @if($page->hero_cta2_text && $page->hero_cta2_url)
                        <a href="{{ url($page->hero_cta2_url) }}" class="bg-white/10 border border-white/20 rounded-full px-6 py-3.5 text-white text-xs font-semibold hover:bg-white/20 transition">{{ $page->hero_cta2_text }}</a>
                    @endif
                </div>
            </div>
        </div>
    </section>

    {{-- Dynamische secties: even = wit, oneven = donker --}}
    @foreach($page->sections ?? [] as $i => $section)
        @if($i % 2 === 0)
            {{-- Witte sectie: tekst links, afbeelding rechts --}}
            <section class="bg-white py-16 lg:py-32 relative overflow-hidden">
                <div class="horizontal-blob w-[700px] h-[700px]" style="background: radial-gradient(circle, rgba(82,171,226,0.2) 0%, rgba(82,171,226,0) 70%); top: -20%; left: -10%; animation: blob-float-{{ ($i % 3) + 1 }} 18s ease-in-out infinite;"></div>
                <div class="horizontal-blob w-[500px] h-[500px]" style="background: radial-gradient(circle, rgba(82,171,226,0.15) 0%, rgba(82,171,226,0) 70%); top: 40%; right: -10%; animation: blob-float-{{ (($i + 1) % 3) + 1 }} 22s ease-in-out infinite;"></div>
                <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                        <div class="ip-block-text">
                            @if(!empty($section['label']))
                                <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-6">{{ $section['label'] }}</span>
                            @endif
                            <h2 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.05] mb-8">{!! $section['title'] !!}</h2>
                            <p class="text-secondary/50 text-sm leading-relaxed mb-4">{{ $section['text1'] }}</p>
                            @if(!empty($section['text2']))
                                <p class="text-secondary/50 text-sm leading-relaxed mb-8">{{ $section['text2'] }}</p>
                            @endif
                            @if(!empty($section['cta_text']) && !empty($section['cta_url']))
                                <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4 mt-8">
                                    <a href="{{ url($section['cta_url']) }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">{{ $section['cta_text'] }} <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                                </div>
                            @endif
                        </div>
                        @if(!empty($section['image']))
                            <div class="ip-block-media rounded-3xl aspect-[4/3] overflow-hidden">
                                <img src="{{ asset('storage/' . $section['image']) }}" alt="{{ $section['label'] ?? strip_tags($section['title']) }}" class="w-full h-full object-cover" loading="lazy">
                            </div>
                        @endif
                    </div>
                </div>
            </section>
        @else
            {{-- Donkere sectie: afbeelding links, tekst rechts --}}
            <section class="bg-secondary py-16 lg:py-32 overflow-hidden">
                <div class="max-w-7xl mx-auto px-4 sm:px-6">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                        @if(!empty($section['image']))
                            <div class="ip-block-media rounded-3xl aspect-[4/3] overflow-hidden bg-white/[0.03] border border-white/[0.06]">
                                <img src="{{ asset('storage/' . $section['image']) }}" alt="{{ $section['label'] ?? strip_tags($section['title']) }}" class="w-full h-full object-cover" loading="lazy">
                            </div>
                        @endif
                        <div class="ip-block-text">
                            @if(!empty($section['label']))
                                <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-6">{{ $section['label'] }}</span>
                            @endif
                            <h2 class="text-white text-3xl lg:text-5xl font-bold leading-[1.05] mb-8">{!! $section['title'] !!}</h2>
                            <p class="text-white/50 text-sm leading-relaxed mb-4">{{ $section['text1'] }}</p>
                            @if(!empty($section['text2']))
                                <p class="text-white/50 text-sm leading-relaxed mb-8">{{ $section['text2'] }}</p>
                            @endif
                            @if(!empty($section['cta_text']) && !empty($section['cta_url']))
                                <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4 mt-8">
                                    <a href="{{ url($section['cta_url']) }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">{{ $section['cta_text'] }} <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </section>
        @endif
    @endforeach
@endsection
