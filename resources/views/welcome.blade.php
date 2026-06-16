<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Fitness Aannemer | Fitnessapparatuur & Complete Gymoplossingen</title>

        {{-- SEO Meta --}}
        <meta name="description" content="Fitness Aannemer ontwerpt, levert en installeert complete fitnessoplossingen op maat. Van boutique gym tot bedrijfsfitness. Topmerken als Life Fitness, Matrix en Concept2.">
        <meta name="keywords" content="fitnessapparatuur, gym inrichting, fitnessruimte ontwerp, krachtapparatuur, cardioapparatuur, fitness aannemer, gym op maat, bedrijfsfitness, PT studio inrichting, fitnessapparatuur leasen">
        <meta name="author" content="Fitness Aannemer">
        <meta name="robots" content="index, follow">
        <link rel="canonical" href="{{ url('/') }}">
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

        {{-- Open Graph / Facebook --}}
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url('/') }}">
        <meta property="og:title" content="Fitness Aannemer | Fitnessapparatuur & Complete Gymoplossingen">
        <meta property="og:description" content="Fitness Aannemer ontwerpt, levert en installeert complete fitnessoplossingen op maat. Van boutique gym tot bedrijfsfitness.">
        <meta property="og:locale" content="nl_NL">
        <meta property="og:site_name" content="Fitness Aannemer">
        {{-- <meta property="og:image" content="{{ asset('images/og-image.jpg') }}"> --}}

        {{-- Twitter --}}
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Fitness Aannemer | Fitnessapparatuur & Complete Gymoplossingen">
        <meta name="twitter:description" content="Fitness Aannemer ontwerpt, levert en installeert complete fitnessoplossingen op maat. Van boutique gym tot bedrijfsfitness.">
        {{-- <meta name="twitter:image" content="{{ asset('images/og-image.jpg') }}"> --}}

        {{-- Structured Data --}}
        <script type="application/ld+json">
        {
            "@@context": "https://schema.org",
            "@@type": "Organization",
            "name": "Fitness Aannemer",
            "url": "{{ url('/') }}",
            "description": "Fitness Aannemer ontwerpt, levert en installeert complete fitnessoplossingen op maat voor gyms, PT studio's, hotels en bedrijven in Nederland en België.",
            "areaServed": [
                { "@@type": "Country", "name": "Nederland" },
                { "@@type": "Country", "name": "België" }
            ],
            "serviceType": [
                "Fitnessapparatuur levering",
                "Gym ontwerp & inrichting",
                "Fitnessapparatuur installatie",
                "Fitnessapparatuur leasing"
            ]
        }
        </script>

        <link rel="preload" href="{{ asset('fontawesome/css/all.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}"></noscript>

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-white">
        @include('partials.header')

        <div class="w-full h-screen bg-secondary">
            <div class="max-w-7xl h-full mx-auto flex flex-col items-center justify-center relative px-4 sm:px-6">
                <h1 id="hero-heading" class="text-white text-3xl sm:text-5xl lg:text-6xl font-bold text-center leading-[1]"></h1>
                <p class="hero-fade text-sm text-white opacity-80 font-medium text-center my-6 sm:my-8 px-2">Van eerste schets tot sleuteloverdracht.<br>Wij ontwerpen, leveren en installeren complete fitnessruimtes op maat.</p>
                <div class="hero-fade flex flex-col sm:flex-row items-center gap-3 sm:gap-4">
                    <a href="{{ url('/gratis-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Gratis adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                    <a href="{{ url('/projecten') }}" class="bg-white/10 border border-white/20 rounded-full px-6 py-3.5 text-white text-xs font-semibold hover:bg-white/20 transition">Bekijk onze projecten</a>
                </div>
                <div class="hero-fade flex items-center gap-4 sm:gap-8 absolute z-1 bottom-8">
                    <div class="flex flex-col items-center justify-center">
                        <p class="text-primary text-md font-black">5+</p>
                        <p class="text-white/50 text-[11px] uppercase font-semibold">Projecten</p>
                    </div>
                    <div class="w-[2px] h-[35px] bg-white/20"></div>
                    <div class="flex flex-col items-center justify-center">
                        <p class="text-primary text-md font-black">2400+</p>
                        <p class="text-white/50 text-[11px] uppercase font-semibold">M² gerealiseerd</p>
                    </div>
                    <div class="w-[2px] h-[35px] bg-white/20"></div>
                    <div class="flex flex-col items-center justify-center">
                        <p class="text-primary text-md font-black">A-Z</p>
                        <p class="text-white/50 text-[11px] uppercase font-semibold">Ontzorgd</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-primary w-full py-4 overflow-hidden">
            <div class="marquee flex items-center gap-12 whitespace-nowrap">
                <span class="text-white text-xs font-semibold uppercase tracking-wider">Gratis adviesgesprek</span>
                <span class="text-white/50">&#9670;</span>
                <span class="text-white text-xs font-semibold uppercase tracking-wider">Ontwerp op maat</span>
                <span class="text-white/50">&#9670;</span>
                <span class="text-white text-xs font-semibold uppercase tracking-wider">Levering & installatie</span>
                <span class="text-white/50">&#9670;</span>
                <span class="text-white text-xs font-semibold uppercase tracking-wider">Topmerken</span>
                <span class="text-white/50">&#9670;</span>
                <span class="text-white text-xs font-semibold uppercase tracking-wider">Nederland & België</span>
                <span class="text-white/50">&#9670;</span>
                <span class="text-white text-xs font-semibold uppercase tracking-wider">Leasing mogelijk</span>
                <span class="text-white/50">&#9670;</span>
                <span class="text-white text-xs font-semibold uppercase tracking-wider">Gratis adviesgesprek</span>
                <span class="text-white/50">&#9670;</span>
                <span class="text-white text-xs font-semibold uppercase tracking-wider">Ontwerp op maat</span>
                <span class="text-white/50">&#9670;</span>
                <span class="text-white text-xs font-semibold uppercase tracking-wider">Levering & installatie</span>
                <span class="text-white/50">&#9670;</span>
                <span class="text-white text-xs font-semibold uppercase tracking-wider">Topmerken</span>
                <span class="text-white/50">&#9670;</span>
                <span class="text-white text-xs font-semibold uppercase tracking-wider">Nederland & België</span>
                <span class="text-white/50">&#9670;</span>
                <span class="text-white text-xs font-semibold uppercase tracking-wider">Leasing mogelijk</span>
                <span class="text-white/50">&#9670;</span>
            </div>
        </div>

        <div class="bg-secondary py-16 lg:py-32 overflow-hidden" id="social-section">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <div class="flex flex-col lg:flex-row lg:items-end gap-4 lg:gap-0 justify-between mb-8 lg:mb-12">
                    <h2 class="social-fade text-white text-3xl lg:text-5xl font-bold leading-[1]">Bekend van onder andere<br><span class="text-primary">Tiktok & Instagram</span></h2>
                    <p class="social-fade lg:max-w-[400px] lg:text-right text-xs text-white opacity-80">Volg ons op social media en bekijk hoe wij fitnessruimtes van concept tot realisatie transformeren. Van eerste ontwerp tot de laatste machine op zijn plek.</p>
                </div>
                <div class="video-track" id="video-track">
                    @for ($i = 1; $i <= 9; $i++)
                    <div class="video-card rounded-3xl relative shadow-2xl" data-index="{{ $i - 1 }}">
                        <video src="/shorts/fitnessaannemer-short-{{ $i }}.mp4" class="absolute z-1 object-cover w-full h-full" muted loop playsinline></video>
                        <div class="video-overlay bg-secondary absolute z-2"></div>
                    </div>
                    @endfor
                </div>
                <div class="social-fade flex flex-wrap items-center justify-center gap-3 sm:gap-4 mt-8 lg:mt-12">
                    <a href="{{ url('/gratis-adviesgesprek') }}" class="bg-primary rounded-full px-6 py-3 text-white text-xs font-semibold hover:bg-primary/80 transition-colors">Gratis adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-1"></i></a>
                    <a href="#" class="w-10 h-10 rounded-full bg-primary flex items-center justify-center text-white text-lg hover:bg-primary/80 transition-colors">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-primary flex items-center justify-center text-white text-lg hover:bg-primary/80 transition-colors">
                        <i class="fa-brands fa-tiktok"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-primary flex items-center justify-center text-white text-lg hover:bg-primary/80 transition-colors">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                    <a href="#" class="bg-white/10 border border-white/30 rounded-full px-6 py-3 text-white text-xs font-semibold hover:bg-white/20 transition-colors">Bekijk onze projecten</a>
                </div>
            </div>
        </div>

        <div class="horizontal-section relative">
            <div class="horizontal-blob w-[800px] h-[800px]" id="horizontal-blob-1"></div>
            <div class="horizontal-blob w-[600px] h-[600px]" id="horizontal-blob-2"></div>
            <div class="horizontal-blob w-[500px] h-[500px]" id="horizontal-blob-3"></div>
            <div class="horizontal-track">
                {{-- Panel 1: Intro --}}
                <div class="horizontal-panel relative">
                    <span class="absolute top-8 right-24 text-[280px] font-black text-secondary/[0.03] leading-none select-none pointer-events-none text-right hidden lg:block">FITNESS<br>AANNEMER</span>
                    <div class="max-w-7xl w-full mx-auto px-4 sm:px-6 flex flex-col lg:flex-row items-center h-full relative gap-8 lg:gap-12">
                        <div class="flex-1 flex flex-col justify-center pt-8 lg:pt-0">
                            <p class="text-primary text-xs font-semibold uppercase tracking-widest mb-4 lg:mb-6">Hoe wij werken</p>
                            <h2 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.05] mb-6 lg:mb-8">Van eerste gesprek<br>tot <span class="text-primary">sleuteloverdracht</span></h2>
                            <p class="text-secondary/50 text-sm leading-relaxed max-w-lg mb-10">Wij ontzorgen het volledige traject. Van advies en ontwerp tot levering, installatie en nazorg. Zo weet je zeker dat jouw fitnessruimte precies wordt zoals je voor ogen hebt.</p>
                            <div class="grid grid-cols-2 lg:flex lg:items-center gap-4 lg:gap-6">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center shrink-0">
                                        <i class="fa-solid fa-comments text-primary text-sm"></i>
                                    </div>
                                    <span class="text-secondary/70 text-xs font-medium">Gratis advies</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center shrink-0">
                                        <i class="fa-solid fa-pencil-ruler text-primary text-sm"></i>
                                    </div>
                                    <span class="text-secondary/70 text-xs font-medium">Ontwerp op maat</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center shrink-0">
                                        <i class="fa-solid fa-truck text-primary text-sm"></i>
                                    </div>
                                    <span class="text-secondary/70 text-xs font-medium">Levering & plaatsing</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center shrink-0">
                                        <i class="fa-solid fa-shield-check text-primary text-sm"></i>
                                    </div>
                                    <span class="text-secondary/70 text-xs font-medium">Nazorg</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex-shrink-0 w-[480px] hidden lg:block">
                            <svg class="panel-sketch w-full h-auto" viewBox="0 0 500 400" fill="none" xmlns="http://www.w3.org/2000/svg">
                                {{-- Room shell: walls, floor, ceiling --}}
                                <path class="draw-line" d="M250 140 L460 245 L250 350 L40 245Z" stroke-width="1.5"/>
                                <path class="draw-line" d="M40 245 L40 85 L250 0 L250 140" stroke-width="1.5"/>
                                <path class="draw-line" d="M460 245 L460 85 L250 0" stroke-width="1.5"/>
                                <path class="draw-line draw-line--subtle" d="M40 85 L250 0 L460 85" stroke-width="0.8"/>

                                {{-- Floor grid --}}
                                <path class="draw-line draw-line--subtle" d="M145 192 L355 192" stroke-width="0.4"/>
                                <path class="draw-line draw-line--subtle" d="M93 220 L407 220" stroke-width="0.4"/>
                                <path class="draw-line draw-line--subtle" d="M66 245 L434 245" stroke-width="0.4"/>
                                <path class="draw-line draw-line--subtle" d="M93 270 L407 270" stroke-width="0.4"/>
                                <path class="draw-line draw-line--subtle" d="M145 298 L355 298" stroke-width="0.4"/>
                                <path class="draw-line draw-line--subtle" d="M250 140 L250 350" stroke-width="0.4"/>
                                <path class="draw-line draw-line--subtle" d="M175 140 L40 245" stroke-width="0.4"/>
                                <path class="draw-line draw-line--subtle" d="M325 140 L460 245" stroke-width="0.4"/>

                                {{-- Ceiling beams --}}
                                <path class="draw-line draw-line--subtle" d="M145 42 L145 140" stroke-width="0.5"/>
                                <path class="draw-line draw-line--subtle" d="M355 42 L355 140" stroke-width="0.5"/>
                                <path class="draw-line draw-line--subtle" d="M145 42 L40 127" stroke-width="0.5"/>
                                <path class="draw-line draw-line--subtle" d="M355 42 L460 127" stroke-width="0.5"/>

                                {{-- Windows (back wall, 3x) --}}
                                <path class="draw-line" d="M290 18 L365 55 L365 105 L290 68Z" stroke-width="0.8"/>
                                <path class="draw-line draw-line--subtle" d="M328 37 L328 87" stroke-width="0.4"/>
                                <path class="draw-line" d="M375 55 L435 85 L435 135 L375 105Z" stroke-width="0.8"/>
                                <path class="draw-line draw-line--subtle" d="M405 70 L405 120" stroke-width="0.4"/>
                                <path class="draw-line" d="M210 10 L275 40 L275 85 L210 55Z" stroke-width="0.8"/>

                                {{-- Mirror wall (left) --}}
                                <path class="draw-line draw-line--subtle" d="M43 100 L170 50 L170 10 L43 60Z" stroke-width="0.7"/>
                                <path class="draw-line draw-line--subtle" d="M43 140 L130 100 L130 55 L43 95Z" stroke-width="0.5"/>

                                {{-- Entrance door (right wall) --}}
                                <path class="draw-line" d="M440 185 L440 130" stroke-width="1.5"/>
                                <path class="draw-line" d="M455 192 L455 137" stroke-width="1.5"/>
                                <path class="draw-line" d="M440 130 L455 137" stroke-width="1"/>
                                <path class="draw-line" d="M440 185 L455 192" stroke-width="1"/>
                                <path class="draw-line draw-line--subtle" d="M444 180 L451 183 L451 143 L444 140Z" stroke-width="0.5"/>
                                <circle class="draw-line" cx="448" cy="164" r="1.5" stroke-width="0.8"/>

                                {{-- Hanging lights --}}
                                <path class="draw-line draw-line--subtle" d="M190 18 L190 38" stroke-width="0.5"/>
                                <path class="draw-line draw-line--subtle" d="M183 38 L197 38" stroke-width="0.8"/>
                                <path class="draw-line draw-line--subtle" d="M340 40 L340 60" stroke-width="0.5"/>
                                <path class="draw-line draw-line--subtle" d="M333 60 L347 60" stroke-width="0.8"/>

                                {{-- Dimension annotations --}}
                                <path class="draw-line draw-line--subtle" d="M250 375 L470 262" stroke-width="0.5" stroke-dasharray="4 4"/>
                                <path class="draw-line draw-line--subtle" d="M250 375 L30 262" stroke-width="0.5" stroke-dasharray="4 4"/>
                            </svg>
                        </div>
                        <div class="absolute bottom-16 right-6 hidden lg:flex items-center gap-2 text-secondary/30">
                            <span class="text-xs font-medium uppercase tracking-wider">Scroll om te ontdekken</span>
                            <i class="fa-solid fa-arrow-right text-xs"></i>
                        </div>
                    </div>
                </div>

                {{-- Panel 2: Adviesgesprek (1 video) --}}
                <div class="horizontal-panel relative">
                    <span class="absolute -bottom-8 -left-6 text-[350px] font-black text-secondary/[0.03] leading-none select-none pointer-events-none hidden lg:block">01</span>
                    {{-- Blueprint / measurement SVG --}}
                    <svg class="panel-sketch panel-sketch--br hidden lg:block" viewBox="0 0 420 380" fill="none" xmlns="http://www.w3.org/2000/svg">
                        {{-- Floorplan outline --}}
                        <rect class="draw-line" x="60" y="40" width="300" height="220" rx="2" stroke-width="1.5"/>
                        {{-- Internal walls / partitions --}}
                        <path class="draw-line" d="M60 160 L200 160" stroke-width="1.2"/>
                        <path class="draw-line" d="M240 40 L240 160" stroke-width="1.2"/>
                        {{-- Door openings (gaps with arc) --}}
                        <path class="draw-line" d="M200 160 Q220 140 240 160" stroke-width="0.8"/>
                        <path class="draw-line" d="M240 220 Q260 200 240 180" stroke-width="0.8"/>

                        {{-- Zone labels (dashed rectangles) --}}
                        <rect class="draw-line draw-line--subtle" x="75" y="55" width="155" height="95" rx="4" stroke-width="0.6" stroke-dasharray="5 3"/>
                        <rect class="draw-line draw-line--subtle" x="255" y="55" width="90" height="95" rx="4" stroke-width="0.6" stroke-dasharray="5 3"/>
                        <rect class="draw-line draw-line--subtle" x="75" y="175" width="155" height="70" rx="4" stroke-width="0.6" stroke-dasharray="5 3"/>
                        <rect class="draw-line draw-line--subtle" x="255" y="175" width="90" height="70" rx="4" stroke-width="0.6" stroke-dasharray="5 3"/>

                        {{-- Dimension lines (horizontal top) --}}
                        <path class="draw-line" d="M60 28 L360 28" stroke-width="0.7"/>
                        <path class="draw-line" d="M60 24 L60 32" stroke-width="0.7"/>
                        <path class="draw-line" d="M360 24 L360 32" stroke-width="0.7"/>
                        <path class="draw-line" d="M240 24 L240 32" stroke-width="0.5"/>

                        {{-- Dimension lines (vertical right) --}}
                        <path class="draw-line" d="M372 40 L372 260" stroke-width="0.7"/>
                        <path class="draw-line" d="M368 40 L376 40" stroke-width="0.7"/>
                        <path class="draw-line" d="M368 260 L376 260" stroke-width="0.7"/>
                        <path class="draw-line" d="M368 160 L376 160" stroke-width="0.5"/>

                        {{-- Measurement arrows inside rooms --}}
                        <path class="draw-line draw-line--subtle" d="M90 110 L210 110" stroke-width="0.5" stroke-dasharray="2 2"/>
                        <path class="draw-line draw-line--subtle" d="M90 106 L90 114" stroke-width="0.5"/>
                        <path class="draw-line draw-line--subtle" d="M210 106 L210 114" stroke-width="0.5"/>
                        <path class="draw-line draw-line--subtle" d="M150 65 L150 140" stroke-width="0.5" stroke-dasharray="2 2"/>

                        {{-- Compass rose (bottom-right) --}}
                        <path class="draw-line" d="M385 310 L385 280" stroke-width="1"/>
                        <path class="draw-line" d="M385 310 L385 330" stroke-width="0.6"/>
                        <path class="draw-line" d="M375 310 L395 310" stroke-width="0.6"/>
                        <path class="draw-line" d="M380 285 L385 275 L390 285" stroke-width="0.8"/>

                        {{-- Clipboard shape --}}
                        <rect class="draw-line" x="20" y="290" width="70" height="85" rx="5" stroke-width="1.2"/>
                        <rect class="draw-line" x="40" y="284" width="30" height="12" rx="3" stroke-width="1"/>
                        {{-- Clipboard lines --}}
                        <path class="draw-line draw-line--subtle" d="M32 315 L78 315" stroke-width="0.6"/>
                        <path class="draw-line draw-line--subtle" d="M32 328 L78 328" stroke-width="0.6"/>
                        <path class="draw-line draw-line--subtle" d="M32 341 L78 341" stroke-width="0.6"/>
                        <path class="draw-line draw-line--subtle" d="M32 354 L60 354" stroke-width="0.6"/>

                        {{-- Pencil --}}
                        <path class="draw-line" d="M110 330 L140 300" stroke-width="1.5"/>
                        <path class="draw-line" d="M140 300 L145 295 L150 300 L140 310Z" stroke-width="1"/>
                        <path class="draw-line" d="M110 330 L106 338 L114 334Z" stroke-width="1"/>

                        {{-- Ruler --}}
                        <path class="draw-line" d="M180 290 L320 290 L320 305 L180 305Z" stroke-width="0.8"/>
                        <path class="draw-line draw-line--subtle" d="M200 290 L200 298" stroke-width="0.4"/>
                        <path class="draw-line draw-line--subtle" d="M220 290 L220 298" stroke-width="0.4"/>
                        <path class="draw-line draw-line--subtle" d="M240 290 L240 298" stroke-width="0.4"/>
                        <path class="draw-line draw-line--subtle" d="M260 290 L260 298" stroke-width="0.4"/>
                        <path class="draw-line draw-line--subtle" d="M280 290 L280 298" stroke-width="0.4"/>
                        <path class="draw-line draw-line--subtle" d="M300 290 L300 298" stroke-width="0.4"/>

                        {{-- Grid dots pattern (floor survey) --}}
                        <circle class="draw-line draw-line--subtle" cx="100" cy="80" r="1.5" stroke-width="0.6"/>
                        <circle class="draw-line draw-line--subtle" cx="140" cy="80" r="1.5" stroke-width="0.6"/>
                        <circle class="draw-line draw-line--subtle" cx="180" cy="80" r="1.5" stroke-width="0.6"/>
                        <circle class="draw-line draw-line--subtle" cx="100" cy="120" r="1.5" stroke-width="0.6"/>
                        <circle class="draw-line draw-line--subtle" cx="140" cy="120" r="1.5" stroke-width="0.6"/>
                        <circle class="draw-line draw-line--subtle" cx="180" cy="120" r="1.5" stroke-width="0.6"/>
                        <circle class="draw-line draw-line--subtle" cx="280" cy="80" r="1.5" stroke-width="0.6"/>
                        <circle class="draw-line draw-line--subtle" cx="320" cy="80" r="1.5" stroke-width="0.6"/>
                        <circle class="draw-line draw-line--subtle" cx="280" cy="120" r="1.5" stroke-width="0.6"/>
                        <circle class="draw-line draw-line--subtle" cx="320" cy="120" r="1.5" stroke-width="0.6"/>
                    </svg>
                    <div class="max-w-7xl w-full mx-auto px-4 sm:px-6 flex flex-col lg:flex-row items-center h-full relative gap-8 lg:gap-16">
                        <div class="flex-1 pt-8 lg:pt-12">
                            <div class="flex items-center gap-3 mb-4 lg:mb-6">
                                <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center">
                                    <span class="text-white text-xs font-bold">01</span>
                                </div>
                                <div class="h-[1px] w-16 bg-primary/30"></div>
                                <span class="text-primary text-xs font-semibold uppercase tracking-widest">Kennismaking</span>
                            </div>
                            <h3 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.1] mb-4 lg:mb-6">Adviesgesprek<br>& inventarisatie</h3>
                            <p class="text-secondary/50 text-sm leading-relaxed max-w-md mb-6">Alles begint met een goed gesprek. We komen bij je langs of plannen een videocall in om jouw situatie te bekijken. Wat is de ruimte? Wie is je doelgroep? Wat is het budget?</p>
                            <p class="text-secondary/50 text-sm leading-relaxed max-w-md mb-8">Samen brengen we je wensen in kaart en kijken we naar de mogelijkheden. Geen verplichtingen, gewoon een eerlijk gesprek over wat er mogelijk is.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-secondary/5 text-secondary/60 text-[11px] font-medium px-3 py-1.5 rounded-full">Gratis & vrijblijvend</span>
                                <span class="bg-secondary/5 text-secondary/60 text-[11px] font-medium px-3 py-1.5 rounded-full">Op locatie of online</span>
                                <span class="bg-secondary/5 text-secondary/60 text-[11px] font-medium px-3 py-1.5 rounded-full">Behoefteanalyse</span>
                                <span class="bg-secondary/5 text-secondary/60 text-[11px] font-medium px-3 py-1.5 rounded-full">Budgetindicatie</span>
                            </div>
                            <div class="flex items-center gap-3 mt-8">
                                <a href="#" class="bg-primary rounded-full px-6 py-3 text-white text-xs font-semibold hover:bg-primary/80 transition-colors">Plan een gesprek <i class="fa-solid fa-arrow-right text-xs ml-1.5"></i></a>
                                <a href="#" class="border border-secondary/15 rounded-full px-6 py-3 text-secondary/60 text-xs font-semibold hover:border-primary/30 hover:text-primary transition-colors">Bel ons direct</a>
                            </div>
                        </div>
                        {{-- Mobile image --}}
                        <div class="lg:hidden rounded-2xl overflow-hidden aspect-[16/9]">
                            <img src="{{ asset('assets/foto-assets/MCJO3837-1-1024x683.jpg') }}" alt="Adviesgesprek" class="w-full h-full object-cover">
                        </div>
                        {{-- Desktop videos --}}
                        <div class="flex-shrink-0 relative hidden lg:block">
                            <video src="/shorts/fitnessaannemer-short-1.mp4" class="w-[270px] aspect-[9/16] object-cover rounded-3xl shadow-2xl" muted loop playsinline autoplay></video>
                            <div class="absolute -bottom-6 -left-6 bg-white rounded-2xl shadow-xl p-5">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
                                        <i class="fa-solid fa-calendar-check text-primary text-sm"></i>
                                    </div>
                                    <div>
                                        <p class="text-secondary text-xs font-semibold">Binnen 48 uur</p>
                                        <p class="text-secondary/40 text-[11px]">Reactie op je aanvraag</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Panel 3: Ontwerp (2 videos) --}}
                <div class="horizontal-panel relative">
                    <span class="absolute -top-8 left-12 text-[350px] font-black text-secondary/[0.03] leading-none select-none pointer-events-none hidden lg:block">02</span>
                    {{-- Equipment layout / design SVG --}}
                    <svg class="panel-sketch panel-sketch--tl hidden lg:block" viewBox="0 0 440 380" fill="none" xmlns="http://www.w3.org/2000/svg">
                        {{-- Isometric room outline (simplified) --}}
                        <path class="draw-line" d="M220 100 L400 190 L220 280 L40 190Z" stroke-width="1"/>
                        <path class="draw-line draw-line--subtle" d="M40 190 L40 90 L220 0 L220 100" stroke-width="0.7"/>
                        <path class="draw-line draw-line--subtle" d="M400 190 L400 90 L220 0" stroke-width="0.7"/>

                        {{-- Floor zone lines (dashed) --}}
                        <path class="draw-line draw-line--subtle" d="M130 145 L310 145" stroke-width="0.5" stroke-dasharray="4 3"/>
                        <path class="draw-line draw-line--subtle" d="M85 190 L355 190" stroke-width="0.5" stroke-dasharray="4 3"/>
                        <path class="draw-line draw-line--subtle" d="M130 235 L310 235" stroke-width="0.5" stroke-dasharray="4 3"/>
                        <path class="draw-line draw-line--subtle" d="M220 100 L220 280" stroke-width="0.5" stroke-dasharray="4 3"/>

                        {{-- Treadmill 1 (top-right zone) --}}
                        <path class="draw-line" d="M290 128 L330 148 L340 143 L300 123Z" stroke-width="1"/>
                        <path class="draw-line" d="M330 148 L330 132" stroke-width="1"/>
                        <path class="draw-line" d="M340 143 L340 127" stroke-width="1"/>
                        <path class="draw-line" d="M329 134 L339 129" stroke-width="0.8"/>

                        {{-- Treadmill 2 --}}
                        <path class="draw-line" d="M310 138 L350 158 L360 153 L320 133Z" stroke-width="1"/>
                        <path class="draw-line" d="M350 158 L350 142" stroke-width="1"/>
                        <path class="draw-line" d="M360 153 L360 137" stroke-width="1"/>

                        {{-- Exercise bike --}}
                        <path class="draw-line" d="M300 168 L320 178 L328 174 L308 164Z" stroke-width="0.8"/>
                        <path class="draw-line" d="M320 178 L318 164" stroke-width="1"/>
                        <circle class="draw-line" cx="310" cy="170" r="3" stroke-width="0.7"/>

                        {{-- Squat rack (center) --}}
                        <path class="draw-line" d="M190 170 L190 130" stroke-width="1.8"/>
                        <path class="draw-line" d="M220 183 L220 143" stroke-width="1.8"/>
                        <path class="draw-line" d="M190 130 L220 143" stroke-width="1.5"/>
                        <path class="draw-line" d="M175 155 L235 170" stroke-width="2"/>
                        <path class="draw-line" d="M177 148 L177 163" stroke-width="3.5"/>
                        <path class="draw-line" d="M233 163 L233 178" stroke-width="3.5"/>

                        {{-- Bench press (left zone) --}}
                        <path class="draw-line" d="M100 195 L140 215 L155 208 L115 188Z" stroke-width="0.8"/>
                        <path class="draw-line" d="M140 215 L140 198" stroke-width="1.2"/>
                        <path class="draw-line" d="M155 208 L155 191" stroke-width="1.2"/>
                        <path class="draw-line" d="M128 200 L167 217" stroke-width="1.8"/>

                        {{-- Cable machine (right) --}}
                        <path class="draw-line" d="M340 195 L340 155" stroke-width="1.5"/>
                        <path class="draw-line" d="M360 205 L360 165" stroke-width="1.5"/>
                        <path class="draw-line" d="M340 155 L360 165" stroke-width="1.2"/>
                        <path class="draw-line draw-line--subtle" d="M345 190 L355 185 L355 170 L345 175Z" stroke-width="0.5"/>

                        {{-- Dumbbell rack (bottom-left wall) --}}
                        <path class="draw-line" d="M60 200 L120 170 L120 140 L60 170Z" stroke-width="1"/>
                        <path class="draw-line" d="M60 190 L120 160" stroke-width="0.5"/>
                        <path class="draw-line" d="M60 180 L120 150" stroke-width="0.5"/>

                        {{-- Functional area markers (bottom) --}}
                        <circle class="draw-line" cx="130" cy="250" r="4" stroke-width="0.8"/>
                        <circle class="draw-line" cx="145" cy="257" r="3.5" stroke-width="0.8"/>
                        <circle class="draw-line" cx="158" cy="263" r="3" stroke-width="0.8"/>

                        {{-- Design arrows / placement indicators --}}
                        <path class="draw-line" d="M250 115 L275 127" stroke-width="0.8" stroke-dasharray="3 2"/>
                        <path class="draw-line" d="M272 122 L275 127 L270 128" stroke-width="0.8"/>

                        <path class="draw-line" d="M160 220 L135 232" stroke-width="0.8" stroke-dasharray="3 2"/>
                        <path class="draw-line" d="M140 228 L135 232 L138 227" stroke-width="0.8"/>

                        <path class="draw-line" d="M350 215 L370 225" stroke-width="0.8" stroke-dasharray="3 2"/>
                        <path class="draw-line" d="M365 221 L370 225 L365 226" stroke-width="0.8"/>

                        {{-- 3D cube icon (design tool) --}}
                        <path class="draw-line" d="M35 310 L65 295 L95 310 L65 325Z" stroke-width="1"/>
                        <path class="draw-line" d="M35 310 L35 330 L65 345 L65 325" stroke-width="1"/>
                        <path class="draw-line" d="M95 310 L95 330 L65 345" stroke-width="1"/>
                        <path class="draw-line draw-line--subtle" d="M65 295 L65 325" stroke-width="0.5"/>

                        {{-- Grid/ruler marks --}}
                        <path class="draw-line draw-line--subtle" d="M120 300 L380 300" stroke-width="0.4"/>
                        <path class="draw-line draw-line--subtle" d="M150 296 L150 304" stroke-width="0.4"/>
                        <path class="draw-line draw-line--subtle" d="M200 296 L200 304" stroke-width="0.4"/>
                        <path class="draw-line draw-line--subtle" d="M250 296 L250 304" stroke-width="0.4"/>
                        <path class="draw-line draw-line--subtle" d="M300 296 L300 304" stroke-width="0.4"/>
                        <path class="draw-line draw-line--subtle" d="M350 296 L350 304" stroke-width="0.4"/>
                    </svg>
                    <div class="max-w-7xl w-full mx-auto px-4 sm:px-6 flex flex-col-reverse lg:flex-row items-center h-full relative gap-8 lg:gap-16">
                        {{-- Mobile image --}}
                        <div class="lg:hidden rounded-2xl overflow-hidden aspect-[16/9]">
                            <img src="{{ asset('assets/foto-assets/BluePrint-2024-photos-50-819x1024.jpg') }}" alt="3D Ontwerp" class="w-full h-full object-cover">
                        </div>
                        {{-- Desktop videos --}}
                        <div class="flex-shrink-0 hidden lg:flex items-end gap-5 relative">
                            <video src="/shorts/fitnessaannemer-short-2.mp4" class="w-[210px] aspect-[9/16] object-cover rounded-3xl shadow-2xl" muted loop playsinline autoplay></video>
                            <video src="/shorts/fitnessaannemer-short-3.mp4" class="w-[210px] aspect-[9/16] object-cover rounded-3xl shadow-2xl -mb-12" muted loop playsinline autoplay></video>
                            <div class="absolute -top-4 -right-4 bg-white rounded-2xl shadow-xl p-4 z-10">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
                                        <i class="fa-solid fa-cube text-primary text-sm"></i>
                                    </div>
                                    <div>
                                        <p class="text-secondary text-xs font-semibold">3D Visualisatie</p>
                                        <p class="text-secondary/40 text-[11px]">Zie je gym voor realisatie</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-1 pt-8 lg:pt-12">
                            <div class="flex items-center gap-3 mb-4 lg:mb-6">
                                <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center">
                                    <span class="text-white text-xs font-bold">02</span>
                                </div>
                                <div class="h-[1px] w-16 bg-primary/30"></div>
                                <span class="text-primary text-xs font-semibold uppercase tracking-widest">Ontwerp</span>
                            </div>
                            <h3 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.1] mb-4 lg:mb-6">Ontwerp<br>& visualisatie</h3>
                            <p class="text-secondary/50 text-sm leading-relaxed max-w-md mb-6">Op basis van het adviesgesprek gaan onze ontwerpers aan de slag. We maken een gedetailleerde plattegrond en een 3D-visualisatie zodat je precies ziet hoe jouw ruimte eruit komt te zien.</p>
                            <p class="text-secondary/50 text-sm leading-relaxed max-w-md mb-8">Elke machine, elk rek, elke loopband wordt ingetekend op de juiste plek. We houden rekening met looplijnen, veiligheidsafstanden en de optimale gebruikerservaring.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-secondary/5 text-secondary/60 text-[11px] font-medium px-3 py-1.5 rounded-full">3D rendering</span>
                                <span class="bg-secondary/5 text-secondary/60 text-[11px] font-medium px-3 py-1.5 rounded-full">Plattegrond op maat</span>
                                <span class="bg-secondary/5 text-secondary/60 text-[11px] font-medium px-3 py-1.5 rounded-full">Apparatuurkeuze</span>
                                <span class="bg-secondary/5 text-secondary/60 text-[11px] font-medium px-3 py-1.5 rounded-full">Revisierondes</span>
                            </div>
                            <div class="flex items-center gap-3 mt-8">
                                <a href="#" class="bg-primary rounded-full px-6 py-3 text-white text-xs font-semibold hover:bg-primary/80 transition-colors">Bekijk voorbeeldontwerpen <i class="fa-solid fa-arrow-right text-xs ml-1.5"></i></a>
                                <a href="#" class="border border-secondary/15 rounded-full px-6 py-3 text-secondary/60 text-xs font-semibold hover:border-primary/30 hover:text-primary transition-colors">Start jouw ontwerp</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Panel 4: Levering & installatie (2 videos) --}}
                <div class="horizontal-panel relative">
                    <span class="absolute -bottom-8 -left-6 text-[350px] font-black text-secondary/[0.03] leading-none select-none pointer-events-none hidden lg:block">03</span>
                    {{-- Installation / delivery SVG --}}
                    <svg class="panel-sketch panel-sketch--bl hidden lg:block" viewBox="0 0 440 380" fill="none" xmlns="http://www.w3.org/2000/svg">
                        {{-- Delivery truck (side view, simplified) --}}
                        <path class="draw-line" d="M30 190 L200 190 L200 110 L30 110Z" stroke-width="1.5"/>
                        {{-- Truck cabin --}}
                        <path class="draw-line" d="M200 190 L270 190 L270 130 L230 110 L200 110Z" stroke-width="1.5"/>
                        {{-- Windshield --}}
                        <path class="draw-line draw-line--subtle" d="M235 115 L260 130 L260 165 L235 165Z" stroke-width="0.7"/>
                        {{-- Wheels --}}
                        <circle class="draw-line" cx="80" cy="198" r="14" stroke-width="1.5"/>
                        <circle class="draw-line" cx="80" cy="198" r="6" stroke-width="0.8"/>
                        <circle class="draw-line" cx="240" cy="198" r="14" stroke-width="1.5"/>
                        <circle class="draw-line" cx="240" cy="198" r="6" stroke-width="0.8"/>
                        {{-- Truck bed details --}}
                        <path class="draw-line draw-line--subtle" d="M40 140 L190 140" stroke-width="0.5"/>
                        <path class="draw-line draw-line--subtle" d="M40 165 L190 165" stroke-width="0.5"/>

                        {{-- Crates/boxes on ground --}}
                        <path class="draw-line" d="M310 175 L360 175 L360 135 L310 135Z" stroke-width="1.2"/>
                        <path class="draw-line" d="M310 135 L330 120 L380 120 L360 135" stroke-width="1.2"/>
                        <path class="draw-line" d="M380 120 L380 160 L360 175" stroke-width="1.2"/>
                        {{-- Box label X --}}
                        <path class="draw-line draw-line--subtle" d="M320 145 L350 165" stroke-width="0.5"/>
                        <path class="draw-line draw-line--subtle" d="M350 145 L320 165" stroke-width="0.5"/>

                        {{-- Smaller box --}}
                        <path class="draw-line" d="M390 175 L420 175 L420 150 L390 150Z" stroke-width="1"/>
                        <path class="draw-line" d="M390 150 L400 140 L430 140 L420 150" stroke-width="1"/>
                        <path class="draw-line" d="M430 140 L430 165 L420 175" stroke-width="1"/>

                        {{-- Hand truck / dolly --}}
                        <path class="draw-line" d="M290 220 L290 160" stroke-width="1.5"/>
                        <path class="draw-line" d="M290 220 L310 220" stroke-width="1.5"/>
                        <circle class="draw-line" cx="315" cy="224" r="6" stroke-width="1"/>
                        <path class="draw-line" d="M285 170 L295 170" stroke-width="1"/>

                        {{-- Assembled squat rack (being set up) --}}
                        <path class="draw-line" d="M80 310 L80 250" stroke-width="2"/>
                        <path class="draw-line" d="M120 310 L120 250" stroke-width="2"/>
                        <path class="draw-line" d="M80 250 L120 250" stroke-width="1.5"/>
                        <path class="draw-line" d="M80 275 L120 275" stroke-width="1"/>
                        {{-- Barbell --}}
                        <path class="draw-line" d="M55 275 L145 275" stroke-width="2.5"/>
                        <path class="draw-line" d="M58 268 L58 282" stroke-width="4"/>
                        <path class="draw-line" d="M142 268 L142 282" stroke-width="4"/>

                        {{-- Wrench (assembly tool) --}}
                        <path class="draw-line" d="M180 280 L220 240" stroke-width="1.5"/>
                        <path class="draw-line" d="M220 240 L215 228 L225 223 L235 233 L230 243Z" stroke-width="1.2"/>

                        {{-- Screwdriver --}}
                        <path class="draw-line" d="M250 300 L280 270" stroke-width="1.5"/>
                        <path class="draw-line" d="M280 270 L285 260 L290 265 L285 275Z" stroke-width="1"/>
                        <path class="draw-line" d="M250 300 L245 308 L252 305Z" stroke-width="1"/>

                        {{-- Bolts / fasteners --}}
                        <circle class="draw-line" cx="170" cy="320" r="3" stroke-width="0.8"/>
                        <path class="draw-line draw-line--subtle" d="M167 320 L173 320" stroke-width="0.5"/>
                        <path class="draw-line draw-line--subtle" d="M170 317 L170 323" stroke-width="0.5"/>
                        <circle class="draw-line" cx="185" cy="330" r="3" stroke-width="0.8"/>
                        <circle class="draw-line" cx="200" cy="325" r="2.5" stroke-width="0.8"/>

                        {{-- Assembly arrows --}}
                        <path class="draw-line" d="M100 235 L100 255" stroke-width="0.8" stroke-dasharray="3 2"/>
                        <path class="draw-line" d="M95 250 L100 258 L105 250" stroke-width="0.8"/>

                        {{-- Level tool --}}
                        <path class="draw-line" d="M310 290 L400 290" stroke-width="1.2"/>
                        <path class="draw-line" d="M310 290 L310 300 L400 300 L400 290" stroke-width="1"/>
                        <circle class="draw-line draw-line--subtle" cx="355" cy="295" r="6" stroke-width="0.6"/>
                        <path class="draw-line draw-line--subtle" d="M352 295 L358 295" stroke-width="0.5"/>

                        {{-- Floor tiles being laid --}}
                        <path class="draw-line draw-line--subtle" d="M310 340 L350 340 L350 370 L310 370Z" stroke-width="0.6"/>
                        <path class="draw-line draw-line--subtle" d="M355 340 L395 340 L395 370 L355 370Z" stroke-width="0.6"/>
                        <path class="draw-line draw-line--subtle" d="M310 340 L355 340" stroke-width="0.6" stroke-dasharray="2 2"/>
                    </svg>
                    <div class="max-w-7xl w-full mx-auto px-4 sm:px-6 flex flex-col lg:flex-row items-center h-full relative gap-8 lg:gap-16">
                        <div class="flex-1 pt-8 lg:pt-12">
                            <div class="flex items-center gap-3 mb-4 lg:mb-6">
                                <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center">
                                    <span class="text-white text-xs font-bold">03</span>
                                </div>
                                <div class="h-[1px] w-16 bg-primary/30"></div>
                                <span class="text-primary text-xs font-semibold uppercase tracking-widest">Realisatie</span>
                            </div>
                            <h3 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.1] mb-4 lg:mb-6">Levering<br>& installatie</h3>
                            <p class="text-secondary/50 text-sm leading-relaxed max-w-md mb-6">Zodra het ontwerp is goedgekeurd, regelen wij de volledige levering en installatie. Onze monteurs plaatsen alle apparatuur volgens het ontwerp en zorgen dat alles werkt.</p>
                            <p class="text-secondary/50 text-sm leading-relaxed max-w-md mb-8">Van het uitladen van de vrachtwagen tot het afstellen van de laatste machine. Wij zorgen ervoor dat je fitnessruimte klaar is voor gebruik op de afgesproken datum.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-secondary/5 text-secondary/60 text-[11px] font-medium px-3 py-1.5 rounded-full">Professionele montage</span>
                                <span class="bg-secondary/5 text-secondary/60 text-[11px] font-medium px-3 py-1.5 rounded-full">Vaste opleverdatum</span>
                                <span class="bg-secondary/5 text-secondary/60 text-[11px] font-medium px-3 py-1.5 rounded-full">Volledig turnkey</span>
                                <span class="bg-secondary/5 text-secondary/60 text-[11px] font-medium px-3 py-1.5 rounded-full">Direct klaar voor gebruik</span>
                            </div>
                            <div class="flex items-center gap-3 mt-8">
                                <a href="#" class="bg-primary rounded-full px-6 py-3 text-white text-xs font-semibold hover:bg-primary/80 transition-colors">Offerte aanvragen <i class="fa-solid fa-arrow-right text-xs ml-1.5"></i></a>
                                <a href="#" class="border border-secondary/15 rounded-full px-6 py-3 text-secondary/60 text-xs font-semibold hover:border-primary/30 hover:text-primary transition-colors">Bekijk projecten</a>
                            </div>
                        </div>
                        {{-- Mobile image --}}
                        <div class="lg:hidden rounded-2xl overflow-hidden aspect-[16/9]">
                            <img src="{{ asset('assets/foto-assets/BluePrint-2024-photos-47-1024x683.jpg') }}" alt="Levering en installatie" class="w-full h-full object-cover">
                        </div>
                        {{-- Desktop videos --}}
                        <div class="flex-shrink-0 hidden lg:flex items-start gap-5 relative">
                            <video src="/shorts/fitnessaannemer-short-4.mp4" class="w-[210px] aspect-[9/16] object-cover rounded-3xl shadow-2xl -mt-12" muted loop playsinline autoplay></video>
                            <video src="/shorts/fitnessaannemer-short-5.mp4" class="w-[210px] aspect-[9/16] object-cover rounded-3xl shadow-2xl" muted loop playsinline autoplay></video>
                            <div class="absolute bottom-8 -left-8 bg-white rounded-2xl shadow-xl p-5 z-10">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
                                        <i class="fa-solid fa-truck-fast text-primary text-sm"></i>
                                    </div>
                                    <div>
                                        <p class="text-secondary text-xs font-semibold">Eigen montageteam</p>
                                        <p class="text-secondary/40 text-[11px]">NL & BE breed</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Panel 5: Nazorg (1 video) --}}
                <div class="horizontal-panel relative">
                    <span class="absolute -top-8 left-12 text-[350px] font-black text-secondary/[0.03] leading-none select-none pointer-events-none hidden lg:block">04</span>
                    {{-- Service / maintenance SVG --}}
                    <svg class="panel-sketch panel-sketch--tl hidden lg:block" viewBox="0 0 420 380" fill="none" xmlns="http://www.w3.org/2000/svg">
                        {{-- Shield with checkmark (center piece) --}}
                        <path class="draw-line" d="M210 30 L270 55 L270 130 Q270 180 210 210 Q150 180 150 130 L150 55Z" stroke-width="1.5"/>
                        {{-- Checkmark inside shield --}}
                        <path class="draw-line" d="M185 115 L205 140 L245 85" stroke-width="2.5"/>

                        {{-- Crossed wrench & screwdriver --}}
                        {{-- Wrench --}}
                        <path class="draw-line" d="M60 140 L130 210" stroke-width="2"/>
                        <path class="draw-line" d="M55 133 L48 125 L42 133 L55 148Z" stroke-width="1.2"/>
                        <path class="draw-line" d="M130 210 L140 215 L135 225 L125 218Z" stroke-width="1.2"/>
                        {{-- Screwdriver --}}
                        <path class="draw-line" d="M130 140 L60 210" stroke-width="2"/>
                        <path class="draw-line" d="M130 140 L138 128 L145 135 L137 147Z" stroke-width="1.2"/>
                        <path class="draw-line" d="M60 210 L54 220 L64 216Z" stroke-width="1"/>

                        {{-- Calendar --}}
                        <rect class="draw-line" x="290" y="60" width="100" height="90" rx="6" stroke-width="1.2"/>
                        <path class="draw-line" d="M290 85 L390 85" stroke-width="1"/>
                        {{-- Calendar hooks --}}
                        <path class="draw-line" d="M315 52 L315 68" stroke-width="1.5"/>
                        <path class="draw-line" d="M365 52 L365 68" stroke-width="1.5"/>
                        {{-- Calendar grid --}}
                        <path class="draw-line draw-line--subtle" d="M305 100 L315 100 L315 110 L305 110Z" stroke-width="0.5"/>
                        <path class="draw-line draw-line--subtle" d="M322 100 L332 100 L332 110 L322 110Z" stroke-width="0.5"/>
                        <path class="draw-line draw-line--subtle" d="M339 100 L349 100 L349 110 L339 110Z" stroke-width="0.5"/>
                        <path class="draw-line draw-line--subtle" d="M356 100 L366 100 L366 110 L356 110Z" stroke-width="0.5"/>
                        <path class="draw-line draw-line--subtle" d="M373 100 L383 100 L383 110 L373 110Z" stroke-width="0.5"/>
                        <path class="draw-line draw-line--subtle" d="M305 115 L315 115 L315 125 L305 125Z" stroke-width="0.5"/>
                        <path class="draw-line draw-line--subtle" d="M322 115 L332 115 L332 125 L322 125Z" stroke-width="0.5"/>
                        <path class="draw-line draw-line--subtle" d="M339 115 L349 115 L349 125 L339 125Z" stroke-width="0.5"/>
                        {{-- Circled date (service appointment) --}}
                        <circle class="draw-line" cx="361" cy="120" r="8" stroke-width="1"/>

                        {{-- Headset / support --}}
                        <path class="draw-line" d="M80 280 Q80 240 110 240 Q140 240 140 280" stroke-width="1.5"/>
                        <path class="draw-line" d="M75 275 L85 275 L85 300 L75 300Z" stroke-width="1.2"/>
                        <path class="draw-line" d="M135 275 L145 275 L145 300 L135 300Z" stroke-width="1.2"/>
                        {{-- Microphone arm --}}
                        <path class="draw-line" d="M135 295 Q155 310 155 325" stroke-width="1"/>
                        <circle class="draw-line" cx="155" cy="330" r="5" stroke-width="0.8"/>

                        {{-- Clipboard with checklist --}}
                        <rect class="draw-line" x="220" y="220" width="80" height="110" rx="5" stroke-width="1.2"/>
                        <rect class="draw-line" x="242" y="214" width="36" height="12" rx="3" stroke-width="1"/>
                        {{-- Checklist items with checkmarks --}}
                        <rect class="draw-line draw-line--subtle" x="232" y="245" width="10" height="10" rx="1" stroke-width="0.6"/>
                        <path class="draw-line" d="M234 251 L237 255 L243 247" stroke-width="0.8"/>
                        <path class="draw-line draw-line--subtle" d="M248 250 L288 250" stroke-width="0.5"/>

                        <rect class="draw-line draw-line--subtle" x="232" y="263" width="10" height="10" rx="1" stroke-width="0.6"/>
                        <path class="draw-line" d="M234 269 L237 273 L243 265" stroke-width="0.8"/>
                        <path class="draw-line draw-line--subtle" d="M248 268 L288 268" stroke-width="0.5"/>

                        <rect class="draw-line draw-line--subtle" x="232" y="281" width="10" height="10" rx="1" stroke-width="0.6"/>
                        <path class="draw-line" d="M234 287 L237 291 L243 283" stroke-width="0.8"/>
                        <path class="draw-line draw-line--subtle" d="M248 286 L275 286" stroke-width="0.5"/>

                        <rect class="draw-line draw-line--subtle" x="232" y="299" width="10" height="10" rx="1" stroke-width="0.6"/>
                        <path class="draw-line" d="M234 305 L237 309 L243 301" stroke-width="0.8"/>
                        <path class="draw-line draw-line--subtle" d="M248 304 L282 304" stroke-width="0.5"/>

                        {{-- Heart / care icon --}}
                        <path class="draw-line" d="M355 230 Q355 210 370 210 Q385 210 385 230 Q385 210 400 210 Q415 210 415 230 Q415 260 385 280 Q355 260 355 230Z" stroke-width="1.2"/>

                        {{-- Circular arrows (ongoing service) --}}
                        <path class="draw-line" d="M370 330 Q340 310 350 290" stroke-width="1"/>
                        <path class="draw-line" d="M345 295 L350 290 L355 296" stroke-width="0.8"/>
                        <path class="draw-line" d="M400 300 Q430 320 420 340" stroke-width="1"/>
                        <path class="draw-line" d="M425 335 L420 340 L415 334" stroke-width="0.8"/>
                    </svg>
                    <div class="max-w-7xl w-full mx-auto px-4 sm:px-6 flex flex-col-reverse lg:flex-row items-center h-full relative gap-8 lg:gap-16">
                        {{-- Mobile image --}}
                        <div class="lg:hidden rounded-2xl overflow-hidden aspect-[16/9]">
                            <img src="{{ asset('assets/foto-assets/SOCIAL-Farmfit-015-WF104887-1-1-1024x683.jpg') }}" alt="Onderhoud en service" class="w-full h-full object-cover">
                        </div>
                        {{-- Desktop videos --}}
                        <div class="flex-shrink-0 relative hidden lg:block">
                            <video src="/shorts/fitnessaannemer-short-7.mp4" class="w-[270px] aspect-[9/16] object-cover rounded-3xl shadow-2xl" muted loop playsinline autoplay></video>
                            <div class="absolute -top-4 -right-4 bg-white rounded-2xl shadow-xl p-4 z-10">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
                                        <i class="fa-solid fa-headset text-primary text-sm"></i>
                                    </div>
                                    <div>
                                        <p class="text-secondary text-xs font-semibold">Altijd bereikbaar</p>
                                        <p class="text-secondary/40 text-[11px]">Voor vragen en support</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-1 pt-8 lg:pt-12">
                            <div class="flex items-center gap-3 mb-4 lg:mb-6">
                                <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center">
                                    <span class="text-white text-xs font-bold">04</span>
                                </div>
                                <div class="h-[1px] w-16 bg-primary/30"></div>
                                <span class="text-primary text-xs font-semibold uppercase tracking-widest">Nazorg</span>
                            </div>
                            <h3 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.1] mb-4 lg:mb-6">Onderhoud<br>& service</h3>
                            <p class="text-secondary/50 text-sm leading-relaxed max-w-md mb-6">Na oplevering laten we je niet in de steek. We bieden onderhoudspakketten, garantieservice en technische ondersteuning. Gaat er iets stuk? Dan staan we klaar.</p>
                            <p class="text-secondary/50 text-sm leading-relaxed max-w-md mb-8">Wil je later uitbreiden of apparatuur vervangen? We denken graag mee en zorgen dat jouw gym altijd up-to-date blijft.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-secondary/5 text-secondary/60 text-[11px] font-medium px-3 py-1.5 rounded-full">Onderhoudscontracten</span>
                                <span class="bg-secondary/5 text-secondary/60 text-[11px] font-medium px-3 py-1.5 rounded-full">Garantieservice</span>
                                <span class="bg-secondary/5 text-secondary/60 text-[11px] font-medium px-3 py-1.5 rounded-full">Uitbreidingsadvies</span>
                                <span class="bg-secondary/5 text-secondary/60 text-[11px] font-medium px-3 py-1.5 rounded-full">Snelle responstijd</span>
                            </div>
                            <div class="flex items-center gap-3 mt-8">
                                <a href="#" class="bg-primary rounded-full px-6 py-3 text-white text-xs font-semibold hover:bg-primary/80 transition-colors">Neem contact op <i class="fa-solid fa-arrow-right text-xs ml-1.5"></i></a>
                                <a href="#" class="border border-secondary/15 rounded-full px-6 py-3 text-secondary/60 text-xs font-semibold hover:border-primary/30 hover:text-primary transition-colors">Servicepakketten</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Brands / Equipment Section --}}
        <section class="brands-section bg-secondary relative overflow-hidden">

            {{-- Heading --}}
            <div class="text-center pt-16 lg:pt-32 pb-10 lg:pb-20 px-4 sm:px-6 relative z-10">
                <p class="brands-fade text-primary text-xs font-semibold uppercase tracking-widest mb-5">Partners & merken</p>
                <h2 class="brands-fade text-white text-3xl sm:text-5xl md:text-6xl font-bold leading-[1.05] mb-6">Topapparatuur van de<br><span class="text-primary">beste merken</span></h2>
                <p class="brands-fade text-white/35 text-sm leading-relaxed max-w-lg mx-auto">Wij werken uitsluitend met A-merken in de fitnessbranche. Zo garanderen we kwaliteit, duurzaamheid en de beste trainervaring voor jouw leden.</p>
            </div>

            {{-- Brand marquee row 1 (left-to-right) --}}
            <div class="brands-marquee-wrap mb-4 relative z-10">
                <div class="brands-marquee">
                    @for ($i = 0; $i < 3; $i++)
                    <span class="brand-pill"><img src="{{ asset('assets/wp-uploads/Life-Fitness.png') }}" alt="Life Fitness" class="brand-logo"></span>
                    <span class="brand-pill"><img src="{{ asset('assets/wp-uploads/MATRIX-LOGO.png') }}" alt="Matrix" class="brand-logo"></span>
                    <span class="brand-pill"><img src="{{ asset('assets/wp-uploads/Concept2-1.png') }}" alt="Concept2" class="brand-logo"></span>
                    <span class="brand-pill"><img src="{{ asset('assets/wp-uploads/StairMaster-Logo.png') }}" alt="StairMaster" class="brand-logo"></span>
                    <span class="brand-pill"><img src="{{ asset('assets/wp-uploads/LOGO_WEIss-1024x462-1.png') }}" alt="Gym80" class="brand-logo"></span>
                    <span class="brand-pill"><img src="{{ asset('assets/wp-uploads/keiser-scaled.png') }}" alt="Keiser" class="brand-logo"></span>
                    @endfor
                </div>
            </div>

            {{-- Brand marquee row 2 (right-to-left) --}}
            <div class="brands-marquee-wrap mb-20 relative z-10">
                <div class="brands-marquee brands-marquee--reverse">
                    @for ($i = 0; $i < 3; $i++)
                    <span class="brand-pill"><img src="{{ asset('assets/wp-uploads/acf.Logo-Star-Trac-scaled.webp') }}" alt="Star Trac" class="brand-logo"></span>
                    <span class="brand-pill"><img src="{{ asset('assets/wp-uploads/66840a042cc873f7252180df_Full-width-logo.png') }}" alt="Next Round" class="brand-logo"></span>
                    <span class="brand-pill"><img src="{{ asset('assets/wp-uploads/6239bf5b33d83711745b1edb_StockZ-Logo-Primary-CMYK-Black.png') }}" alt="Stockz" class="brand-logo"></span>
                    <span class="brand-pill"><img src="{{ asset('assets/wp-uploads/LOGO-CLUBJOY-LIGGEND-KLEUR-e1643845894830.png') }}" alt="Clubjoy" class="brand-logo"></span>
                    <span class="brand-pill"><img src="{{ asset('assets/wp-uploads/logo-hammer-strength-2.png') }}" alt="Hammer Strength" class="brand-logo"></span>
                    <span class="brand-pill"><img src="{{ asset('assets/wp-uploads/Life-Fitness.png') }}" alt="Life Fitness" class="brand-logo"></span>
                    <span class="brand-pill"><img src="{{ asset('assets/wp-uploads/Concept2-1.png') }}" alt="Concept2" class="brand-logo"></span>
                    <span class="brand-pill"><img src="{{ asset('assets/wp-uploads/MATRIX-LOGO.png') }}" alt="Matrix" class="brand-logo"></span>
                    @endfor
                </div>
            </div>

            {{-- Stats --}}
            <div class="max-w-5xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-6 sm:gap-8 mb-12 px-4 sm:px-6 relative z-10">
                <div class="text-center brands-fade">
                    <div class="flex items-baseline justify-center gap-1">
                        <span class="brand-counter text-3xl sm:text-5xl font-black text-white" data-target="50">0</span>
                        <span class="text-3xl text-primary font-black">+</span>
                    </div>
                    <p class="text-white/30 text-xs font-medium mt-2 uppercase tracking-wider">Premium merken</p>
                </div>
                <div class="text-center brands-fade">
                    <div class="flex items-baseline justify-center gap-1">
                        <span class="brand-counter text-3xl sm:text-5xl font-black text-white" data-target="10000">0</span>
                        <span class="text-3xl text-primary font-black">+</span>
                    </div>
                    <p class="text-white/30 text-xs font-medium mt-2 uppercase tracking-wider">Producten</p>
                </div>
                <div class="text-center brands-fade">
                    <div class="flex items-baseline justify-center gap-1">
                        <span class="brand-counter text-3xl sm:text-5xl font-black text-white" data-target="500">0</span>
                        <span class="text-3xl text-primary font-black">+</span>
                    </div>
                    <p class="text-white/30 text-xs font-medium mt-2 uppercase tracking-wider">Projecten gerealiseerd</p>
                </div>
                <div class="text-center brands-fade">
                    <div class="flex items-baseline justify-center gap-1">
                        <span class="brand-counter text-3xl sm:text-5xl font-black text-white" data-target="15">0</span>
                        <span class="text-3xl text-primary font-black">+</span>
                    </div>
                    <p class="text-white/30 text-xs font-medium mt-2 uppercase tracking-wider">Jaar ervaring</p>
                </div>
            </div>

            {{-- CTAs --}}
            <div class="flex flex-col sm:flex-row items-center justify-center gap-3 sm:gap-4 pb-16 lg:pb-32 relative z-10 brands-fade">
                <a href="#" class="bg-primary rounded-full px-6 py-3.5 text-white text-xs font-semibold hover:bg-primary/80 transition-colors">Bekijk alle merken <i class="fa-solid fa-arrow-right text-xs ml-1.5"></i></a>
                <a href="#" class="bg-white/10 border border-white/20 rounded-full px-6 py-3.5 text-white text-xs font-semibold hover:bg-white/20 transition-colors">Offerte aanvragen</a>
            </div>
        </section>

        {{-- Diensten Section - Bento Grid --}}
        <section class="diensten-section bg-white py-24 lg:py-32 relative" data-header-light>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
                {{-- Header --}}
                <div class="flex flex-col lg:flex-row lg:items-end gap-4 lg:gap-0 justify-between mb-8 lg:mb-16">
                    <h2 class="diensten-fade text-secondary text-3xl lg:text-5xl font-bold leading-[1]">Wat wij voor jou<br><span class="text-primary">kunnen betekenen</span></h2>
                    <p class="diensten-fade lg:max-w-[400px] lg:text-right text-xs text-secondary/50">Van sportschool tot homegym, van hotel tot renovatie. Wij ontzorgen het complete traject van ontwerp tot oplevering.</p>
                </div>

                {{-- Bento Grid --}}
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-5">
                    {{-- Featured: Sportschool inrichten (large left) --}}
                    <a href="{{ url('/diensten/sportschool-inrichten') }}" class="dienst-card group relative transition lg:col-span-5 lg:row-span-2 bg-secondary rounded-3xl overflow-hidden min-h-[380px] lg:min-h-0 flex flex-col justify-end">
                        <img src="/assets/1.jpg" alt="Sportschool inrichten" class="absolute inset-0 w-full h-full object-cover opacity-40 group-hover:opacity-55 group-hover:scale-105 transition-all duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-secondary/60 via-secondary/20 to-transparent"></div>
                        <div class="relative z-10 p-8 lg:p-10">
                            <span class="inline-block bg-primary/15 border border-primary/30 text-primary text-[10px] font-bold uppercase tracking-wider rounded-full px-3 py-1 mb-4">Populairst</span>
                            <h3 class="text-white text-2xl lg:text-3xl font-bold mb-3">Sportschool inrichten</h3>
                            <p class="text-white/50 text-sm leading-relaxed max-w-sm mb-5">Volledige inrichting van commerciele sportscholen. Van plattegrond en 3D-ontwerp tot apparatuur, vloer en afwerking.</p>
                            <span class="inline-flex items-center text-primary text-xs font-semibold gap-1.5 group-hover:gap-2.5 transition-all">
                                Bekijk dienst <i class="fa-solid fa-arrow-right text-[10px] transition-transform group-hover:translate-x-1"></i>
                            </span>
                        </div>
                    </a>

                    {{-- PT-studio & boutique (top right) --}}
                    <a href="{{ url('/diensten/pt-studio-boutique') }}" class="dienst-card group relative border-2 border-transparent hover:border-primary/50 lg:col-span-7 bg-secondary rounded-3xl overflow-hidden min-h-[240px] flex flex-col justify-end">
                        <img src="/assets/2.jpg" alt="PT-studio & boutique" class="absolute inset-0 w-full h-full object-cover opacity-30 group-hover:opacity-45 group-hover:scale-105 transition-all duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-secondary/60 via-secondary/20 to-transparent"></div>
                        <div class="relative z-10 p-8">
                            <div class="flex items-end justify-between gap-4">
                                <div>
                                    <h3 class="text-white text-xl font-bold mb-2">PT-studio & boutique</h3>
                                    <p class="text-white/40 text-sm leading-relaxed max-w-md">Compacte, sfeervolle ruimtes voor personal training en boutique fitness. Ontworpen om het maximale uit elke m² te halen.</p>
                                </div>
                                <div class="w-12 h-12 rounded-2xl bg-white/10 flex items-center justify-center shrink-0 group-hover:bg-primary/20 transition-colors">
                                    <i class="fa-solid fa-dumbbell text-primary text-lg"></i>
                                </div>
                            </div>
                        </div>
                    </a>

                    {{-- Bedrijfsfitness (middle right left) --}}
                    <a href="{{ url('/diensten/bedrijfsfitness') }}" class="dienst-card group relative border-2 border-transparent hover:border-primary/50 lg:col-span-4 bg-secondary rounded-3xl overflow-hidden min-h-[240px] flex flex-col justify-end">
                        <img src="/assets/3.jpg" alt="Bedrijfsfitness" class="absolute inset-0 w-full h-full object-cover opacity-30 group-hover:opacity-45 group-hover:scale-105 transition-all duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-secondary/60 via-secondary/20 to-transparent"></div>
                        <div class="relative z-10 p-8">
                            <div class="w-12 h-12 rounded-2xl bg-white/10 flex items-center justify-center mb-4 group-hover:bg-primary/20 transition-colors">
                                <i class="fa-solid fa-building text-primary text-lg"></i>
                            </div>
                            <h3 class="text-white text-xl font-bold mb-2">Bedrijfsfitness</h3>
                            <p class="text-white/40 text-sm leading-relaxed">Fitnessruimtes op kantoor die medewerkers fit en productief houden.</p>
                        </div>
                    </a>

                    {{-- Homegym inrichten (middle right right) --}}
                    <a href="{{ url('/diensten/homegym-inrichten') }}" class="dienst-card group relative border-2 border-transparent hover:border-primary/50 lg:col-span-3 bg-secondary rounded-3xl overflow-hidden min-h-[240px] flex flex-col justify-end">
                        <img src="/assets/1.jpg" alt="Hotels & hospitality" class="absolute inset-0 w-full h-full object-cover opacity-30 group-hover:opacity-45 group-hover:scale-105 transition-all duration-700">
                        <div class="absolute inset-0 bg-gradient-to-br from-primary/5 to-transparent"></div>
                        <div class="relative z-10 p-8">
                            <div class="w-12 h-12 rounded-2xl bg-white/10 flex items-center justify-center mb-4 group-hover:bg-primary/20 transition-colors">
                                <i class="fa-solid fa-house-chimney text-primary text-lg"></i>
                            </div>
                            <h3 class="text-white text-xl font-bold mb-2">Homegym inrichten</h3>
                            <p class="text-white/40 text-sm leading-relaxed">Jouw droomgym thuis. Op maat ingericht voor jouw doelen en ruimte.</p>
                        </div>
                    </a>

                    {{-- Hotels & hospitality (bottom left) --}}
                    <a href="{{ url('/diensten/hotels-hospitality') }}" class="dienst-card group relative border-2 border-transparent hover:border-primary/50 lg:col-span-7 bg-secondary rounded-3xl overflow-hidden min-h-[240px] flex flex-col justify-end">
                        <img src="/assets/4.jpg" alt="Hotels & hospitality" class="absolute inset-0 w-full h-full object-cover opacity-30 group-hover:opacity-45 group-hover:scale-105 transition-all duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-secondary/60 via-secondary/20 to-transparent"></div>
                        <div class="relative z-10 p-8">
                            <div class="flex items-end justify-between gap-4">
                                <div>
                                    <h3 class="text-white text-xl font-bold mb-2">Hotels & hospitality</h3>
                                    <p class="text-white/40 text-sm leading-relaxed max-w-md">Premium fitnessruimtes voor hotels en hospitality. Strak design dat past bij het niveau van jouw gasten.</p>
                                </div>
                                <div class="w-12 h-12 rounded-2xl bg-white/10 flex items-center justify-center shrink-0 group-hover:bg-primary/20 transition-colors">
                                    <i class="fa-solid fa-hotel text-primary text-lg"></i>
                                </div>
                            </div>
                        </div>
                    </a>

                    {{-- Gymrenovatie (bottom right) --}}
                    <a href="{{ url('/diensten/gymrenovatie') }}" class="dienst-card group relative border-2 border-transparent hover:border-primary/50 lg:col-span-5 bg-secondary rounded-3xl overflow-hidden min-h-[240px] flex flex-col justify-end">
                        <img src="/assets/5.jpg" alt="Gymrenovatie" class="absolute inset-0 w-full h-full object-cover opacity-30 group-hover:opacity-45 group-hover:scale-105 transition-all duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-secondary/60 via-secondary/20 to-transparent"></div>
                        <div class="relative z-10 p-8">
                            <div class="w-12 h-12 rounded-2xl bg-white/10 flex items-center justify-center mb-4 group-hover:bg-primary/20 transition-colors">
                                <i class="fa-solid fa-hammer text-primary text-lg"></i>
                            </div>
                            <h3 class="text-white text-xl font-bold mb-2">Gymrenovatie</h3>
                            <p class="text-white/40 text-sm leading-relaxed">Bestaande gym upgraden? Wij renoveren van vloer tot plafond met minimale downtime.</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        {{-- Projects Section - Sticky Scroll Showcase --}}
        <section class="projects-section bg-white relative pb-16 lg:pb-32" data-header-light>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
                <div class="pt-32 pb-10 lg:pb-20">
                    <p class="project-heading text-primary text-xs font-semibold uppercase tracking-widest mb-4">Portfolio</p>
                    <h2 class="project-heading text-secondary text-4xl lg:text-5xl font-bold leading-[1.05]">Recente <span class="text-primary">projecten</span></h2>
                </div>

                <div class="lg:flex gap-20">
                    {{-- Left: Sticky video showcase (desktop only) --}}
                    <div class="hidden lg:block lg:w-[45%] shrink-0">
                        <div class="lg:sticky lg:top-[12vh]">
                            <div class="project-showcase rounded-3xl overflow-hidden aspect-[3/4] relative bg-secondary shadow-2xl">
                                <video src="/shorts/fitnessaannemer-short-1.mp4" class="project-vid absolute inset-0 w-full h-full object-cover" data-idx="0" muted loop playsinline></video>
                                <video src="/shorts/fitnessaannemer-short-3.mp4" class="project-vid absolute inset-0 w-full h-full object-cover opacity-0" data-idx="1" muted loop playsinline></video>
                                <video src="/shorts/fitnessaannemer-short-5.mp4" class="project-vid absolute inset-0 w-full h-full object-cover opacity-0" data-idx="2" muted loop playsinline></video>
                                <video src="/shorts/fitnessaannemer-short-7.mp4" class="project-vid absolute inset-0 w-full h-full object-cover opacity-0" data-idx="3" muted loop playsinline></video>
                                <video src="/shorts/fitnessaannemer-short-9.mp4" class="project-vid absolute inset-0 w-full h-full object-cover opacity-0" data-idx="4" muted loop playsinline></video>
                                <div class="absolute inset-0 bg-gradient-to-t from-secondary/70 via-transparent to-secondary/20 pointer-events-none z-10"></div>
                                {{-- Step counter --}}
                                <div class="absolute bottom-6 left-8 z-20">
                                    <span class="project-counter text-white opacity-20 text-8xl font-bold leading-none" style="font-family:'DM Serif Display'">01</span>
                                </div>
                                {{-- Vertical progress dots --}}
                                <div class="absolute bottom-8 right-8 z-20 flex flex-col gap-2">
                                    @for($d = 0; $d < 5; $d++)
                                    <div class="project-dot w-1.5 rounded-full transition-all duration-500 {{ $d === 0 ? 'h-8 bg-primary' : 'h-2 bg-white/20' }}"></div>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Right: Scrollable project details --}}
                    <div class="lg:w-[55%]">
                        {{-- Project 1: FitLife Amsterdam --}}
                        <div class="project-item py-12 lg:py-0 lg:min-h-[110vh] flex items-start lg:pt-[3vh] border-b border-secondary/10 lg:border-0" data-project="0">
                            <div>
                                <div class="lg:hidden rounded-2xl overflow-hidden aspect-[16/9] mb-6">
                                    <video src="/shorts/fitnessaannemer-short-1.mp4" class="w-full h-full object-cover" muted loop playsinline autoplay></video>
                                </div>
                                <span class="text-primary/15 text-7xl font-bold leading-none block mb-2" style="font-family:'DM Serif Display'">01</span>
                                <span class="project-tag">Commerciele gym</span>
                                <h3 class="text-secondary text-3xl font-bold mt-4 mb-2">FitLife Amsterdam</h3>
                                <p class="text-secondary/50 text-sm leading-relaxed mb-8 max-w-md">Volledig ingerichte premium gym over 2 verdiepingen. Van cardio en krachtzones tot groepsleszalen en recovery ruimte.</p>

                                {{-- Dotted timeline --}}
                                <div class="project-timeline relative pl-8 mb-8 max-w-md">
                                    <div class="absolute left-[7px] top-2 bottom-2 w-px border-l-2 border-dashed border-primary/20"></div>
                                    <div class="timeline-step relative pb-6">
                                        <div class="absolute -left-8 top-0.5 w-4 h-4 rounded-full bg-primary/15 border-2 border-primary flex items-center justify-center"><div class="w-1.5 h-1.5 rounded-full bg-primary"></div></div>
                                        <p class="text-secondary text-xs font-semibold mb-1">Kennismakingsgesprek & ruimte-analyse</p>
                                        <p class="text-secondary/40 text-[11px] leading-relaxed">Locatiebezoek op de Zuidas. 850 m² verdeeld over twee etages in kaart gebracht, wensen en doelgroep besproken.</p>
                                    </div>
                                    <div class="timeline-step relative pb-6">
                                        <div class="absolute -left-8 top-0.5 w-4 h-4 rounded-full bg-primary/15 border-2 border-primary flex items-center justify-center"><div class="w-1.5 h-1.5 rounded-full bg-primary"></div></div>
                                        <p class="text-secondary text-xs font-semibold mb-1">3D ontwerp & apparatuurselectie</p>
                                        <p class="text-secondary/40 text-[11px] leading-relaxed">Twee complete plattegronden uitgewerkt in 3D. Selectie van commerciele Life Fitness en Hammer Strength apparatuur.</p>
                                    </div>
                                    <div class="timeline-step relative pb-6">
                                        <div class="absolute -left-8 top-0.5 w-4 h-4 rounded-full bg-primary/15 border-2 border-primary flex items-center justify-center"><div class="w-1.5 h-1.5 rounded-full bg-primary"></div></div>
                                        <p class="text-secondary text-xs font-semibold mb-1">Gefaseerde levering & installatie</p>
                                        <p class="text-secondary/40 text-[11px] leading-relaxed">Eerst de begane grond, daarna de eerste verdieping. Vloeren, spiegels, apparatuur en cable management in twee weekenden geplaatst.</p>
                                    </div>
                                    <div class="timeline-step relative">
                                        <div class="absolute -left-8 top-0.5 w-4 h-4 rounded-full bg-primary border-2 border-primary flex items-center justify-center"><i class="fa-solid fa-check text-white text-[7px]"></i></div>
                                        <p class="text-secondary text-xs font-semibold mb-1">Oplevering & onderhoudspakket</p>
                                        <p class="text-secondary/40 text-[11px] leading-relaxed">Sleuteloverdracht inclusief 3-jarig onderhoudspakket. Personeelstraining voor bediening en basismaintenance.</p>
                                    </div>
                                </div>

                                <div class="flex items-center gap-5 mb-8">
                                    <span class="text-secondary/40 text-xs font-medium"><i class="fa-solid fa-ruler-combined mr-1.5 text-primary/70"></i>850 m²</span>
                                    <span class="text-secondary/40 text-xs font-medium"><i class="fa-solid fa-location-dot mr-1.5 text-primary/70"></i>Amsterdam</span>
                                    <span class="text-secondary/40 text-xs font-medium"><i class="fa-solid fa-calendar mr-1.5 text-primary/70"></i>2024</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <a href="#" class="bg-primary rounded-full px-5 py-3 text-white text-xs font-semibold hover:bg-primary/80 transition-colors">Bekijk dit project <i class="fa-solid fa-arrow-right text-[10px] ml-1.5"></i></a>
                                    <a href="{{ url('/offerte-aanvragen') }}" class="border border-secondary/15 rounded-full px-5 py-3 text-secondary/50 text-xs font-semibold hover:border-primary/30 hover:text-primary transition-colors">Offerte aanvragen</a>
                                </div>
                            </div>
                        </div>

                        {{-- Project 2: Iron House PT --}}
                        <div class="project-item py-12 lg:py-0 lg:min-h-[110vh] flex items-start lg:pt-[15vh] border-b border-secondary/10 lg:border-0" data-project="1">
                            <div>
                                <div class="lg:hidden rounded-2xl overflow-hidden aspect-[16/9] mb-6">
                                    <video src="/shorts/fitnessaannemer-short-3.mp4" class="w-full h-full object-cover" muted loop playsinline autoplay></video>
                                </div>
                                <span class="text-primary/15 text-7xl font-bold leading-none block mb-2" style="font-family:'DM Serif Display'">02</span>
                                <span class="project-tag">PT Studio</span>
                                <h3 class="text-secondary text-3xl font-bold mt-4 mb-2">Iron House PT</h3>
                                <p class="text-secondary/50 text-sm leading-relaxed mb-8 max-w-md">Boutique personal training studio met op maat gemaakte krachtapparatuur en een premium uitstraling voor high-end clientele.</p>

                                <div class="project-timeline relative pl-8 mb-8 max-w-md">
                                    <div class="absolute left-[7px] top-2 bottom-2 w-px border-l-2 border-dashed border-primary/20"></div>
                                    <div class="timeline-step relative pb-6">
                                        <div class="absolute -left-8 top-0.5 w-4 h-4 rounded-full bg-primary/15 border-2 border-primary flex items-center justify-center"><div class="w-1.5 h-1.5 rounded-full bg-primary"></div></div>
                                        <p class="text-secondary text-xs font-semibold mb-1">Behoefteanalyse & visiegesprek</p>
                                        <p class="text-secondary/40 text-[11px] leading-relaxed">Samen met de eigenaar de visie voor een premium 1-op-1 studio uitgewerkt. Focus op uitstraling, intimiteit en functionaliteit.</p>
                                    </div>
                                    <div class="timeline-step relative pb-6">
                                        <div class="absolute -left-8 top-0.5 w-4 h-4 rounded-full bg-primary/15 border-2 border-primary flex items-center justify-center"><div class="w-1.5 h-1.5 rounded-full bg-primary"></div></div>
                                        <p class="text-secondary text-xs font-semibold mb-1">Premium apparatuurselectie</p>
                                        <p class="text-secondary/40 text-[11px] leading-relaxed">Selectie van Watson Gym Equipment en Eleiko. Custom kleurcoating op alle toestellen passend bij de huisstijl.</p>
                                    </div>
                                    <div class="timeline-step relative pb-6">
                                        <div class="absolute -left-8 top-0.5 w-4 h-4 rounded-full bg-primary/15 border-2 border-primary flex items-center justify-center"><div class="w-1.5 h-1.5 rounded-full bg-primary"></div></div>
                                        <p class="text-secondary text-xs font-semibold mb-1">Interieur & sfeerontwerp</p>
                                        <p class="text-secondary/40 text-[11px] leading-relaxed">Maatwerk interieur met indirect LED-licht, akoestische panelen en premium rubberen vloer in antraciet.</p>
                                    </div>
                                    <div class="timeline-step relative">
                                        <div class="absolute -left-8 top-0.5 w-4 h-4 rounded-full bg-primary border-2 border-primary flex items-center justify-center"><i class="fa-solid fa-check text-white text-[7px]"></i></div>
                                        <p class="text-secondary text-xs font-semibold mb-1">Overdracht & personal branding</p>
                                        <p class="text-secondary/40 text-[11px] leading-relaxed">Studio opgeleverd met fotoshoot-ready styling. Eigenaar getraind in onderhoud en apparatuurgebruik.</p>
                                    </div>
                                </div>

                                <div class="flex items-center gap-5 mb-8">
                                    <span class="text-secondary/40 text-xs font-medium"><i class="fa-solid fa-ruler-combined mr-1.5 text-primary/70"></i>180 m²</span>
                                    <span class="text-secondary/40 text-xs font-medium"><i class="fa-solid fa-location-dot mr-1.5 text-primary/70"></i>Rotterdam</span>
                                    <span class="text-secondary/40 text-xs font-medium"><i class="fa-solid fa-calendar mr-1.5 text-primary/70"></i>2024</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <a href="#" class="bg-primary rounded-full px-5 py-3 text-white text-xs font-semibold hover:bg-primary/80 transition-colors">Bekijk dit project <i class="fa-solid fa-arrow-right text-[10px] ml-1.5"></i></a>
                                    <a href="{{ url('/offerte-aanvragen') }}" class="border border-secondary/15 rounded-full px-5 py-3 text-secondary/50 text-xs font-semibold hover:border-primary/30 hover:text-primary transition-colors">Offerte aanvragen</a>
                                </div>
                            </div>
                        </div>

                        {{-- Project 3: Hotel Krasnapolsky --}}
                        <div class="project-item py-12 lg:py-0 lg:min-h-[110vh] flex items-start lg:pt-[15vh] border-b border-secondary/10 lg:border-0" data-project="2">
                            <div>
                                <div class="lg:hidden rounded-2xl overflow-hidden aspect-[16/9] mb-6">
                                    <video src="/shorts/fitnessaannemer-short-5.mp4" class="w-full h-full object-cover" muted loop playsinline autoplay></video>
                                </div>
                                <span class="text-primary/15 text-7xl font-bold leading-none block mb-2" style="font-family:'DM Serif Display'">03</span>
                                <span class="project-tag">Hotel fitness</span>
                                <h3 class="text-secondary text-3xl font-bold mt-4 mb-2">Hotel Krasnapolsky</h3>
                                <p class="text-secondary/50 text-sm leading-relaxed mb-8 max-w-md">Luxe hotelgym met premium Technogym apparatuur. Compact maar compleet, afgestemd op de wensen van internationale gasten.</p>

                                <div class="project-timeline relative pl-8 mb-8 max-w-md">
                                    <div class="absolute left-[7px] top-2 bottom-2 w-px border-l-2 border-dashed border-primary/20"></div>
                                    <div class="timeline-step relative pb-6">
                                        <div class="absolute -left-8 top-0.5 w-4 h-4 rounded-full bg-primary/15 border-2 border-primary flex items-center justify-center"><div class="w-1.5 h-1.5 rounded-full bg-primary"></div></div>
                                        <p class="text-secondary text-xs font-semibold mb-1">Analyse gastprofiel & ruimte</p>
                                        <p class="text-secondary/40 text-[11px] leading-relaxed">Bestaande kelderruimte beoordeeld. Gastprofiel geanalyseerd: internationale zakenreizigers die korte, effectieve workouts willen.</p>
                                    </div>
                                    <div class="timeline-step relative pb-6">
                                        <div class="absolute -left-8 top-0.5 w-4 h-4 rounded-full bg-primary/15 border-2 border-primary flex items-center justify-center"><div class="w-1.5 h-1.5 rounded-full bg-primary"></div></div>
                                        <p class="text-secondary text-xs font-semibold mb-1">Compact concept op maat</p>
                                        <p class="text-secondary/40 text-[11px] leading-relaxed">Op 120 m² een complete gym ontworpen met Technogym Artis-lijn. Cardio, kracht en stretch in drie duidelijke zones.</p>
                                    </div>
                                    <div class="timeline-step relative pb-6">
                                        <div class="absolute -left-8 top-0.5 w-4 h-4 rounded-full bg-primary/15 border-2 border-primary flex items-center justify-center"><div class="w-1.5 h-1.5 rounded-full bg-primary"></div></div>
                                        <p class="text-secondary text-xs font-semibold mb-1">Nachtinstallatie zonder hinder</p>
                                        <p class="text-secondary/40 text-[11px] leading-relaxed">Volledige installatie uitgevoerd in twee nachten om hotelgasten niet te storen. Inclusief vloer, verlichting en spiegels.</p>
                                    </div>
                                    <div class="timeline-step relative">
                                        <div class="absolute -left-8 top-0.5 w-4 h-4 rounded-full bg-primary border-2 border-primary flex items-center justify-center"><i class="fa-solid fa-check text-white text-[7px]"></i></div>
                                        <p class="text-secondary text-xs font-semibold mb-1">24/7 beschikbaar voor gasten</p>
                                        <p class="text-secondary/40 text-[11px] leading-relaxed">Gym geopend met toegangscontrole via kamerpas. Onderhoudscontract met 48-uur responstijd bij storingen.</p>
                                    </div>
                                </div>

                                <div class="flex items-center gap-5 mb-8">
                                    <span class="text-secondary/40 text-xs font-medium"><i class="fa-solid fa-ruler-combined mr-1.5 text-primary/70"></i>120 m²</span>
                                    <span class="text-secondary/40 text-xs font-medium"><i class="fa-solid fa-location-dot mr-1.5 text-primary/70"></i>Amsterdam</span>
                                    <span class="text-secondary/40 text-xs font-medium"><i class="fa-solid fa-calendar mr-1.5 text-primary/70"></i>2023</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <a href="#" class="bg-primary rounded-full px-5 py-3 text-white text-xs font-semibold hover:bg-primary/80 transition-colors">Bekijk dit project <i class="fa-solid fa-arrow-right text-[10px] ml-1.5"></i></a>
                                    <a href="{{ url('/offerte-aanvragen') }}" class="border border-secondary/15 rounded-full px-5 py-3 text-secondary/50 text-xs font-semibold hover:border-primary/30 hover:text-primary transition-colors">Offerte aanvragen</a>
                                </div>
                            </div>
                        </div>

                        {{-- Project 4: ASML Campus --}}
                        <div class="project-item py-12 lg:py-0 lg:min-h-[110vh] flex items-start lg:pt-[15vh] border-b border-secondary/10 lg:border-0" data-project="3">
                            <div>
                                <div class="lg:hidden rounded-2xl overflow-hidden aspect-[16/9] mb-6">
                                    <video src="/shorts/fitnessaannemer-short-7.mp4" class="w-full h-full object-cover" muted loop playsinline autoplay></video>
                                </div>
                                <span class="text-primary/15 text-7xl font-bold leading-none block mb-2" style="font-family:'DM Serif Display'">04</span>
                                <span class="project-tag">Bedrijfsfitness</span>
                                <h3 class="text-secondary text-3xl font-bold mt-4 mb-2">ASML Campus</h3>
                                <p class="text-secondary/50 text-sm leading-relaxed mb-8 max-w-md">Bedrijfsfitness op topniveau. Een complete fitnessruimte voor medewerkers, van cardio tot functionele trainingszone.</p>

                                <div class="project-timeline relative pl-8 mb-8 max-w-md">
                                    <div class="absolute left-[7px] top-2 bottom-2 w-px border-l-2 border-dashed border-primary/20"></div>
                                    <div class="timeline-step relative pb-6">
                                        <div class="absolute -left-8 top-0.5 w-4 h-4 rounded-full bg-primary/15 border-2 border-primary flex items-center justify-center"><div class="w-1.5 h-1.5 rounded-full bg-primary"></div></div>
                                        <p class="text-secondary text-xs font-semibold mb-1">Intake met HR & facilitair</p>
                                        <p class="text-secondary/40 text-[11px] leading-relaxed">Gesprekken met HR-afdeling en facilitair management. Medewerkersonderzoek uitgezet om trainingsvoorkeuren te inventariseren.</p>
                                    </div>
                                    <div class="timeline-step relative pb-6">
                                        <div class="absolute -left-8 top-0.5 w-4 h-4 rounded-full bg-primary/15 border-2 border-primary flex items-center justify-center"><div class="w-1.5 h-1.5 rounded-full bg-primary"></div></div>
                                        <p class="text-secondary text-xs font-semibold mb-1">Ergonomisch ontwerp & zoning</p>
                                        <p class="text-secondary/40 text-[11px] leading-relaxed">340 m² opgedeeld in cardiozone, krachtzone, functionele area en stretch/recovery. Alles gericht op korte lunchpauze-workouts.</p>
                                    </div>
                                    <div class="timeline-step relative pb-6">
                                        <div class="absolute -left-8 top-0.5 w-4 h-4 rounded-full bg-primary/15 border-2 border-primary flex items-center justify-center"><div class="w-1.5 h-1.5 rounded-full bg-primary"></div></div>
                                        <p class="text-secondary text-xs font-semibold mb-1">Gefaseerde levering in weekenden</p>
                                        <p class="text-secondary/40 text-[11px] leading-relaxed">Vanwege strenge campusbeveiliging alles in drie weekenden geleverd en geinstalleerd. Nul verstoring van werkprocessen.</p>
                                    </div>
                                    <div class="timeline-step relative">
                                        <div class="absolute -left-8 top-0.5 w-4 h-4 rounded-full bg-primary border-2 border-primary flex items-center justify-center"><i class="fa-solid fa-check text-white text-[7px]"></i></div>
                                        <p class="text-secondary text-xs font-semibold mb-1">Lancering & onderhoudsdeal</p>
                                        <p class="text-secondary/40 text-[11px] leading-relaxed">Opening met interne campagne. Maandelijks preventief onderhoud en een vast aanspreekpunt voor storingen.</p>
                                    </div>
                                </div>

                                <div class="flex items-center gap-5 mb-8">
                                    <span class="text-secondary/40 text-xs font-medium"><i class="fa-solid fa-ruler-combined mr-1.5 text-primary/70"></i>340 m²</span>
                                    <span class="text-secondary/40 text-xs font-medium"><i class="fa-solid fa-location-dot mr-1.5 text-primary/70"></i>Veldhoven</span>
                                    <span class="text-secondary/40 text-xs font-medium"><i class="fa-solid fa-calendar mr-1.5 text-primary/70"></i>2024</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <a href="#" class="bg-primary rounded-full px-5 py-3 text-white text-xs font-semibold hover:bg-primary/80 transition-colors">Bekijk dit project <i class="fa-solid fa-arrow-right text-[10px] ml-1.5"></i></a>
                                    <a href="{{ url('/offerte-aanvragen') }}" class="border border-secondary/15 rounded-full px-5 py-3 text-secondary/50 text-xs font-semibold hover:border-primary/30 hover:text-primary transition-colors">Offerte aanvragen</a>
                                </div>
                            </div>
                        </div>

                        {{-- Project 5: CrossFit Breda --}}
                        <div class="project-item py-12 lg:py-0 lg:pb-[5vh] flex items-start lg:pt-[15vh]" data-project="4">
                            <div>
                                <div class="lg:hidden rounded-2xl overflow-hidden aspect-[16/9] mb-6">
                                    <video src="/shorts/fitnessaannemer-short-9.mp4" class="w-full h-full object-cover" muted loop playsinline autoplay></video>
                                </div>
                                <span class="text-primary/15 text-7xl font-bold leading-none block mb-2" style="font-family:'DM Serif Display'">05</span>
                                <span class="project-tag">CrossFit box</span>
                                <h3 class="text-secondary text-3xl font-bold mt-4 mb-2">CrossFit Breda</h3>
                                <p class="text-secondary/50 text-sm leading-relaxed mb-8 max-w-md">Complete CrossFit box met custom rig, gewichthefplatforms, functionele zones en duurzame rubberen vloer.</p>

                                <div class="project-timeline relative pl-8 mb-8 max-w-md">
                                    <div class="absolute left-[7px] top-2 bottom-2 w-px border-l-2 border-dashed border-primary/20"></div>
                                    <div class="timeline-step relative pb-6">
                                        <div class="absolute -left-8 top-0.5 w-4 h-4 rounded-full bg-primary/15 border-2 border-primary flex items-center justify-center"><div class="w-1.5 h-1.5 rounded-full bg-primary"></div></div>
                                        <p class="text-secondary text-xs font-semibold mb-1">Vloerplan & rig-ontwerp</p>
                                        <p class="text-secondary/40 text-[11px] leading-relaxed">600 m² industriele hal ingedeeld voor WODs, gewichtheffen, gymnastics en warming-up. Custom rig op maat getekend.</p>
                                    </div>
                                    <div class="timeline-step relative pb-6">
                                        <div class="absolute -left-8 top-0.5 w-4 h-4 rounded-full bg-primary/15 border-2 border-primary flex items-center justify-center"><div class="w-1.5 h-1.5 rounded-full bg-primary"></div></div>
                                        <p class="text-secondary text-xs font-semibold mb-1">Custom fabricage & inkoop</p>
                                        <p class="text-secondary/40 text-[11px] leading-relaxed">12-meter rig op maat gefabriceerd. Rogue en Again Faster apparatuur besteld inclusief bumper plates, rowers en ski ergs.</p>
                                    </div>
                                    <div class="timeline-step relative pb-6">
                                        <div class="absolute -left-8 top-0.5 w-4 h-4 rounded-full bg-primary/15 border-2 border-primary flex items-center justify-center"><div class="w-1.5 h-1.5 rounded-full bg-primary"></div></div>
                                        <p class="text-secondary text-xs font-semibold mb-1">Vloer, rig & installatie</p>
                                        <p class="text-secondary/40 text-[11px] leading-relaxed">30mm rubberen vloer gelegd, rig verankerd in beton, gewichthefplatforms gebouwd en alle apparatuur geplaatst.</p>
                                    </div>
                                    <div class="timeline-step relative">
                                        <div class="absolute -left-8 top-0.5 w-4 h-4 rounded-full bg-primary border-2 border-primary flex items-center justify-center"><i class="fa-solid fa-check text-white text-[7px]"></i></div>
                                        <p class="text-secondary text-xs font-semibold mb-1">Grand opening & community</p>
                                        <p class="text-secondary/40 text-[11px] leading-relaxed">Box geopend met een community-event voor 200 atleten. Onderhoud en uitbreidingsadvies op doorlopende basis.</p>
                                    </div>
                                </div>

                                <div class="flex items-center gap-5 mb-8">
                                    <span class="text-secondary/40 text-xs font-medium"><i class="fa-solid fa-ruler-combined mr-1.5 text-primary/70"></i>600 m²</span>
                                    <span class="text-secondary/40 text-xs font-medium"><i class="fa-solid fa-location-dot mr-1.5 text-primary/70"></i>Breda</span>
                                    <span class="text-secondary/40 text-xs font-medium"><i class="fa-solid fa-calendar mr-1.5 text-primary/70"></i>2024</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <a href="#" class="bg-primary rounded-full px-5 py-3 text-white text-xs font-semibold hover:bg-primary/80 transition-colors">Bekijk dit project <i class="fa-solid fa-arrow-right text-[10px] ml-1.5"></i></a>
                                    <a href="{{ url('/offerte-aanvragen') }}" class="border border-secondary/15 rounded-full px-5 py-3 text-secondary/50 text-xs font-semibold hover:border-primary/30 hover:text-primary transition-colors">Offerte aanvragen</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="bg-secondary text-center pt-16 lg:pt-32 px-4 sm:px-6 relative z-10">
            <h2 class="brands-fade text-white text-3xl sm:text-5xl md:text-6xl font-bold leading-[1.05] mb-6">Klaar om jouw gym<br><span class="text-primary">te realiseren?</span></h2>
            <p class="brands-fade text-white/35 text-sm leading-relaxed max-w-lg mx-auto">Van concept tot oplevering, wij regelen alles. Neem contact op voor een vrijblijvend adviesgesprek en ontdek wat wij voor jouw fitnessruimte kunnen betekenen.</p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-3 sm:gap-4 mt-8">
                <a href="{{ url('/gratis-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Gratis adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                <a href="{{ url('/offerte-aanvragen') }}" class="bg-white/10 border border-white/20 rounded-full px-6 py-3.5 text-white text-xs font-semibold hover:bg-white/20 transition">Offerte aanvragen</a>
            </div>
        </div>

        <div class="project-arc bg-secondary relative z-10 hidden sm:block">
            @for ($i = 1; $i <= 9; $i++)
            <div class="project-arc-card rounded-2xl" data-arc-index="{{ $i - 1 }}">
                <video src="/shorts/fitnessaannemer-short-{{ $i }}.mp4" class="absolute inset-0 w-full h-full object-cover rounded-2xl" muted loop playsinline></video>
                <div class="project-arc-overlay absolute inset-0 bg-secondary rounded-2xl pointer-events-none"></div>
            </div>
            @endfor
        </div>

        {{-- Reviews Marquee Strip --}}
        <div class="bg-secondary py-16 overflow-hidden relative">
            <div class="reviews-marquee-track flex gap-6" style="width: max-content">
                @php
                $marqueeReviews = [
                    ['quote' => 'Vanaf het eerste adviesgesprek voelde het professioneel en persoonlijk. Het resultaat is boven verwachting.', 'name' => 'Jordi Vermeer', 'role' => 'FarmFit Culemborg', 'initials' => 'JV'],
                    ['quote' => 'Fitness Aannemer leverde niet alleen de apparatuur, maar dacht ook mee over de indeling en sfeer. Top service.', 'name' => 'Mike Bakker', 'role' => 'Ballin Fit Amsterdam', 'initials' => 'MB'],
                    ['quote' => 'De snelheid en kwaliteit waarmee alles geregeld werd was indrukwekkend. Leden zijn super enthousiast.', 'name' => 'Sophie Klein', 'role' => 'Upshape Den Haag', 'initials' => 'SK'],
                    ['quote' => 'Fitness Aannemer begreep direct wat we nodig hadden en leverde een strak, premium resultaat af.', 'name' => 'Rob Hendriks', 'role' => 'Van der Valk', 'initials' => 'RH'],
                    ['quote' => 'Van rig tot vloer, alles is top. De nazorg is ook uitstekend, ze staan altijd klaar.', 'name' => 'Dennis de Wit', 'role' => 'Vitality Sports Duiven', 'initials' => 'DW'],
                    ['quote' => 'Echt een team dat snapt wat een gym nodig heeft. Alles werd tot in detail verzorgd.', 'name' => 'Laura Jansen', 'role' => 'PowerZone Rotterdam', 'initials' => 'LJ'],
                ];
                @endphp
                @for($set = 0; $set < 2; $set++)
                    @foreach($marqueeReviews as $mr)
                    <div class="review-marquee-card flex-shrink-0 w-[300px] sm:w-[400px] bg-white/[0.04] border border-white/[0.08] rounded-2xl p-6">
                        <div class="flex gap-0.5 mb-4">
                            @for($s = 0; $s < 5; $s++)
                            <svg class="w-3.5 h-3.5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            @endfor
                        </div>
                        <p class="text-white/70 text-sm leading-relaxed mb-5">"{{ $mr['quote'] }}"</p>
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 rounded-full bg-primary/15 border border-primary/25 flex items-center justify-center">
                                <span class="text-primary text-[10px] font-bold">{{ $mr['initials'] }}</span>
                            </div>
                            <div>
                                <p class="text-white text-xs font-semibold">{{ $mr['name'] }}</p>
                                <p class="text-white/30 text-[11px]">{{ $mr['role'] }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endfor
            </div>
        </div>

        @include('partials.footer')
        @include('partials.cookie-consent')
    </body>
</html>
