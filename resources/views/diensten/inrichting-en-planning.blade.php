@extends('layouts.app')

@section('title', 'Inrichting & Planning | Fitness Aannemer')
@section('meta_description', 'Professioneel gymontwerp met 3D visualisatie. Fitness Aannemer maakt een doordacht plan voor jouw fitnessruimte, van plattegrond tot apparatuurkeuze.')

@section('content')
    <section class="bg-secondary pt-32 lg:pt-40 pb-16 lg:pb-30" id="ip-hero">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="ip-hero-el flex items-center gap-2 mb-6">
                <a href="{{ url('/diensten') }}" class="text-white/40 text-xs font-medium hover:text-white transition" style="font-family: 'Inter Tight'">Diensten</a>
                <i class="fa-solid fa-chevron-right text-white/20 text-[8px]"></i>
                <span class="text-white/70 text-xs font-medium" style="font-family: 'Inter Tight'">Inrichting & planning</span>
            </div>
            <div class="max-w-3xl">
                <h1 class="ip-hero-el text-white text-4xl lg:text-6xl font-bold leading-[1]">Inrichting &<br><span class="text-primary">planning</span></h1>
                <p class="ip-hero-el text-white/60 text-sm lg:text-base leading-relaxed max-w-xl my-8">Slim ontwerp en doordachte planning vormen de basis van elke succesvolle fitnessruimte. Wij vertalen jouw visie naar een functioneel en inspirerend concept.</p>
                <div class="ip-hero-el flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                    <a href="{{ url('/gratis-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Gratis adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                    <a href="{{ url('/projecten') }}" class="bg-white/10 border border-white/20 rounded-full px-6 py-3.5 text-white text-xs font-semibold hover:bg-white/20 transition">Bekijk onze projecten</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-16 lg:py-32 relative overflow-hidden" id="ip-zonering">
        <div class="horizontal-blob w-[700px] h-[700px]" style="background: radial-gradient(circle, rgba(82,171,226,0.2) 0%, rgba(82,171,226,0) 70%); top: -20%; left: -10%; animation: blob-float-1 18s ease-in-out infinite;"></div>
        <div class="horizontal-blob w-[500px] h-[500px]" style="background: radial-gradient(circle, rgba(82,171,226,0.15) 0%, rgba(82,171,226,0) 70%); top: 40%; right: -10%; animation: blob-float-2 22s ease-in-out infinite;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="ip-block-text">
                    <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-6">Zonering & indeling</span>
                    <h2 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.05] mb-8">Elke vierkante meter <span class="text-primary">doordacht benut</span></h2>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-4">Een goede gym draait niet om zoveel mogelijk apparaten, maar om de juiste indeling. Wij ontwerpen zones die logisch op elkaar aansluiten: vrije gewichten gescheiden van cardio, een functionele zone met voldoende ruimte, en looppaden die flow creëren, ook tijdens piekuren.</p>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-8">Door rekening te houden met zichtlijnen, spiegelplaatsing en natuurlijke looproutes voelt jouw gym ruimer en professioneler aan. Of je nu 100 of 1.000 m² hebt.</p>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                        <a href="{{ url('/gratis-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Gratis adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                        <a href="{{ url('/projecten') }}" class="bg-secondary/10 border border-secondary/20 rounded-full px-6 py-3.5 text-secondary text-xs font-semibold hover:bg-secondary/20 transition">Bekijk onze projecten</a>
                    </div>
                </div>
                <div class="ip-block-media rounded-3xl aspect-[4/3] overflow-hidden">
                    <img src="{{ asset('assets/foto-assets/MCJO3851_FA-1-1024x683.jpg') }}" alt="Doordachte gymindeling met zones" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    {{-- Process timeline --}}
    <section class="bg-secondary py-16 lg:py-32 overflow-hidden" id="ip-process">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="text-center mb-20">
                <span class="ip-fade inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-4">Hoe wij werken</span>
                <h2 class="ip-fade text-white text-4xl lg:text-5xl font-bold leading-[1.05]">Van eerste gesprek tot<br><span class="text-primary">definitief ontwerp</span></h2>
            </div>

            @php
            $stappen = [
                [
                    'nr' => '01',
                    'icon' => 'fa-comments',
                    'title' => 'Kennismaking & intake',
                    'desc' => 'We starten met een vrijblijvend gesprek. Wat is jouw visie? Wie is je doelgroep? Welke ruimte heb je beschikbaar? We brengen alles in kaart, van ambitie tot budget.',
                    'detail' => 'Op locatie of via videocall',
                    'video' => '/shorts/fitnessaannemer-short-1.mp4',
                ],
                [
                    'nr' => '02',
                    'icon' => 'fa-ruler-combined',
                    'title' => 'Plattegrond & zonering',
                    'desc' => 'Op basis van de inmeting maken wij een geoptimaliseerde plattegrond. Met doordachte zones: vrije gewichten, cardio, functioneel, stretching en looproutes die flow creëren.',
                    'detail' => '2D plattegrond met maatvoering',
                    'images' => [
                        ['src' => '/assets/foto-assets/BluePrint-2024-photos-50-819x1024.jpg', 'alt' => 'Plattegrond bovenaanzicht'],
                        ['src' => '/assets/foto-assets/BluePrint-2024-photos-3-1024x683.jpg', 'alt' => 'Zonering detail'],
                    ],
                ],
                [
                    'nr' => '03',
                    'icon' => 'fa-cube',
                    'title' => '3D visualisatie',
                    'desc' => 'Jouw gym komt tot leven in fotorealistische 3D renders. Zie precies hoe de apparatuur staat, hoe het licht valt en hoe de sfeer aanvoelt. Vóórdat je investeert.',
                    'detail' => 'Fotorealistisch & vanuit elke hoek',
                    'video' => '/shorts/fitnessaannemer-short-10.mp4',
                ],
                [
                    'nr' => '04',
                    'icon' => 'fa-list-check',
                    'title' => 'Apparatuurselectie',
                    'desc' => 'Wij stellen een apparatuurpakket samen dat perfect past bij jouw concept, ruimte en budget. Van premium merken als Life Fitness en Matrix tot functionele rigs en flooring.',
                    'detail' => 'Merk- en modeladvies op maat',
                    'image' => '/assets/foto-assets/FULL-Ballin-Fit-013-WF206762-1-1024x683.jpg',
                    'image_alt' => 'Fitnessapparatuur selectie',
                ],
                [
                    'nr' => '05',
                    'icon' => 'fa-file-signature',
                    'title' => 'Definitief plan & offerte',
                    'desc' => 'Alles komt samen in een helder projectplan: plattegrond, 3D visuals, apparatuurlijst, planning en een transparante offerte. Zodat je precies weet waar je aan toe bent.',
                    'detail' => 'Compleet en transparant',
                    'images' => [
                        ['src' => '/assets/foto-assets/BluePrint-2024-photos-39-1024x683.jpg', 'alt' => 'Projectplan document'],
                        ['src' => '/assets/foto-assets/hotel-1024x768.jpg', 'alt' => 'Opgeleverde fitnessruimte'],
                    ],
                ],
            ];
            @endphp

            <div class="relative">
                {{-- Vertical timeline line --}}
                <div class="absolute left-6 lg:left-1/2 top-0 bottom-0 w-px bg-white/[0.06] lg:-translate-x-px">
                    <div class="ip-timeline-fill w-full bg-primary/40 origin-top" style="height: 0%"></div>
                </div>

                <div class="space-y-16 lg:space-y-24">
                    @foreach($stappen as $index => $stap)
                    <div class="ip-step relative flex items-start gap-8 lg:gap-0 {{ $index % 2 === 0 ? '' : 'lg:flex-row-reverse' }}">
                        {{-- Content --}}
                        <div class="lg:w-1/2 {{ $index % 2 === 0 ? 'lg:pr-16 lg:text-right' : 'lg:pl-16' }} pl-16 lg:pl-0">
                            <span class="text-primary/30 text-6xl font-bold leading-none" style="font-family: 'Inter Tight'">{{ $stap['nr'] }}</span>
                            <h3 class="text-white text-xl lg:text-2xl font-bold mt-2 mb-3">{{ $stap['title'] }}</h3>
                            <p class="text-white/45 text-sm leading-relaxed mb-3">{{ $stap['desc'] }}</p>
                            <span class="inline-flex items-center gap-2 text-primary/60 text-xs font-medium">
                                <i class="fa-solid fa-circle-check text-[10px]"></i> {{ $stap['detail'] }}
                            </span>
                        </div>

                        {{-- Center dot --}}
                        <div class="absolute left-6 lg:left-1/2 -translate-x-1/2 w-12 h-12 rounded-xl bg-secondary border-2 border-white/[0.08] flex items-center justify-center z-10 ip-dot">
                            <i class="fa-solid {{ $stap['icon'] }} text-primary text-sm"></i>
                        </div>

                        {{-- Media --}}
                        <div class="hidden lg:block lg:w-1/2 {{ $index % 2 === 0 ? 'lg:pl-16' : 'lg:pr-16' }}">
                            @if(!empty($stap['video']))
                                <div class="rounded-2xl overflow-hidden aspect-[4/3] bg-white/[0.03] border border-white/[0.06]">
                                    <video src="{{ asset($stap['video']) }}" class="w-full h-full object-cover" autoplay muted loop playsinline></video>
                                </div>
                            @elseif(!empty($stap['images']))
                                <div class="grid grid-cols-2 gap-3">
                                    @foreach($stap['images'] as $img)
                                    <div class="rounded-2xl overflow-hidden aspect-[3/4] bg-white/[0.03] border border-white/[0.06]">
                                        <img src="{{ asset($img['src']) }}" alt="{{ $img['alt'] }}" class="w-full h-full object-cover" loading="lazy">
                                    </div>
                                    @endforeach
                                </div>
                            @else
                                <div class="rounded-2xl overflow-hidden aspect-[4/3] bg-white/[0.03] border border-white/[0.06]">
                                    <img src="{{ asset($stap['image']) }}" alt="{{ $stap['image_alt'] }}" class="w-full h-full object-cover" loading="lazy">
                                </div>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-16 lg:py-32 relative overflow-hidden" id="ip-apparatuur">
        <div class="horizontal-blob w-[600px] h-[600px]" style="background: radial-gradient(circle, rgba(82,171,226,0.18) 0%, rgba(82,171,226,0) 70%); top: -15%; right: -5%; animation: blob-float-3 15s ease-in-out infinite;"></div>
        <div class="horizontal-blob w-[500px] h-[500px]" style="background: radial-gradient(circle, rgba(82,171,226,0.15) 0%, rgba(82,171,226,0) 70%); bottom: -20%; left: -8%; animation: blob-float-1 20s ease-in-out infinite;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="ip-block-media rounded-3xl aspect-[4/3] overflow-hidden">
                    <img src="{{ asset('assets/foto-assets/FULL-Ballin-Fit-013-WF206762-1-1024x683.jpg') }}" alt="Fitnessapparatuur op maat geselecteerd" class="w-full h-full object-cover">
                </div>
                <div class="ip-block-text">
                    <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-6">Apparatuurselectie</span>
                    <h2 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.05] mb-8">De juiste apparatuur <br class="hidden md:block"><span class="text-primary">voor jouw concept</span></h2>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-4">Wij selecteren apparatuur die past bij jouw doelgroep, concept en budget. Van premium krachttoestellen en cardio-units tot functionele rigs, flooring en accessoires. Alles afgestemd op de beschikbare ruimte en gewenste beleving.</p>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-8">Dankzij onze directe lijnen met fabrikanten als Life Fitness, Matrix en Hammer Strength krijg je scherpe prijzen en snelle levertijden. Wij adviseren objectief, zonder vaste merkverplichting.</p>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                        <a href="{{ url('/gratis-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Gratis adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                        <a href="{{ url('/projecten') }}" class="bg-secondary/10 border border-secondary/20 rounded-full px-6 py-3.5 text-secondary text-xs font-semibold hover:bg-secondary/20 transition">Bekijk onze projecten</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
