@extends('layouts.app')

@section('title', $title . ' | Gymreviews | Fitness Aannemer')
@section('meta_description', $metaDesc)

@section('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Article",
    "headline": "{{ $title }}",
    "description": "{{ $metaDesc }}",
    "url": "{{ url()->current() }}",
    "publisher": {
        "@@type": "Organization",
        "name": "Fitness Aannemer",
        "url": "{{ url('/') }}"
    },
    "isPartOf": {
        "@@type": "Blog",
        "name": "Fitnesswijzer",
        "url": "{{ url('/fitnesswijzer') }}"
    }
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        { "@@type": "ListItem", "position": 1, "name": "Home", "item": "{{ url('/') }}" },
        { "@@type": "ListItem", "position": 2, "name": "Fitnesswijzer", "item": "{{ url('/fitnesswijzer') }}" },
        { "@@type": "ListItem", "position": 3, "name": "Gymreviews", "item": "{{ url('/fitnesswijzer/gymreviews') }}" },
        { "@@type": "ListItem", "position": 4, "name": "{{ $title }}", "item": "{{ url()->current() }}" }
    ]
}
</script>
@endsection

@section('content')
    @php $stillUitsnede = str_starts_with($media1, 'assets/gymreviews/') ? 'object-[center_28%]' : ''; @endphp
    <section class="bg-secondary pt-32 lg:pt-40 pb-16 lg:pb-30 relative overflow-hidden">
        <div class="hidden lg:block absolute inset-y-0 right-0 w-1/2">
            @if(str_ends_with($media1, '.mp4'))
                <video data-src="{{ asset($media1) }}" class="lazy-video w-full h-full object-cover" autoplay muted loop playsinline preload="none"></video>
            @elseif(str_starts_with($media1, 'http'))
                <img src="{{ $media1 }}" alt="{{ $title }}" class="w-full h-full object-cover">
            @else
                <img src="{{ asset($media1) }}" alt="{{ $title }}" class="w-full h-full object-cover {{ $stillUitsnede }}">
            @endif
            <div class="absolute inset-0 bg-gradient-to-r from-secondary via-secondary/80 to-transparent"></div>
            <div class="absolute w-[650px] h-[650px] rounded-full border border-white/[0.07] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"></div>
            <div class="absolute w-[400px] h-[400px] rounded-full border border-white/[0.10] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="ip-hero-el flex items-center gap-2 mb-6">
                <a href="{{ url('/fitnesswijzer') }}" class="text-white/40 text-xs font-medium hover:text-white transition" style="font-family: 'Inter'">Fitnesswijzer</a>
                <i class="fa-solid fa-chevron-right text-white/20 text-[8px]"></i>
                <a href="{{ url('/fitnesswijzer/gymreviews') }}" class="text-white/40 text-xs font-medium hover:text-white transition" style="font-family: 'Inter'">Gymreviews</a>
                <i class="fa-solid fa-chevron-right text-white/20 text-[8px]"></i>
                <span class="text-white/70 text-xs font-medium" style="font-family: 'Inter'">{{ $title }}</span>
            </div>
            <div class="max-w-3xl">
                <h1 class="ip-hero-el text-white text-3xl sm:text-5xl lg:text-6xl font-bold leading-[1]">{!! $heroTitle !!}</h1>
                <p class="ip-hero-el text-white/60 text-sm lg:text-base leading-relaxed max-w-xl my-8">{{ $heroDesc }}</p>
                <div class="ip-hero-el flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                    <a href="{{ url('/vrijblijvend-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Vrijblijvend adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                    <a href="{{ url('/fitnesswijzer/gymreviews') }}" class="bg-white/10 border border-white/20 rounded-full px-6 py-3.5 text-white text-xs font-semibold hover:bg-white/20 transition">Alle gymreviews</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-16 lg:py-32 relative overflow-hidden" id="gd-section1" data-header-light>
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
                        <a href="{{ url('/vrijblijvend-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Vrijblijvend adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                        <a href="{{ url('/fitnesswijzer/gymreviews') }}" class="bg-secondary/10 border border-secondary/20 rounded-full px-6 py-3.5 text-secondary text-xs font-semibold hover:bg-secondary/20 transition">Alle gymreviews</a>
                    </div>
                </div>
                <div class="ip-block-media rounded-3xl aspect-[4/3] overflow-hidden">
                    @if(str_ends_with($media1, '.mp4'))
                        <video data-src="{{ asset($media1) }}" class="lazy-video w-full h-full object-cover" autoplay muted loop playsinline preload="none"></video>
                    @elseif(str_starts_with($media1, 'http'))
                        <img src="{{ $media1 }}" alt="{{ $title }}" class="w-full h-full object-cover" loading="lazy">
                    @else
                        <img src="{{ asset($media1) }}" alt="{{ $title }}" class="w-full h-full object-cover {{ $stillUitsnede }}" loading="lazy">
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section class="bg-secondary py-16 lg:py-32 overflow-hidden" id="gd-section2">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                @if(!empty($tiktok))
                {{-- De TikTok-speler laadt pas na een klik: scheelt laadtijd en er gaat vooraf niets naar TikTok --}}
                <div class="flex justify-center">
                    <div class="ip-block-media relative w-full max-w-[340px] aspect-[9/16] rounded-3xl overflow-hidden bg-black border border-white/[0.08] shadow-2xl">
                        <button type="button" class="tiktok-facade group absolute inset-0 w-full h-full cursor-pointer" data-tiktok-id="{{ $tiktok }}" aria-label="Speel de videoreview af: {{ $title }}">
                            <img src="{{ asset($media3 ?: $media1) }}" alt="Videoreview {{ $title }}" class="w-full h-full object-cover" loading="lazy" width="540" height="960">
                            <span class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition"></span>
                            <span class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-16 h-16 rounded-full bg-primary flex items-center justify-center shadow-xl group-hover:scale-110 transition-transform"><i class="fa-solid fa-play text-white text-xl ml-1"></i></span>
                            <span class="absolute bottom-5 left-0 right-0 text-center text-white text-xs font-semibold" style="font-family: 'Inter'">Bekijk de videoreview</span>
                        </button>
                    </div>
                </div>
                @else
                <div class="ip-block-media rounded-3xl aspect-[4/3] overflow-hidden">
                    @if(str_ends_with($mediaMid, '.mp4'))
                        <video data-src="{{ asset($mediaMid) }}" class="lazy-video w-full h-full object-cover" autoplay muted loop playsinline preload="none"></video>
                    @elseif(str_starts_with($mediaMid, 'http'))
                        <img src="{{ $mediaMid }}" alt="{{ $title }}" class="w-full h-full object-cover" loading="lazy">
                    @else
                        <img src="{{ asset($mediaMid) }}" alt="{{ $title }}" class="w-full h-full object-cover" loading="lazy">
                    @endif
                </div>
                @endif
                <div class="ip-block-text">
                    <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-6">{{ $midLabel }}</span>
                    <h2 class="text-white text-3xl lg:text-5xl font-bold leading-[1.05] mb-8">{!! $midTitle !!}</h2>
                    <p class="text-white/50 text-sm leading-relaxed mb-4">{{ $midP1 }}</p>
                    <p class="text-white/50 text-sm leading-relaxed mb-8">{{ $midP2 }}</p>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                        <a href="{{ url('/vrijblijvend-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Vrijblijvend adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                        <a href="{{ url('/fitnesswijzer/gymreviews') }}" class="bg-white/10 border border-white/20 rounded-full px-6 py-3.5 text-white text-xs font-semibold hover:bg-white/20 transition">Alle gymreviews</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-16 lg:py-32 relative overflow-hidden" id="gd-section3" data-header-light>
        <div class="horizontal-blob w-[600px] h-[600px]" style="background: radial-gradient(circle, rgba(82,171,226,0.18) 0%, rgba(82,171,226,0) 70%); top: -15%; right: -5%; animation: blob-float-3 15s ease-in-out infinite;"></div>
        <div class="horizontal-blob w-[500px] h-[500px]" style="background: radial-gradient(circle, rgba(82,171,226,0.15) 0%, rgba(82,171,226,0) 70%); bottom: -20%; left: -8%; animation: blob-float-1 20s ease-in-out infinite;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="grid grid-cols-1 {{ $media3 ? 'lg:grid-cols-2' : 'max-w-3xl' }} gap-10 lg:gap-16 items-center">
                <div class="ip-block-text">
                    <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-6">{{ $section3Label }}</span>
                    <h2 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.05] mb-8">{!! $section3Title !!}</h2>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-4">{{ $section3P1 }}</p>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-8">{{ $section3P2 }}</p>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                        <a href="{{ url('/vrijblijvend-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Vrijblijvend adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                        <a href="{{ url('/fitnesswijzer/gymreviews') }}" class="bg-secondary/10 border border-secondary/20 rounded-full px-6 py-3.5 text-secondary text-xs font-semibold hover:bg-secondary/20 transition">Alle gymreviews</a>
                    </div>
                </div>
                @if($media3)
                <div class="ip-block-media rounded-3xl aspect-[4/3] overflow-hidden">
                    @if(str_ends_with($media3, '.mp4'))
                        <video data-src="{{ asset($media3) }}" class="lazy-video w-full h-full object-cover" autoplay muted loop playsinline preload="none"></video>
                    @elseif(str_starts_with($media3, 'http'))
                        <img src="{{ $media3 }}" alt="{{ $title }}" class="w-full h-full object-cover" loading="lazy">
                    @else
                        <img src="{{ asset($media3) }}" alt="{{ $title }}" class="w-full h-full object-cover object-[center_25%]" loading="lazy">
                    @endif
                </div>
                @endif
            </div>
        </div>
    </section>

@endsection
