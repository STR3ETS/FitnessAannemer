@extends('layouts.app')

{{-- De auteur van artikelen van InSpace (via EazyDash), met die artikelen eronder. --}}
@php
    $sociaal = collect($auteur['same_as'] ?? [])->filter()->values();
    $schema = array_filter([
        '@context' => 'https://schema.org',
        '@type' => 'ProfilePage',
        'mainEntity' => array_filter([
            '@type' => 'Person',
            'name' => $auteur['name'],
            'jobTitle' => $auteur['role'] ?? null,
            'description' => $auteur['bio'] ?? null,
            'image' => $auteur['photo'] ?? null,
            'sameAs' => $sociaal->isNotEmpty() ? $sociaal->all() : null,
            'worksFor' => ['@type' => 'Organization', 'name' => 'Fitness Aannemer', 'url' => url('/')],
        ]),
    ]);
@endphp

@section('title', $auteur['name'] . ' | Fitness Aannemer')
@section('meta_description', \Illuminate\Support\Str::limit((string) ($auteur['bio'] ?? ('Artikelen van ' . $auteur['name'] . ' bij Fitness Aannemer.')), 155))

@section('schema')
<script type="application/ld+json">{!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG) !!}</script>
@endsection

@section('content')
    <section class="bg-secondary pt-32 lg:pt-40 pb-16 lg:pb-30 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="ip-hero-el flex flex-wrap items-center gap-2 mb-6">
                <a href="{{ url('/fitnesswijzer') }}" class="text-white/40 text-xs font-medium hover:text-white transition" style="font-family: 'Inter'">Fitnesswijzer</a>
                <i class="fa-solid fa-chevron-right text-white/20 text-[8px]"></i>
                <span class="text-white/70 text-xs font-medium" style="font-family: 'Inter'">{{ $auteur['name'] }}</span>
            </div>
            <div class="max-w-3xl">
                @if(! empty($auteur['photo']))
                    <img src="{{ $auteur['photo'] }}" alt="{{ $auteur['photo_alt'] ?: $auteur['name'] }}" class="ip-hero-el w-10 h-10 rounded-full object-cover mb-6" style="width: 6rem; height: 6rem">
                @endif
                <h1 class="ip-hero-el text-white text-3xl sm:text-5xl lg:text-6xl font-bold leading-[1]">{{ $auteur['name'] }}</h1>
                @if(! empty($auteur['role']))
                    <p class="ip-hero-el text-primary text-sm font-semibold mt-4">{{ $auteur['role'] }}</p>
                @endif
                @if(! empty($auteur['bio']))
                    <p class="ip-hero-el text-white/60 text-sm lg:text-base leading-relaxed max-w-xl my-8">{{ $auteur['bio'] }}</p>
                @endif
                @if($sociaal->isNotEmpty())
                    <div class="ip-hero-el flex flex-wrap items-center gap-3">
                        @foreach($sociaal as $link)
                            <a href="{{ $link }}" target="_blank" rel="noopener me" class="bg-white/10 border border-white/20 rounded-full px-6 py-3.5 text-white text-xs font-semibold hover:bg-white/20 transition">{{ parse_url($link, PHP_URL_HOST) }}</a>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </section>

    @if($auteur['artikelen']->isNotEmpty())
        <section class="bg-white py-16 lg:py-32 relative overflow-hidden" data-header-light>
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <h2 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.05] mb-8">Artikelen van <span class="text-primary">{{ $auteur['name'] }}</span></h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @foreach($auteur['artikelen'] as $slug => $artikel)
                        <a href="{{ url('/fitnesswijzer/tips-en-inspiratie/' . $slug) }}" class="group bg-secondary rounded-2xl overflow-hidden transition-all duration-300">
                            <div class="aspect-[16/9] relative overflow-hidden">
                                <img src="{{ $artikel['featured_image'] ?: asset('assets/wp-uploads/FA_VDS_AUG2025-07-scaled.jpg') }}" alt="{{ $artikel['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                                <div class="absolute inset-0 bg-gradient-to-t from-secondary via-secondary/70 to-secondary/20"></div>
                                <div class="absolute bottom-0 left-0 right-0 p-8">
                                    <h3 class="text-white text-xl font-bold mb-2" style="font-family: 'Inter'">{{ $artikel['title'] }}</h3>
                                    <span class="inline-flex items-center text-primary text-xs font-semibold mt-4" style="font-family: 'Inter'">
                                        Lees artikel <i class="fa-solid fa-arrow-right text-[10px] ml-1.5 group-hover:translate-x-1 transition-transform"></i>
                                    </span>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endsection
