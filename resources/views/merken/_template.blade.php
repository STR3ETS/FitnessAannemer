{{-- Shared template for brand pages (/onze-merken/{slug}). Content lives in PageController::$merken --}}
@extends('layouts.app')

@section('title', $metaTitle)
@section('meta_description', $metaDesc)
@section('og_image', asset($heroImage))

@section('schema')
@php
$jsonFlags = JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE;
$schemas = [
    [
        '@context' => 'https://schema.org',
        '@type' => 'WebPage',
        'name' => $metaTitle,
        'description' => $metaDesc,
        'url' => url()->current(),
        'about' => ['@type' => 'Brand', 'name' => $naam],
    ],
    [
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => url('/')],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Onze merken', 'item' => url('/onze-merken')],
            ['@type' => 'ListItem', 'position' => 3, 'name' => $naam, 'item' => url()->current()],
        ],
    ],
    [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => array_map(fn ($faq) => [
            '@type' => 'Question',
            'name' => $faq['q'],
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => strip_tags($faq['a'])],
        ], $faqs),
    ],
];
@endphp
@foreach($schemas as $schema)
<script type="application/ld+json">{!! json_encode($schema, $jsonFlags) !!}</script>
@endforeach
@endsection

@section('content')
    @php
    $linkLight = '[&_a]:text-primary [&_a]:font-semibold [&_a:hover]:underline';
    $linkDark = '[&_a]:text-white [&_a]:underline [&_a]:decoration-white/30 [&_a]:underline-offset-4 [&_a:hover]:decoration-white';
    @endphp

    {{-- 1. Hero --}}
    <section class="bg-secondary pt-32 lg:pt-40 pb-16 lg:pb-30 relative overflow-hidden">
        <div class="hidden lg:block absolute inset-y-0 right-0 w-1/2">
            <img src="{{ asset($heroImage) }}" alt="{{ $heroAlt }}" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-secondary via-secondary/80 to-transparent"></div>
            <div class="absolute w-[650px] h-[650px] rounded-full border border-white/[0.07] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"></div>
            <div class="absolute w-[400px] h-[400px] rounded-full border border-white/[0.10] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="ip-hero-el flex items-center gap-2 mb-6">
                <a href="{{ url('/') }}" class="text-white/40 text-xs font-medium hover:text-white transition" style="font-family: 'Inter'">Home</a>
                <i class="fa-solid fa-chevron-right text-white/20 text-[8px]"></i>
                <a href="{{ url('/onze-merken') }}" class="text-white/40 text-xs font-medium hover:text-white transition" style="font-family: 'Inter'">Onze merken</a>
                <i class="fa-solid fa-chevron-right text-white/20 text-[8px]"></i>
                <span class="text-white/70 text-xs font-medium" style="font-family: 'Inter'">{{ $naam }}</span>
            </div>
            <div class="max-w-3xl">
                <h1 class="ip-hero-el text-white text-4xl lg:text-5xl xl:text-6xl font-bold leading-[1.05]">{!! $heroTitle !!}</h1>
                <p class="ip-hero-el text-white/60 text-sm lg:text-base leading-relaxed max-w-2xl my-8 {{ $linkDark }}">{!! $heroDesc !!}</p>
                <div class="ip-hero-el flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                    <a href="{{ url('/vrijblijvend-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Plan een vrijblijvend adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                    <a href="{{ url('/projecten') }}" class="bg-white/10 border border-white/20 rounded-full px-6 py-3.5 text-white text-xs font-semibold hover:bg-white/20 transition">Bekijk onze projecten</a>
                </div>
            </div>
        </div>
    </section>

    {{-- 2. Over het merk --}}
    <section class="bg-white py-16 lg:py-32 relative overflow-hidden" id="mk-section1" data-header-light>
        <div class="horizontal-blob w-[700px] h-[700px]" style="background: radial-gradient(circle, rgba(82,171,226,0.2) 0%, rgba(82,171,226,0) 70%); top: -20%; left: -10%; animation: blob-float-1 18s ease-in-out infinite;"></div>
        <div class="horizontal-blob w-[500px] h-[500px]" style="background: radial-gradient(circle, rgba(82,171,226,0.15) 0%, rgba(82,171,226,0) 70%); top: 40%; right: -10%; animation: blob-float-2 22s ease-in-out infinite;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="ip-block-text">
                    <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-6">{{ $aboutLabel }}</span>
                    <h2 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.05] mb-8">{!! $aboutTitle !!}</h2>
                    <div class="space-y-4 mb-10 {{ $linkLight }}">
                        @foreach($aboutP as $p)
                        <p class="text-secondary/50 text-sm leading-relaxed">{!! $p !!}</p>
                        @endforeach
                    </div>
                    <div class="grid grid-cols-3 gap-4 lg:gap-6 pt-8 border-t border-secondary/10">
                        @foreach($aboutFacts as $fact)
                        <div>
                            <p class="text-primary text-2xl lg:text-3xl font-bold mb-1 whitespace-nowrap">{{ $fact['value'] }}</p>
                            <p class="text-secondary/40 text-[11px] uppercase font-semibold tracking-wider leading-snug">{{ $fact['label'] }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="ip-block-media rounded-3xl aspect-[4/3] overflow-hidden">
                    <img src="{{ asset($aboutImage) }}" alt="{{ $aboutAlt }}" class="w-full h-full object-cover" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- 3. Series en productlijnen --}}
    <section class="bg-secondary py-16 lg:py-32 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="max-w-2xl mb-12 lg:mb-16">
                <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-4">{{ $seriesLabel }}</span>
                <h2 class="text-white text-3xl lg:text-5xl font-bold leading-[1.05]">{!! $seriesTitle !!}</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                @foreach($series as $serie)
                <div class="bg-white/[0.03] border border-white/[0.06] rounded-2xl p-7 hover:border-primary/30 hover:bg-primary/[0.04] transition-all duration-300">
                    <span class="inline-block bg-primary/10 text-primary text-[10px] font-semibold px-2.5 py-1 rounded-full border border-primary/20 mb-5">{{ $serie['tag'] }}</span>
                    <h3 class="text-white text-lg font-bold leading-snug mb-3">{{ $serie['naam'] }}</h3>
                    <p class="text-white/40 text-sm leading-relaxed">{{ $serie['desc'] }}</p>
                </div>
                @endforeach
            </div>
            <div class="mt-12 lg:mt-16 pt-10 border-t border-white/[0.06] flex flex-col lg:flex-row lg:items-center gap-6 lg:gap-12">
                <p class="text-white/50 text-sm leading-relaxed lg:max-w-3xl {{ $linkDark }}">{!! $seriesNote !!}</p>
                <a href="{{ url('/apparatuur/krachtapparatuur') }}" class="shrink-0 inline-flex items-center bg-white/10 border border-white/20 rounded-full px-6 py-3.5 text-white text-xs font-semibold hover:bg-white/20 transition">Alle krachtapparatuur <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
            </div>
        </div>
    </section>

    {{-- 4. Voor wie --}}
    <section class="bg-white py-16 lg:py-32 relative overflow-hidden" id="mk-section2" data-header-light>
        <div class="horizontal-blob w-[600px] h-[600px]" style="background: radial-gradient(circle, rgba(82,171,226,0.18) 0%, rgba(82,171,226,0) 70%); top: -15%; right: -5%; animation: blob-float-3 15s ease-in-out infinite;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-start">
                <div class="ip-block-text">
                    <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-6">{{ $fitLabel }}</span>
                    <h2 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.05] mb-6">{!! $fitTitle !!}</h2>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-8">{{ $fitIntro }}</p>
                    <div class="bg-secondary/[0.03] border border-secondary/10 rounded-2xl p-6">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-comments text-primary text-sm"></i></div>
                            <div>
                                <p class="text-secondary text-sm font-semibold mb-2">Eerlijk advies</p>
                                <p class="text-secondary/50 text-sm leading-relaxed {{ $linkLight }}">{!! $fitNot !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ip-block-media space-y-4">
                    @foreach($fitFor as $fit)
                    <div class="flex items-start gap-5 bg-white border border-secondary/10 rounded-2xl p-6 hover:border-primary/30 transition-colors">
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-check text-primary text-sm"></i></div>
                        <div>
                            <h3 class="text-secondary text-base font-semibold mb-1">
                                @if(!empty($fit['url']))
                                <a href="{{ url($fit['url']) }}" class="hover:text-primary transition-colors">{{ $fit['title'] }}</a>
                                @else
                                {{ $fit['title'] }}
                                @endif
                            </h3>
                            <p class="text-secondary/50 text-sm leading-relaxed">{{ $fit['desc'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- 5. Waarom via Fitness Aannemer --}}
    <section class="bg-secondary py-16 lg:py-32 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="max-w-2xl mb-12 lg:mb-16">
                <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-4">{{ $whyLabel }}</span>
                <h2 class="text-white text-3xl lg:text-5xl font-bold leading-[1.05] mb-5">{!! $whyTitle !!}</h2>
                <p class="text-white/50 text-sm leading-relaxed">{{ $whyIntro }}</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                @foreach($why as $item)
                <a href="{{ url($item['url']) }}" class="group block bg-white/[0.03] border border-white/[0.06] rounded-2xl p-7 hover:border-primary/30 hover:bg-primary/[0.04] transition-all duration-300">
                    <div class="w-11 h-11 rounded-full bg-primary/10 border border-primary/20 flex items-center justify-center mb-6"><i class="fa-solid {{ $item['icon'] }} text-primary text-sm"></i></div>
                    <h3 class="text-white text-lg font-bold leading-snug mb-3">{{ $item['title'] }}</h3>
                    <p class="text-white/40 text-sm leading-relaxed mb-5">{{ $item['text'] }}</p>
                    <span class="inline-flex items-center text-primary text-xs font-semibold">{{ $item['link'] }} <i class="fa-solid fa-arrow-right text-[10px] ml-2 group-hover:translate-x-1 transition-transform"></i></span>
                </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- 6. Projectfoto / case --}}
    <section class="bg-white py-16 lg:py-32 relative overflow-hidden" id="mk-section3" data-header-light>
        <div class="horizontal-blob w-[500px] h-[500px]" style="background: radial-gradient(circle, rgba(82,171,226,0.15) 0%, rgba(82,171,226,0) 70%); bottom: -20%; left: -8%; animation: blob-float-1 20s ease-in-out infinite;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="ip-block-media rounded-3xl aspect-[4/3] overflow-hidden order-last lg:order-first">
                    <img src="{{ asset($caseImage) }}" alt="{{ $caseAlt }}" class="w-full h-full object-cover" loading="lazy">
                </div>
                <div class="ip-block-text">
                    <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-6">{{ $caseLabel }}</span>
                    <h2 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.05] mb-8">{!! $caseTitle !!}</h2>
                    <div class="space-y-4 mb-8 {{ $linkLight }}">
                        @foreach($caseP as $p)
                        <p class="text-secondary/50 text-sm leading-relaxed">{!! $p !!}</p>
                        @endforeach
                    </div>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                        <a href="{{ url('/projecten') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Bekijk onze projecten <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                        <a href="{{ url('/diensten/inrichting-en-planning') }}" class="bg-secondary/10 border border-secondary/20 rounded-full px-6 py-3.5 text-secondary text-xs font-semibold hover:bg-secondary/20 transition">Inrichting en planning</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 7. FAQ + 8. Afsluitende CTA --}}
    <section class="bg-white py-16 lg:py-32 border-t border-secondary/10" data-header-light>
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="flex flex-col lg:flex-row gap-12 lg:gap-20">
                <div class="lg:w-[40%] shrink-0">
                    <span class="text-primary text-xs font-semibold uppercase tracking-widest mb-4 block">Veelgestelde vragen</span>
                    <h2 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.05] mb-4">{!! $faqTitle !!}</h2>
                    <p class="text-secondary/50 text-sm leading-relaxed max-w-sm">Heb je een vraag die hier niet bij staat? Neem dan gerust contact met ons op voor een vrijblijvend gesprek.</p>
                    <a href="{{ url('/vrijblijvend-adviesgesprek') }}" class="inline-flex items-center bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition mt-8">Stel je vraag <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                </div>
                <div class="lg:w-[60%]">
                    <div class="divide-y divide-secondary/10">
                        @foreach($faqs as $idx => $faq)
                        <details class="faq-item group" {{ $idx === 0 ? 'open' : '' }}>
                            <summary class="flex items-center justify-between gap-4 py-6 cursor-pointer list-none [&::-webkit-details-marker]:hidden">
                                <h3 class="text-secondary text-base font-semibold group-open:text-primary transition-colors">{{ $faq['q'] }}</h3>
                                <div class="faq-toggle w-8 h-8 rounded-full border border-secondary/10 flex items-center justify-center shrink-0 transition-colors">
                                    <i class="fa-solid fa-plus faq-icon-plus text-[10px] text-secondary/40"></i>
                                    <i class="fa-solid fa-minus faq-icon-minus text-[10px] text-primary"></i>
                                </div>
                            </summary>
                            <div class="pb-6 pr-12">
                                <p class="text-secondary/50 text-sm leading-relaxed {{ $linkLight }}">{!! $faq['a'] !!}</p>
                            </div>
                        </details>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="mt-16 lg:mt-24 bg-secondary rounded-3xl px-6 py-12 lg:px-16 lg:py-16 relative overflow-hidden">
                <div class="absolute w-[520px] h-[520px] rounded-full border border-white/[0.07] -top-72 -right-40"></div>
                <div class="absolute w-[320px] h-[320px] rounded-full border border-white/[0.10] -top-44 -right-16"></div>
                <div class="relative max-w-3xl">
                    <h2 class="text-white text-3xl lg:text-5xl font-bold leading-[1.05] mb-5">{!! $ctaTitle !!}</h2>
                    <p class="text-white/50 text-sm lg:text-base leading-relaxed mb-8 max-w-2xl">{{ $ctaText }}</p>
                    <a href="{{ url('/vrijblijvend-adviesgesprek') }}" class="inline-flex items-center bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Plan een vrijblijvend adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                </div>
            </div>
        </div>
    </section>
@endsection
