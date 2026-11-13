@extends('layouts.app')

{{-- Een artikel of servicepagina van InSpace (via EazyDash), in de opmaak van de site. --}}
@php
    $titel = $pagina['title'];
    $omschrijving = $pagina['meta_description'] ?: ($pagina['excerpt'] ?: '');
    $banner = $pagina['featured_image'] ?? null;
    $bannerAlt = $pagina['featured_image_alt'] ?: $titel;
    $auteur = $artikel ? ($pagina['author'] ?? null) : null;
    $datum = $artikel && ! empty($pagina['published_at']) ? \Illuminate\Support\Carbon::parse($pagina['published_at']) : null;

    $schema = array_filter([
        '@context' => 'https://schema.org',
        '@type' => $artikel ? 'Article' : 'Service',
        ($artikel ? 'headline' : 'name') => $titel,
        'description' => $omschrijving ?: null,
        'url' => url()->current(),
        'image' => $banner,
        'datePublished' => $datum?->toAtomString(),
        'dateModified' => $artikel ? ($pagina['updated_at'] ?? null) : null,
        'author' => $auteur ? ['@type' => 'Person', 'name' => $auteur['name'], 'url' => url('/auteur/' . $auteur['slug'])] : null,
        ($artikel ? 'publisher' : 'provider') => ['@type' => 'Organization', 'name' => 'Fitness Aannemer', 'url' => url('/')],
    ]);

    $paden = array_merge([['naam' => 'Home', 'url' => url('/')]], $kruimels, [['naam' => $titel, 'url' => url()->current()]]);
    $kruimelpad = [
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => collect($paden)->values()->map(fn ($k, $i) => ['@type' => 'ListItem', 'position' => $i + 1, 'name' => $k['naam'], 'item' => $k['url']])->all(),
    ];
@endphp

@section('title', $pagina['meta_title'] ?: $titel . ' | Fitness Aannemer')
@section('meta_description', $omschrijving)
@if($banner)
    @section('og_image', $banner)
@endif

@section('schema')
<script type="application/ld+json">{!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG) !!}</script>
<script type="application/ld+json">{!! json_encode($kruimelpad, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG) !!}</script>
@endsection

@section('content')
    <section class="bg-secondary pt-32 lg:pt-40 pb-16 lg:pb-30 relative overflow-hidden">
        @if($banner)
        <div class="hidden lg:block absolute inset-y-0 right-0 w-1/2">
            <img src="{{ $banner }}" alt="{{ $bannerAlt }}" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-secondary via-secondary/80 to-transparent"></div>
        </div>
        @endif
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="ip-hero-el flex flex-wrap items-center gap-2 mb-6">
                @foreach($kruimels as $kruimel)
                    <a href="{{ $kruimel['url'] }}" class="text-white/40 text-xs font-medium hover:text-white transition" style="font-family: 'Inter'">{{ $kruimel['naam'] }}</a>
                    <i class="fa-solid fa-chevron-right text-white/20 text-[8px]"></i>
                @endforeach
                <span class="text-white/70 text-xs font-medium" style="font-family: 'Inter'">{{ $titel }}</span>
            </div>
            <div class="max-w-3xl">
                <h1 class="ip-hero-el text-white text-3xl sm:text-5xl lg:text-6xl font-bold leading-[1]">{{ $titel }}</h1>
                @if($pagina['excerpt'])
                    <p class="ip-hero-el text-white/60 text-sm lg:text-base leading-relaxed max-w-xl my-8">{{ $pagina['excerpt'] }}</p>
                @endif
                @if($auteur || $datum)
                    <div class="ip-hero-el flex flex-wrap items-center gap-3 mb-8 text-white/60 text-xs" style="font-family: 'Inter'">
                        @if(! empty($auteur['photo']))
                            <img src="{{ $auteur['photo'] }}" alt="{{ $auteur['photo_alt'] ?: $auteur['name'] }}" class="w-10 h-10 rounded-full object-cover">
                        @endif
                        @if($auteur)
                            <span>Door <a href="{{ url('/auteur/' . $auteur['slug']) }}" rel="author" class="text-white font-semibold hover:text-primary transition">{{ $auteur['name'] }}</a>@if(! empty($auteur['role'])), {{ $auteur['role'] }}@endif</span>
                        @endif
                        @if($datum)
                            <time datetime="{{ $datum->toDateString() }}">{{ $datum->locale('nl')->isoFormat('D MMMM YYYY') }}</time>
                        @endif
                    </div>
                @endif
                <div class="ip-hero-el flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4 {{ $pagina['excerpt'] || $auteur || $datum ? '' : 'mt-8' }}">
                    <a href="{{ url('/vrijblijvend-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Vrijblijvend adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                    @if($artikel)
                        <a href="{{ url('/fitnesswijzer/tips-en-inspiratie') }}" class="bg-white/10 border border-white/20 rounded-full px-6 py-3.5 text-white text-xs font-semibold hover:bg-white/20 transition">Alle artikelen</a>
                    @endif
                </div>
            </div>
        </div>
    </section>

    @include('partials.cms-tekst-stijl')

    <section class="bg-white py-16 lg:py-32 relative overflow-hidden" data-header-light>
        <div class="horizontal-blob w-[700px] h-[700px]" style="background: radial-gradient(circle, rgba(82,171,226,0.2) 0%, rgba(82,171,226,0) 70%); top: -20%; left: -10%; animation: blob-float-1 18s ease-in-out infinite;"></div>
        <div class="max-w-3xl mx-auto px-4 sm:px-6 relative">
            @if($banner)
                <img src="{{ $banner }}" alt="{{ $bannerAlt }}" class="lg:hidden w-full rounded-3xl mb-8">
            @endif
            <div class="cms-tekst">
                {!! $tekst !!}
            </div>
            <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4 mt-12">
                <a href="{{ url('/vrijblijvend-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Vrijblijvend adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                <a href="{{ url($artikel ? '/fitnesswijzer/tips-en-inspiratie' : '/diensten') }}" class="bg-secondary/10 border border-secondary/20 rounded-full px-6 py-3.5 text-secondary text-xs font-semibold hover:bg-secondary/20 transition">{{ $artikel ? 'Alle artikelen' : 'Alle diensten' }}</a>
            </div>
        </div>
    </section>
@endsection
