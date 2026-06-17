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
            "logo": "{{ asset('fitnessaannemer-logo-fa-blauw.png') }}",
            "description": "Fitness Aannemer ontwerpt, levert en installeert complete fitnessoplossingen op maat voor gyms, PT studio's, hotels en bedrijven in Nederland en België.",
            "email": "info@fitnessaannemer.nl",
            "telephone": "+31850609981",
            "areaServed": [
                { "@@type": "Country", "name": "Nederland" },
                { "@@type": "Country", "name": "België" }
            ],
            "serviceType": [
                "Fitnessapparatuur levering",
                "Gym ontwerp & inrichting",
                "Fitnessapparatuur installatie",
                "Fitnessapparatuur leasing"
            ],
            "sameAs": [
                "https://www.instagram.com/fitnessaannemer/",
                "https://www.linkedin.com/company/fitnessaannemer/"
            ]
        }
        </script>
        <script type="application/ld+json">
        {
            "@@context": "https://schema.org",
            "@@type": "WebSite",
            "name": "Fitness Aannemer",
            "url": "{{ url('/') }}"
        }
        </script>
        <script type="application/ld+json">
        {
            "@@context": "https://schema.org",
            "@@type": "FAQPage",
            "mainEntity": [
                {
                    "@@type": "Question",
                    "name": "Hoe verloopt het traject van ontwerp tot oplevering?",
                    "acceptedAnswer": {
                        "@@type": "Answer",
                        "text": "We starten met een intake of locatiebezoek, maken een 3D-ontwerp, stellen de juiste apparatuur samen en verzorgen de volledige levering en installatie. Je wordt volledig ontzorgd van A tot Z."
                    }
                },
                {
                    "@@type": "Question",
                    "name": "Kan ik jullie ook inschakelen voor gymrenovatie?",
                    "acceptedAnswer": {
                        "@@type": "Answer",
                        "text": "Absoluut. We helpen regelmatig met het moderniseren of efficienter indelen van bestaande gyms. Denk aan nieuwe indeling, apparatuurvervanging of vloerupgrade."
                    }
                },
                {
                    "@@type": "Question",
                    "name": "Werken jullie ook buiten Nederland?",
                    "acceptedAnswer": {
                        "@@type": "Answer",
                        "text": "Ja. We zijn actief in zowel Nederland als Belgie. Ook internationale projecten zijn bespreekbaar, afhankelijk van omvang en planning."
                    }
                },
                {
                    "@@type": "Question",
                    "name": "Kan ik apparatuur bij jullie leasen of financieren?",
                    "acceptedAnswer": {
                        "@@type": "Answer",
                        "text": "Ja. Wij bieden lease- en financieringsmogelijkheden voor zowel starters als gevestigde ondernemers. Zo realiseer je jouw gym zonder grote investering vooraf."
                    }
                }
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
                        <div class="lg:hidden rounded-3xl overflow-hidden aspect-[16/9]">
                            <img src="{{ asset('assets/foto-assets/MCJO3837-1-1024x683.jpg') }}" alt="Adviesgesprek" class="w-full h-full object-cover">
                        </div>
                        {{-- Desktop videos --}}
                        <div class="flex-shrink-0 relative hidden lg:block">
                            <video src="/shorts/fitnessaannemer-short-1.mp4" class="w-[270px] aspect-[9/16] object-cover rounded-3xl shadow-2xl" muted loop playsinline autoplay></video>
                            <div class="absolute -bottom-6 -left-6 bg-white rounded-3xl shadow-xl p-5">
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
                        <div class="lg:hidden rounded-3xl overflow-hidden aspect-[16/9]">
                            <img src="{{ asset('assets/foto-assets/BluePrint-2024-photos-50-819x1024.jpg') }}" alt="3D Ontwerp" class="w-full h-full object-cover">
                        </div>
                        {{-- Desktop videos --}}
                        <div class="flex-shrink-0 hidden lg:flex items-end gap-5 relative">
                            <video src="/shorts/fitnessaannemer-short-2.mp4" class="w-[210px] aspect-[9/16] object-cover rounded-3xl shadow-2xl" muted loop playsinline autoplay></video>
                            <video src="/shorts/fitnessaannemer-short-3.mp4" class="w-[210px] aspect-[9/16] object-cover rounded-3xl shadow-2xl -mb-12" muted loop playsinline autoplay></video>
                            <div class="absolute -top-4 -right-4 bg-white rounded-3xl shadow-xl p-4 z-10">
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
                        <div class="lg:hidden rounded-3xl overflow-hidden aspect-[16/9]">
                            <img src="{{ asset('assets/foto-assets/BluePrint-2024-photos-47-1024x683.jpg') }}" alt="Levering en installatie" class="w-full h-full object-cover">
                        </div>
                        {{-- Desktop videos --}}
                        <div class="flex-shrink-0 hidden lg:flex items-start gap-5 relative">
                            <video src="/shorts/fitnessaannemer-short-4.mp4" class="w-[210px] aspect-[9/16] object-cover rounded-3xl shadow-2xl -mt-12" muted loop playsinline autoplay></video>
                            <video src="/shorts/fitnessaannemer-short-5.mp4" class="w-[210px] aspect-[9/16] object-cover rounded-3xl shadow-2xl" muted loop playsinline autoplay></video>
                            <div class="absolute bottom-8 -left-8 bg-white rounded-3xl shadow-xl p-5 z-10">
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
                        <div class="lg:hidden rounded-3xl overflow-hidden aspect-[16/9]">
                            <img src="{{ asset('assets/foto-assets/SOCIAL-Farmfit-015-WF104887-1-1-1024x683.jpg') }}" alt="Onderhoud en service" class="w-full h-full object-cover">
                        </div>
                        {{-- Desktop videos --}}
                        <div class="flex-shrink-0 relative hidden lg:block">
                            <video src="/shorts/fitnessaannemer-short-7.mp4" class="w-[270px] aspect-[9/16] object-cover rounded-3xl shadow-2xl" muted loop playsinline autoplay></video>
                            <div class="absolute -top-4 -right-4 bg-white rounded-3xl shadow-xl p-4 z-10">
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

                {{-- Diensten Grid --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    {{-- Inrichting & planning --}}
                    <a href="{{ url('/diensten/inrichting-en-planning') }}" class="dienst-card group bg-white/[0.03] border border-white/[0.06] rounded-2xl overflow-hidden hover:border-primary/30 transition-all duration-300">
                        <div class="aspect-[16/9] relative overflow-hidden">
                            <img src="/assets/1.jpg" alt="Inrichting & planning" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                            <div class="absolute inset-0 bg-gradient-to-t from-secondary via-secondary/70 to-secondary/20"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-6 sm:p-8">
                                <div class="flex items-center gap-3 mb-3">
                                    <span class="inline-block bg-primary/20 text-primary text-[10px] font-semibold px-2.5 py-1 rounded-full border border-primary/30">Ontwerp</span>
                                </div>
                                <h3 class="text-white text-2xl font-bold mb-2">Inrichting & planning</h3>
                                <p class="text-white/70 text-sm leading-relaxed max-w-lg">Slim ontwerp en doordachte planning vormen de basis van elke succesvolle fitnessruimte. Wij vertalen jouw visie naar een functioneel concept.</p>
                                <span class="inline-flex items-center text-primary text-xs font-semibold mt-4">Bekijk dienst <i class="fa-solid fa-arrow-right text-[10px] ml-1.5 group-hover:translate-x-1 transition-transform"></i></span>
                            </div>
                        </div>
                    </a>

                    {{-- Levering & installatie --}}
                    <a href="{{ url('/diensten/levering-en-installatie') }}" class="dienst-card group bg-white/[0.03] border border-white/[0.06] rounded-2xl overflow-hidden hover:border-primary/30 transition-all duration-300">
                        <div class="aspect-[16/9] relative overflow-hidden">
                            <img src="/assets/2.jpg" alt="Levering & installatie" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                            <div class="absolute inset-0 bg-gradient-to-t from-secondary via-secondary/70 to-secondary/20"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-6 sm:p-8">
                                <div class="flex items-center gap-3 mb-3">
                                    <span class="inline-block bg-primary/20 text-primary text-[10px] font-semibold px-2.5 py-1 rounded-full border border-primary/30">Turnkey</span>
                                </div>
                                <h3 class="text-white text-2xl font-bold mb-2">Levering & installatie</h3>
                                <p class="text-white/70 text-sm leading-relaxed max-w-lg">Complete levering en professionele installatie van jouw fitnessruimte. Van transport tot oplevering, alles uit een hand.</p>
                                <span class="inline-flex items-center text-primary text-xs font-semibold mt-4">Bekijk dienst <i class="fa-solid fa-arrow-right text-[10px] ml-1.5 group-hover:translate-x-1 transition-transform"></i></span>
                            </div>
                        </div>
                    </a>

                    {{-- Onderhoud & reparaties --}}
                    <a href="{{ url('/diensten/onderhoud-en-reparaties') }}" class="dienst-card group bg-white/[0.03] border border-white/[0.06] rounded-2xl overflow-hidden hover:border-primary/30 transition-all duration-300">
                        <div class="aspect-[16/9] relative overflow-hidden">
                            <img src="/assets/3.jpg" alt="Onderhoud & reparaties" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                            <div class="absolute inset-0 bg-gradient-to-t from-secondary via-secondary/70 to-secondary/20"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-6 sm:p-8">
                                <div class="flex items-center gap-3 mb-3">
                                    <span class="inline-block bg-primary/20 text-primary text-[10px] font-semibold px-2.5 py-1 rounded-full border border-primary/30">Service</span>
                                </div>
                                <h3 class="text-white text-2xl font-bold mb-2">Onderhoud & reparaties</h3>
                                <p class="text-white/70 text-sm leading-relaxed max-w-lg">Bescherm je investering met professioneel onderhoud en snelle reparaties. Jouw apparatuur altijd in topconditie.</p>
                                <span class="inline-flex items-center text-primary text-xs font-semibold mt-4">Bekijk dienst <i class="fa-solid fa-arrow-right text-[10px] ml-1.5 group-hover:translate-x-1 transition-transform"></i></span>
                            </div>
                        </div>
                    </a>

                    {{-- Leasing & financiering --}}
                    <a href="{{ url('/diensten/leasing-en-financiering') }}" class="dienst-card group bg-white/[0.03] border border-white/[0.06] rounded-2xl overflow-hidden hover:border-primary/30 transition-all duration-300">
                        <div class="aspect-[16/9] relative overflow-hidden">
                            <img src="/assets/4.jpg" alt="Leasing & financiering" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                            <div class="absolute inset-0 bg-gradient-to-t from-secondary via-secondary/70 to-secondary/20"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-6 sm:p-8">
                                <div class="flex items-center gap-3 mb-3">
                                    <span class="inline-block bg-primary/20 text-primary text-[10px] font-semibold px-2.5 py-1 rounded-full border border-primary/30">Financieel</span>
                                </div>
                                <h3 class="text-white text-2xl font-bold mb-2">Leasing & financiering</h3>
                                <p class="text-white/70 text-sm leading-relaxed max-w-lg">Investeer in professionele fitnessapparatuur zonder grote eenmalige uitgave. Flexibele lease- en financieringsopties die passen bij jouw situatie.</p>
                                <span class="inline-flex items-center text-primary text-xs font-semibold mt-4">Bekijk dienst <i class="fa-solid fa-arrow-right text-[10px] ml-1.5 group-hover:translate-x-1 transition-transform"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        {{-- FAQ Section --}}
        <section class="bg-white py-16 lg:py-32" data-header-light>
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <div class="flex flex-col lg:flex-row gap-12 lg:gap-20">
                    {{-- Left: Heading --}}
                    <div class="lg:w-[40%] shrink-0">
                        <span class="text-primary text-xs font-semibold uppercase tracking-widest mb-4 block">Veelgestelde vragen</span>
                        <h2 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.05] mb-4">Alles wat je wilt <span class="text-primary">weten</span></h2>
                        <p class="text-secondary/50 text-sm leading-relaxed max-w-sm">Heb je een vraag die hier niet bij staat? Neem dan gerust contact met ons op voor een vrijblijvend gesprek.</p>
                        <a href="{{ url('/gratis-adviesgesprek') }}" class="inline-flex items-center bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition mt-8">Stel je vraag <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                    </div>

                    {{-- Right: Accordion --}}
                    <div class="lg:w-[60%]">
                        @php
                        $faqs = [
                            [
                                'question' => 'Hoe verloopt het traject van ontwerp tot oplevering?',
                                'answer' => 'We starten met een intake of locatiebezoek, maken een 3D-ontwerp, stellen de juiste apparatuur samen en verzorgen de volledige levering en installatie. Je wordt volledig ontzorgd van A tot Z.',
                            ],
                            [
                                'question' => 'Kan ik jullie ook inschakelen voor gymrenovatie?',
                                'answer' => 'Absoluut. We helpen regelmatig met het moderniseren of efficienter indelen van bestaande gyms. Denk aan nieuwe indeling, apparatuurvervanging of vloerupgrade.',
                            ],
                            [
                                'question' => 'Werken jullie ook buiten Nederland?',
                                'answer' => 'Ja. We zijn actief in zowel Nederland als Belgie. Ook internationale projecten zijn bespreekbaar, afhankelijk van omvang en planning.',
                            ],
                            [
                                'question' => 'Kan ik apparatuur bij jullie leasen of financieren?',
                                'answer' => 'Ja. Wij bieden lease- en financieringsmogelijkheden voor zowel starters als gevestigde ondernemers. Zo realiseer je jouw gym zonder grote investering vooraf.',
                            ],
                        ];
                        @endphp

                        <div class="divide-y divide-secondary/10">
                            @foreach($faqs as $idx => $faq)
                            <details class="faq-item group" {{ $idx === 0 ? 'open' : '' }}>
                                <summary class="flex items-center justify-between gap-4 py-6 cursor-pointer list-none [&::-webkit-details-marker]:hidden">
                                    <h3 class="text-secondary text-base font-semibold group-open:text-primary transition-colors">{{ $faq['question'] }}</h3>
                                    <div class="w-8 h-8 rounded-full border border-secondary/10 group-open:border-primary/30 group-open:bg-primary/5 flex items-center justify-center shrink-0 transition-colors">
                                        <i class="fa-solid fa-plus text-[10px] text-secondary/40 group-open:hidden"></i>
                                        <i class="fa-solid fa-minus text-[10px] text-primary hidden group-open:block"></i>
                                    </div>
                                </summary>
                                <div class="pb-6 pr-12">
                                    <p class="text-secondary/50 text-sm leading-relaxed">{{ $faq['answer'] }}</p>
                                </div>
                            </details>
                            @endforeach
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
            <div class="project-arc-card rounded-3xl" data-arc-index="{{ $i - 1 }}">
                <video src="/shorts/fitnessaannemer-short-{{ $i }}.mp4" class="absolute inset-0 w-full h-full object-cover rounded-3xl" muted loop playsinline></video>
                <div class="project-arc-overlay absolute inset-0 bg-secondary rounded-3xl pointer-events-none"></div>
            </div>
            @endfor
        </div>

        {{-- Reviews Section - Split Editorial --}}
        <section class="reviews-section bg-secondary py-16 lg:py-32 overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                @php
                $reviews = [
                    [
                        'quote' => 'Vanaf het eerste adviesgesprek voelde het professioneel en persoonlijk. Het resultaat is boven verwachting. De samenwerking was soepel en het team dacht proactief mee over elke stap.',
                        'name' => 'Jordi Vermeer',
                        'role' => 'Eigenaar',
                        'company' => 'FarmFit Culemborg',
                        'initials' => 'JV',
                        'image' => '/assets/1.jpg',
                        'project' => 'FarmFit Culemborg',
                        'projectDesc' => 'Volledig ingerichte sportschool met premium apparatuur en custom branding.',
                        'location' => 'Culemborg',
                        'size' => '450 m²',
                    ],
                    [
                        'quote' => 'Fitness Aannemer leverde niet alleen de apparatuur, maar dacht ook mee over de indeling en sfeer. Het eindresultaat overtreft onze verwachtingen. Onze leden zijn direct enthousiast.',
                        'name' => 'Mike Bakker',
                        'role' => 'Eigenaar',
                        'company' => 'Ballin Fit Amsterdam',
                        'initials' => 'MB',
                        'image' => '/assets/2.jpg',
                        'project' => 'Ballin Fit Amsterdam',
                        'projectDesc' => 'Boutique gym met focus op functionele training en groepslessen.',
                        'location' => 'Amsterdam',
                        'size' => '320 m²',
                    ],
                    [
                        'quote' => 'De snelheid en kwaliteit waarmee alles geregeld werd was indrukwekkend. Van ontwerp tot oplevering liep alles vlekkeloos. Leden zijn super enthousiast over de nieuwe ruimte.',
                        'name' => 'Sophie Klein',
                        'role' => 'Manager',
                        'company' => 'Upshape Den Haag',
                        'initials' => 'SK',
                        'image' => '/assets/3.jpg',
                        'project' => 'Upshape Den Haag',
                        'projectDesc' => 'Moderne fitnessruimte met cardio, kracht en een open groepsleszaal.',
                        'location' => 'Den Haag',
                        'size' => '580 m²',
                    ],
                    [
                        'quote' => 'Fitness Aannemer begreep direct wat we nodig hadden en leverde een strak, premium resultaat af. De gym past perfect bij het niveau dat onze gasten verwachten.',
                        'name' => 'Rob Hendriks',
                        'role' => 'Facilitair manager',
                        'company' => 'Van der Valk',
                        'initials' => 'RH',
                        'image' => '/assets/4.jpg',
                        'project' => 'Van der Valk Hotel',
                        'projectDesc' => 'Luxe hotelgym met Technogym apparatuur en premium afwerking.',
                        'location' => 'Utrecht',
                        'size' => '120 m²',
                    ],
                    [
                        'quote' => 'Van rig tot vloer, alles is top. De nazorg is ook uitstekend, ze staan altijd klaar als er iets is. Precies de partner die je nodig hebt voor een CrossFit box.',
                        'name' => 'Dennis de Wit',
                        'role' => 'Eigenaar',
                        'company' => 'Vitality Sports Duiven',
                        'initials' => 'DW',
                        'image' => '/assets/5.jpg',
                        'project' => 'Vitality Sports Duiven',
                        'projectDesc' => 'Complete CrossFit box met custom rig en functionele trainingszone.',
                        'location' => 'Duiven',
                        'size' => '600 m²',
                    ],
                ];
                @endphp

                <div class="review-showcase">
                    <div class="flex flex-col lg:flex-row gap-10 lg:gap-16">
                        {{-- Left: Quote --}}
                        <div class="lg:w-[55%] flex flex-col justify-between">
                            <div class="relative min-h-[280px] sm:min-h-[240px]">
                                @foreach($reviews as $idx => $review)
                                <div class="review-slide absolute inset-0 {{ $idx > 0 ? 'opacity-0' : '' }}">
                                    <svg class="w-10 h-10 text-primary/20 mb-6" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10H14.017zM0 21v-7.391c0-5.704 3.731-9.57 8.983-10.609L9.978 5.151c-2.432.917-3.995 3.638-3.995 5.849h4v10H0z"/></svg>
                                    <p class="text-white text-lg sm:text-xl lg:text-2xl font-medium leading-relaxed mb-8">{{ $review['quote'] }}</p>
                                    <div class="flex items-center gap-4">
                                        <div class="w-12 h-12 rounded-full bg-primary/15 border border-primary/25 flex items-center justify-center">
                                            <span class="text-primary text-sm font-bold">{{ $review['initials'] }}</span>
                                        </div>
                                        <div>
                                            <p class="text-white text-sm font-semibold">{{ $review['name'] }}</p>
                                            <p class="text-white/40 text-xs">{{ $review['role'] }}, {{ $review['company'] }}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                            {{-- Progress bars + nav --}}
                            <div class="flex items-center justify-between mt-10 lg:mt-16">
                                <div class="flex items-center gap-2">
                                    @foreach($reviews as $idx => $review)
                                    <button class="review-progress-bar w-10 h-1 rounded-full bg-white/10 relative overflow-hidden cursor-pointer" data-review="{{ $idx }}">
                                        <div class="review-progress-fill absolute inset-0 bg-primary rounded-full origin-left {{ $idx > 0 ? 'scale-x-0' : '' }}"></div>
                                    </button>
                                    @endforeach
                                </div>
                                <div class="flex items-center gap-2">
                                    <button class="review-prev w-10 h-10 rounded-full border border-white/10 flex items-center justify-center text-white/50 hover:border-primary/50 hover:text-primary transition-colors">
                                        <i class="fa-solid fa-arrow-left text-xs"></i>
                                    </button>
                                    <button class="review-next w-10 h-10 rounded-full border border-white/10 flex items-center justify-center text-white/50 hover:border-primary/50 hover:text-primary transition-colors">
                                        <i class="fa-solid fa-arrow-right text-xs"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        {{-- Right: Project image card --}}
                        <div class="lg:w-[45%]">
                            <div class="relative rounded-2xl overflow-hidden aspect-square">
                                @foreach($reviews as $idx => $review)
                                <div class="review-card-img absolute inset-0 {{ $idx > 0 ? 'opacity-0' : '' }}">
                                    <img src="{{ $review['image'] }}" alt="{{ $review['project'] }}" class="w-full h-full object-cover" loading="lazy">
                                    <div class="absolute inset-0 bg-gradient-to-t from-secondary via-secondary/40 to-transparent"></div>
                                    <div class="absolute bottom-0 left-0 right-0 p-6 sm:p-8">
                                        <h3 class="text-white text-xl font-bold mb-2">{{ $review['project'] }}</h3>
                                        <p class="text-white/60 text-sm leading-relaxed mb-4">{{ $review['projectDesc'] }}</p>
                                        <div class="flex items-center gap-4">
                                            <span class="text-white/50 text-xs font-medium"><i class="fa-solid fa-location-dot mr-1.5 text-primary/70"></i>{{ $review['location'] }}</span>
                                            <span class="text-white/50 text-xs font-medium"><i class="fa-solid fa-ruler-combined mr-1.5 text-primary/70"></i>{{ $review['size'] }}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('partials.footer')
        @include('partials.cookie-consent')
    </body>
</html>
