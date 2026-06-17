{{-- Shared template for all apparatuur category pages --}}
@extends('layouts.app')

@section('title', $title . ' | Fitness Aannemer')
@section('meta_description', $metaDesc)

@section('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "WebPage",
    "name": "{{ $title }}",
    "description": "{{ $metaDesc }}",
    "url": "{{ url()->current() }}"
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        { "@@type": "ListItem", "position": 1, "name": "Home", "item": "{{ url('/') }}" },
        { "@@type": "ListItem", "position": 2, "name": "Apparatuur", "item": "{{ url('/apparatuur') }}" },
        { "@@type": "ListItem", "position": 3, "name": "{{ $title }}", "item": "{{ url()->current() }}" }
    ]
}
</script>
@endsection

@section('content')
    <section class="bg-secondary pt-32 lg:pt-40 pb-16 lg:pb-30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="ip-hero-el flex items-center gap-2 mb-6">
                <a href="{{ url('/apparatuur') }}" class="text-white/40 text-xs font-medium hover:text-white transition" style="font-family: 'Inter Tight'">Apparatuur</a>
                <i class="fa-solid fa-chevron-right text-white/20 text-[8px]"></i>
                <span class="text-white/70 text-xs font-medium" style="font-family: 'Inter Tight'">{{ $heroLabel }}</span>
            </div>
            <div class="max-w-3xl">
                <h1 class="ip-hero-el text-white text-4xl lg:text-6xl font-bold leading-[1]">{!! $heroTitle !!}</h1>
                <p class="ip-hero-el text-white/60 text-sm lg:text-base leading-relaxed max-w-xl my-8">{{ $heroDesc }}</p>
                <div class="ip-hero-el flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                    <a href="{{ url('/gratis-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Gratis adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                    <a href="{{ url('/projecten') }}" class="bg-white/10 border border-white/20 rounded-full px-6 py-3.5 text-white text-xs font-semibold hover:bg-white/20 transition">Bekijk onze projecten</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-16 lg:py-32 relative overflow-hidden" id="app-section1">
        <div class="horizontal-blob w-[700px] h-[700px]" style="background: radial-gradient(circle, rgba(82,171,226,0.2) 0%, rgba(82,171,226,0) 70%); top: -20%; left: -10%; animation: blob-float-1 18s ease-in-out infinite;"></div>
        <div class="horizontal-blob w-[500px] h-[500px]" style="background: radial-gradient(circle, rgba(82,171,226,0.15) 0%, rgba(82,171,226,0) 70%); top: 40%; right: -10%; animation: blob-float-2 22s ease-in-out infinite;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="ip-block-text">
                    <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-6">{{ $introLabel }}</span>
                    <h2 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.05] mb-8">{!! $introTitle !!}</h2>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-4">{{ $introP1 }}</p>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-8">{{ $introP2 }}</p>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                        <a href="{{ url('/gratis-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Gratis adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                        <a href="{{ url('/projecten') }}" class="bg-secondary/10 border border-secondary/20 rounded-full px-6 py-3.5 text-secondary text-xs font-semibold hover:bg-secondary/20 transition">Bekijk onze projecten</a>
                    </div>
                </div>
                <div class="ip-block-media rounded-3xl aspect-[4/3] overflow-hidden">
                    @if(str_ends_with($media1, '.mp4'))
                        <video src="{{ asset($media1) }}" class="w-full h-full object-cover" autoplay muted loop playsinline></video>
                    @else
                        <img src="{{ asset($media1) }}" alt="{{ $heroLabel }}" class="w-full h-full object-cover" loading="lazy">
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section class="bg-secondary py-16 lg:py-32 overflow-hidden" id="app-section2">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            {{-- Section heading --}}
            <div class="ip-fade text-center mb-16">
                <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-4">{{ $midLabel }}</span>
                <h2 class="text-white text-4xl lg:text-5xl font-bold leading-[1.05]">{!! $midTitle !!}</h2>
            </div>

            {{-- Product feature cards --}}
            <div class="ip-fade grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mb-20">
                @foreach($products as $prod)
                <div class="bg-white/[0.03] border border-white/[0.06] rounded-2xl p-7 hover:border-primary/30 hover:bg-primary/[0.04] transition-all duration-300">
                    <div class="w-11 h-11 rounded-xl bg-primary/10 flex items-center justify-center mb-5">
                        <i class="fa-solid {{ $prod['icon'] }} text-primary"></i>
                    </div>
                    <h3 class="text-white text-base font-bold mb-2" style="font-family: 'Inter Tight'">{{ $prod['title'] }}</h3>
                    <p class="text-white/40 text-sm leading-relaxed">{{ $prod['desc'] }}</p>
                </div>
                @endforeach
            </div>

            {{-- Brand logos --}}
            @if(!empty($merken))
            <div class="ip-fade">
                <p class="text-white/30 text-xs uppercase tracking-widest font-semibold text-center mb-8">Merken in deze categorie</p>
                <div class="flex flex-wrap items-center justify-center gap-4">
                    @foreach($merken as $merk)
                    <span class="brand-pill">
                        <img src="{{ $merk['logo'] }}" alt="{{ $merk['name'] }}" class="brand-logo">
                    </span>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
    </section>

    <section class="bg-white py-16 lg:py-32 relative overflow-hidden" id="app-section3">
        <div class="horizontal-blob w-[600px] h-[600px]" style="background: radial-gradient(circle, rgba(82,171,226,0.18) 0%, rgba(82,171,226,0) 70%); top: -15%; right: -5%; animation: blob-float-3 15s ease-in-out infinite;"></div>
        <div class="horizontal-blob w-[500px] h-[500px]" style="background: radial-gradient(circle, rgba(82,171,226,0.15) 0%, rgba(82,171,226,0) 70%); bottom: -20%; left: -8%; animation: blob-float-1 20s ease-in-out infinite;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="ip-block-text">
                    <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-6">{{ $section3Label }}</span>
                    <h2 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.05] mb-8">{!! $section3Title !!}</h2>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-4">{{ $section3P1 }}</p>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-8">{{ $section3P2 }}</p>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                        <a href="{{ url('/gratis-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Gratis adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                        <a href="{{ url('/projecten') }}" class="bg-secondary/10 border border-secondary/20 rounded-full px-6 py-3.5 text-secondary text-xs font-semibold hover:bg-secondary/20 transition">Bekijk onze projecten</a>
                    </div>
                </div>
                <div class="ip-block-media rounded-3xl aspect-[4/3] overflow-hidden">
                    @if(str_ends_with($media3, '.mp4'))
                        <video src="{{ asset($media3) }}" class="w-full h-full object-cover" autoplay muted loop playsinline></video>
                    @else
                        <img src="{{ asset($media3) }}" alt="{{ $section3Label }}" class="w-full h-full object-cover" loading="lazy">
                    @endif
                </div>
            </div>
        </div>
    </section>

@endsection
