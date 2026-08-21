<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Sportschool ontwerpen, bouwen en inrichten | Fitness Aannemer</title>

        {{-- SEO Meta --}}
        <meta name="description" content="Sportschool laten ontwerpen, bouwen en inrichten? Wij regelen het complete traject. 60+ projecten, dealer van 18 merken, eigen montageteam. Plan een gratis adviesgesprek.">
        <meta name="keywords" content="fitnessapparatuur, gym inrichting, fitnessruimte ontwerp, krachtapparatuur, cardioapparatuur, fitness aannemer, gym op maat, bedrijfsfitness, PT studio inrichting, fitnessapparatuur leasen">
        <meta name="author" content="Fitness Aannemer">
        <meta name="robots" content="index, follow">
        <link rel="canonical" href="{{ url('/') }}">
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

        {{-- Open Graph / Facebook --}}
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url('/') }}">
        <meta property="og:title" content="Sportschool ontwerpen, bouwen & inrichten | Fitness Aannemer">
        <meta property="og:description" content="Sportschool laten ontwerpen, bouwen en inrichten? Wij regelen het complete traject. 60+ projecten, dealer van 18 merken, eigen montageteam.">
        <meta property="og:locale" content="nl_NL">
        <meta property="og:site_name" content="Fitness Aannemer">
        {{-- <meta property="og:image" content="{{ asset('images/og-image.jpg') }}"> --}}

        {{-- Twitter --}}
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Sportschool ontwerpen, bouwen & inrichten | Fitness Aannemer">
        <meta name="twitter:description" content="Sportschool laten ontwerpen, bouwen en inrichten? Wij regelen het complete traject. 60+ projecten, dealer van 18 merken, eigen montageteam.">
        {{-- <meta name="twitter:image" content="{{ asset('images/og-image.jpg') }}"> --}}

        {{-- Structured Data --}}
        <script type="application/ld+json">
        {
            "@@context": "https://schema.org",
            "@@type": "Organization",
            "name": "Fitness Aannemer",
            "url": "{{ url('/') }}",
            "logo": "{{ asset('fitnessaannemer-logo-fa-blauw.png') }}",
            "description": "Fitness Aannemer is de onafhankelijke specialist in het ontwerpen en inrichten van sportscholen in de Benelux. Van ontwerp tot oplevering, alles onder een dak.",
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
                "https://www.instagram.com/fitnessaannemer.nl/",
                "https://www.tiktok.com/@fitnessaannemer",
                "https://www.youtube.com/@FitnessAannemer",
                "https://www.facebook.com/profile.php?id=61557754181423",
                "https://pin.it/7jMdHylyE"
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
                        "text": "We starten met een vrijblijvend adviesgesprek of locatiebezoek. Daarna maken we een 3D-ontwerp, stellen de juiste apparatuur samen en verzorgen de volledige levering, plaatsing en oplevering. Een aanspreekpunt voor het hele traject."
                    }
                },
                {
                    "@@type": "Question",
                    "name": "Zijn jullie gebonden aan een specifiek merk?",
                    "acceptedAnswer": {
                        "@@type": "Answer",
                        "text": "Nee. Wij zijn bewust onafhankelijk en zitten niet vast aan een leverancier of merk. We adviseren wat past bij jouw doelgroep, budget en verdienmodel."
                    }
                },
                {
                    "@@type": "Question",
                    "name": "Werken jullie ook buiten Nederland?",
                    "acceptedAnswer": {
                        "@@type": "Answer",
                        "text": "Ja. We zijn actief in de hele Benelux. Ook internationale projecten zijn bespreekbaar, afhankelijk van omvang en planning."
                    }
                },
                {
                    "@@type": "Question",
                    "name": "Kan ik apparatuur bij jullie leasen of financieren?",
                    "acceptedAnswer": {
                        "@@type": "Answer",
                        "text": "Ja. Een deel van het interieur kan bij ons geleased worden. Flexibele looptijden, persoonlijk advies en een eigen inbreng van 15 a 20%. Voor bestaande zaken met positieve jaarcijfers is dit in 90% van de gevallen geen probleem."
                    }
                },
                {
                    "@@type": "Question",
                    "name": "Doen jullie ook het bouwkundige werk?",
                    "acceptedAnswer": {
                        "@@type": "Answer",
                        "text": "Nee. Bouwkundig werk loopt via onze vaste partneraannemers. Wij houden de regie op ontwerp, inrichting en oplevering."
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
        {{-- Loading Screen --}}
        <div id="loading-screen" class="fixed inset-0 bg-secondary z-[100] flex items-center justify-center transition-opacity duration-500">
            <div class="text-center">
                <img src="{{ asset('fitnessaannemer-logo-fa-blauw.png') }}" alt="Fitness Aannemer" class="h-10 mx-auto mb-6 animate-pulse">
            </div>
        </div>

        @include('partials.header')

        {{-- Scroll Video Hero --}}
        <section id="hero-scroll" class="hero-scroll-wrapper">
            <div id="hero-pinned" class="hero-pinned">
                <video id="hero-video" src="{{ asset('assets/video_hero_home_scrub.mp4') }}" muted playsinline preload="none" class="hero-video hidden lg:block"></video>
                <img id="hero-poster" src="{{ asset('assets/foto-assets/MCJO3851_FA-1-1024x683.jpg') }}" alt="Fitness Aannemer" class="hero-video lg:hidden">
                <div class="hero-video-overlay"></div>
                <div class="hero-content max-w-7xl mx-auto px-4 sm:px-6 flex flex-col items-center justify-center h-full relative z-10">
                    <h1 id="hero-heading" class="text-white text-3xl sm:text-5xl lg:text-6xl font-bold text-center leading-[1]"></h1>
                    <p class="hero-fade text-sm text-white opacity-80 font-medium text-center my-6 sm:my-8 px-2">Onafhankelijk ontwerp, complete inrichting en oplevering<br class="hidden sm:block"> onder een dak. Turn key, dat is waar wij het verschil maken.</p>
                    <div class="hero-fade flex flex-col sm:flex-row items-center gap-3 sm:gap-4">
                        <a href="{{ url('/vrijblijvend-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Vrijblijvend adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                        <a href="{{ url('/projecten') }}" class="bg-white/10 border border-white/20 rounded-full px-6 py-3.5 text-white text-xs font-semibold hover:bg-white/20 transition">Bekijk onze projecten</a>
                    </div>
                </div>
            </div>
        </section>

        <div class="bg-primary w-full py-4 overflow-hidden">
            <div class="marquee flex items-center gap-12 whitespace-nowrap">
                <span class="text-white text-xs font-semibold uppercase tracking-wider">Vrijblijvend adviesgesprek</span>
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
                <span class="text-white text-xs font-semibold uppercase tracking-wider">Vrijblijvend adviesgesprek</span>
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
                    <h2 class="social-fade text-white text-3xl lg:text-5xl font-bold leading-[1]">Bekend van onder andere<br><span class="text-primary">TikTok & Instagram</span></h2>
                    <p class="social-fade lg:max-w-[400px] lg:text-right text-xs text-white opacity-80">Gemiddeld 1.000.000 weergaven per maand. Volg ons en bekijk hoe wij fitnessruimtes van ontwerp tot oplevering transformeren. Bereik dat we ook direct als marketing inzetten voor onze klanten.</p>
                </div>
                <div class="video-track" id="video-track">
                    @php
                    $socialVideos = [
                        'shorts/social-1.mp4',
                        'shorts/social-2.mp4',
                        'shorts/social-3.mp4',
                        'shorts/social-4.mp4',
                        'shorts/social-5.mp4',
                        'shorts/social-6.mp4',
                        'shorts/fitnessaannemer-short-1.mp4',
                        'shorts/fitnessaannemer-short-2.mp4',
                        'shorts/fitnessaannemer-short-3.mp4',
                    ];
                    @endphp
                    @foreach ($socialVideos as $idx => $video)
                    <div class="video-card rounded-3xl relative shadow-2xl" data-index="{{ $idx }}">
                        <video data-src="{{ asset($video) }}" preload="none" class="lazy-video absolute z-1 object-cover w-full h-full" muted loop playsinline></video>
                        <div class="video-overlay bg-secondary absolute z-2"></div>
                    </div>
                    @endforeach
                </div>
                <div class="social-fade flex flex-wrap items-center justify-center gap-3 sm:gap-4 mt-8 lg:mt-12">
                    <a href="{{ url('/vrijblijvend-adviesgesprek') }}" class="bg-primary rounded-full px-6 py-3 text-white text-xs font-semibold hover:bg-primary/80 transition-colors">Vrijblijvend adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-1"></i></a>
                    <a href="https://www.instagram.com/fitnessaannemer.nl/" target="_blank" rel="noopener" class="w-10 h-10 rounded-full bg-primary flex items-center justify-center text-white text-lg hover:bg-primary/80 transition-colors">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="https://www.tiktok.com/@fitnessaannemer" target="_blank" rel="noopener" class="w-10 h-10 rounded-full bg-primary flex items-center justify-center text-white text-lg hover:bg-primary/80 transition-colors">
                        <i class="fa-brands fa-tiktok"></i>
                    </a>
                    <a href="https://www.youtube.com/@FitnessAannemer" target="_blank" rel="noopener" class="w-10 h-10 rounded-full bg-primary flex items-center justify-center text-white text-lg hover:bg-primary/80 transition-colors">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                    <a href="https://www.facebook.com/profile.php?id=61557754181423" target="_blank" rel="noopener" class="w-10 h-10 rounded-full bg-primary flex items-center justify-center text-white text-lg hover:bg-primary/80 transition-colors">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="https://pin.it/7jMdHylyE" target="_blank" rel="noopener" class="w-10 h-10 rounded-full bg-primary flex items-center justify-center text-white text-lg hover:bg-primary/80 transition-colors">
                        <i class="fa-brands fa-pinterest-p"></i>
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
                            <div class="rounded-3xl aspect-[9/16] max-h-[420px] overflow-hidden relative">
                                <video data-src="{{ asset('assets/10_AI-Transitions_v1.mp4') }}" preload="none" class="lazy-video w-full h-full object-cover" muted loop playsinline></video>
                            </div>
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
                            <video data-src="{{ asset('assets/hww-stap1.mp4') }}" preload="none" class="lazy-video w-[270px] aspect-[9/16] object-cover rounded-3xl shadow-2xl" muted loop playsinline></video>
                            <div class="absolute -bottom-6 -left-6 bg-white rounded-3xl shadow-xl p-5">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
                                        <i class="fa-solid fa-calendar-check text-primary text-sm"></i>
                                    </div>
                                    <div>
                                        <p class="text-secondary text-xs font-semibold">Binnen 24 uur</p>
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
                            <video data-src="{{ asset('assets/hww-stap2a.mp4') }}" preload="none" class="lazy-video w-[210px] aspect-[9/16] object-cover rounded-3xl shadow-2xl" muted loop playsinline></video>
                            <video data-src="{{ asset('assets/hww-stap2b.mp4') }}" preload="none" class="lazy-video w-[210px] aspect-[9/16] object-cover rounded-3xl shadow-2xl -mb-12" muted loop playsinline></video>
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
                            <h3 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.1] mb-4 lg:mb-6">Interior design<br>& visualisatie</h3>
                            <p class="text-secondary/50 text-sm leading-relaxed max-w-md mb-4">Hier maken wij het verschil. Op basis van het adviesgesprek ontwerpen we een complete indeling: plattegrond, 3D-visualisatie en apparatuurkeuze. Je ziet precies hoe jouw ruimte eruit komt te zien voordat er iets wordt geplaatst.</p>
                            <p class="text-secondary/50 text-sm leading-relaxed max-w-md mb-4">Elke machine, elk rek, elke loopband wordt ingetekend op de juiste plek. We houden rekening met looplijnen, veiligheidsafstanden en de optimale gebruikerservaring.</p>
                            <p class="text-secondary/50 text-sm leading-relaxed max-w-md mb-8">We denken ook commercieel mee: een gym moet niet alleen mooi zijn, maar ook werken als verdienmodel. Dat is het verschil tussen een interieurbureau en een specialist die de fitnessbranche kent.</p>
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
                            <h3 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.1] mb-4 lg:mb-6">Realisatie<br>& <span class="text-primary">installatie</span></h3>
                            <p class="text-secondary/50 text-sm leading-relaxed max-w-md mb-6">Zodra het ontwerp is goedgekeurd, regelen wij de volledige levering en plaatsing van de inrichting en apparatuur. Alles wordt geinstalleerd volgens het ontwerp en afgesteld voor gebruik.</p>
                            <p class="text-secondary/50 text-sm leading-relaxed max-w-md mb-8">Een aanspreekpunt, een planning, een opleverdatum. Bouwkundig werk loopt via onze vaste partneraannemers. Wij houden de regie op inrichting en oplevering.</p>
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
                            <video data-src="{{ asset('shorts/fitnessaannemer-short-realisatie-1.mp4') }}" preload="none" class="lazy-video w-[210px] aspect-[9/16] object-cover rounded-3xl shadow-2xl -mt-12" muted loop playsinline></video>
                            <video data-src="{{ asset('shorts/fitnessaannemer-short-realisatie-2.mp4') }}" preload="none" class="lazy-video w-[210px] aspect-[9/16] object-cover rounded-3xl shadow-2xl" muted loop playsinline></video>
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

                {{-- Panel 5: Schoonmaak & sleuteloverdracht (1 video) --}}
                <div class="horizontal-panel relative">
                    <span class="absolute -bottom-8 -left-6 text-[350px] font-black text-secondary/[0.03] leading-none select-none pointer-events-none hidden lg:block">04</span>
                    <div class="max-w-7xl w-full mx-auto px-4 sm:px-6 flex flex-col lg:flex-row items-center h-full relative gap-8 lg:gap-16">
                        <div class="flex-1 pt-8 lg:pt-12">
                            <div class="flex items-center gap-3 mb-4 lg:mb-6">
                                <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center">
                                    <span class="text-white text-xs font-bold">04</span>
                                </div>
                                <div class="h-[1px] w-16 bg-primary/30"></div>
                                <span class="text-primary text-xs font-semibold uppercase tracking-widest">Oplevering</span>
                            </div>
                            <h3 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.1] mb-4 lg:mb-6">Schoonmaak &<br><span class="text-primary">sleuteloverdracht</span></h3>
                            <p class="text-secondary/50 text-sm leading-relaxed max-w-md mb-6">Na de installatie leveren we geen bouwplaats op, maar een club die klaar is voor je eerste leden. Ons schoonmaakteam maakt de volledige ruimte grondig schoon, van vloer tot apparatuur.</p>
                            <p class="text-secondary/50 text-sm leading-relaxed max-w-md mb-8">Daarna lopen we samen elk punt van het ontwerp na tijdens de oplevering. Klopt alles? Dan krijg jij de sleutel en kan de opening gepland worden.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-secondary/5 text-secondary/60 text-[11px] font-medium px-3 py-1.5 rounded-full">Professionele schoonmaak</span>
                                <span class="bg-secondary/5 text-secondary/60 text-[11px] font-medium px-3 py-1.5 rounded-full">Oplevering op locatie</span>
                                <span class="bg-secondary/5 text-secondary/60 text-[11px] font-medium px-3 py-1.5 rounded-full">Sleuteloverdracht</span>
                                <span class="bg-secondary/5 text-secondary/60 text-[11px] font-medium px-3 py-1.5 rounded-full">Direct klaar voor opening</span>
                            </div>
                            <div class="flex items-center gap-3 mt-8">
                                <a href="{{ url('/vrijblijvend-adviesgesprek') }}" class="bg-primary rounded-full px-6 py-3 text-white text-xs font-semibold hover:bg-primary/80 transition-colors">Vrijblijvend adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-1.5"></i></a>
                                <a href="{{ url('/projecten') }}" class="border border-secondary/15 rounded-full px-6 py-3 text-secondary/60 text-xs font-semibold hover:border-primary/30 hover:text-primary transition-colors">Bekijk projecten</a>
                            </div>
                        </div>
                        {{-- Mobile image --}}
                        <div class="lg:hidden rounded-3xl overflow-hidden aspect-[9/16] max-h-[400px]">
                            <video data-src="{{ asset('shorts/fitnessaannemer-short-schoonmaak.mp4') }}" preload="none" class="lazy-video w-full h-full object-cover" muted loop playsinline></video>
                        </div>
                        {{-- Desktop video --}}
                        <div class="flex-shrink-0 hidden lg:flex items-start gap-5 relative">
                            <video data-src="{{ asset('shorts/fitnessaannemer-short-schoonmaak.mp4') }}" preload="none" class="lazy-video w-[270px] aspect-[9/16] object-cover rounded-3xl shadow-2xl" muted loop playsinline></video>
                            <div class="absolute -bottom-4 -left-4 bg-white rounded-3xl shadow-xl p-5 z-10">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
                                        <i class="fa-solid fa-key text-primary text-sm"></i>
                                    </div>
                                    <div>
                                        <p class="text-secondary text-xs font-semibold">Sleuteloverdracht</p>
                                        <p class="text-secondary/40 text-[11px]">Klaar voor opening</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Panel 5: Nazorg (1 video) --}}
                <div class="horizontal-panel relative">
                    <span class="absolute -top-8 left-12 text-[350px] font-black text-secondary/[0.03] leading-none select-none pointer-events-none hidden lg:block">05</span>
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
                            <video data-src="{{ asset('shorts/fitnessaannemer-short-nazorg.mp4') }}" preload="none" class="lazy-video w-[270px] aspect-[9/16] object-cover rounded-3xl shadow-2xl" muted loop playsinline></video>
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
                                    <span class="text-white text-xs font-bold">05</span>
                                </div>
                                <div class="h-[1px] w-16 bg-primary/30"></div>
                                <span class="text-primary text-xs font-semibold uppercase tracking-widest">Nazorg</span>
                            </div>
                            <h3 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.1] mb-4 lg:mb-6">Onderhoud<br>& service</h3>
                            <p class="text-secondary/50 text-sm leading-relaxed max-w-md mb-6">Na de opening laten we je niet in de steek. Met onderhoudscontracten, garantieservice en technische ondersteuning houden we jouw club draaiend. Gaat er iets stuk? Dan staan we snel voor je klaar, elke dag dat een machine stilstaat, kost je leden.</p>
                            <p class="text-secondary/50 text-sm leading-relaxed max-w-md mb-8">Wil je later uitbreiden of apparatuur vervangen? We denken mee en zorgen dat jouw club met je meegroeit.</p>
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
                <p class="brands-fade text-primary text-xs font-semibold uppercase tracking-widest mb-5">Merk-onafhankelijk</p>
                <h2 class="brands-fade text-white text-3xl sm:text-5xl md:text-6xl font-bold leading-[1.05] mb-6">Niet gebonden aan<br><span class="text-primary">een merk</span></h2>
                <p class="brands-fade text-white/35 text-sm leading-relaxed max-w-lg mx-auto">Wij zijn officieel dealer van maar liefst 18 merken en zitten dus niet vast aan een. Daardoor adviseren we wat echt past bij jouw doelgroep, budget en verdienmodel. Zonder voorkeur, zonder verplichtingen. Van Matrix tot Eleiko, van cardio tot strength: wij stellen de mix samen die voor jouw club het beste rendeert.</p>
            </div>

            @php
            $marqueeRow1 = [
                ['src' => 'assets/wp-uploads/MATRIX-LOGO.png', 'alt' => 'Matrix', 's' => 1.3],
                ['src' => 'assets/brand-logos/Logo_Egym.png', 'alt' => 'EGYM', 's' => 0.55],
                ['src' => 'assets/brand-logos/Logo_ZIVA.png', 'alt' => 'ZIVA', 's' => 2],
                ['src' => 'assets/brand-logos/Vision_Fitness_Logo.jpg', 'alt' => 'Vision', 's' => 1.15],
                ['src' => 'assets/brand-logos/Logo_YourReformer.png', 'alt' => 'YourReformer', 's' => 1],
                ['src' => 'assets/wp-uploads/Life-Fitness.png', 'alt' => 'Life Fitness', 's' => 1],
                ['src' => 'assets/brand-logos/Eleiko_Logo_2021_RGB-scaled.png', 'alt' => 'Eleiko', 's' => 1.35],
                ['src' => 'assets/brand-logos/logo-hammer-strength.png', 'alt' => 'Hammer Strength', 's' => 2],
                ['src' => 'assets/wp-uploads/Concept2-1.png', 'alt' => 'Concept2', 's' => 1.2],
            ];
            $marqueeRow2 = [
                ['src' => 'assets/brand-logos/Logo_Watson.png', 'alt' => 'Watson', 's' => 2],
                ['src' => 'assets/wp-uploads/LOGO_WEIss-1024x462-1.png', 'alt' => 'Gym80', 's' => 1.2],
                ['src' => 'assets/brand-logos/NikeStrength_Black_Logo_600px.png', 'alt' => 'Nike Strength', 's' => 1.1],
                ['src' => 'assets/brand-logos/Logo_Lifemaxx.webp', 'alt' => 'LifeMaxx', 's' => 2.8],
                ['src' => 'assets/brand-logos/Logo_TKO.webp', 'alt' => 'TKO', 's' => 1],
                ['src' => 'assets/brand-logos/assault_fitness_logo.webp', 'alt' => 'Assault Fitness', 's' => 1],
                ['src' => 'assets/brand-logos/Logo_Sprinttracks.png', 'alt' => 'Sprinttracks', 's' => 2.8],
                ['src' => 'assets/brand-logos/Logo_Inbody.png', 'alt' => 'InBody', 's' => 1.15],
            ];
            @endphp

            {{-- Brand marquee row 1 (left-to-right) --}}
            <div class="brands-marquee-wrap mb-4 relative z-10">
                <div class="brands-marquee">
                    @for ($i = 0; $i < 3; $i++)
                    @foreach ($marqueeRow1 as $brand)
                    <span class="brand-pill"><img src="{{ asset($brand['src']) }}" alt="{{ $brand['alt'] }}" class="brand-logo" style="--logo-scale: {{ $brand['s'] }}"></span>
                    @endforeach
                    @endfor
                </div>
            </div>

            {{-- Brand marquee row 2 (right-to-left) --}}
            <div class="brands-marquee-wrap mb-20 relative z-10">
                <div class="brands-marquee brands-marquee--reverse">
                    @for ($i = 0; $i < 3; $i++)
                    @foreach ($marqueeRow2 as $brand)
                    <span class="brand-pill"><img src="{{ asset($brand['src']) }}" alt="{{ $brand['alt'] }}" class="brand-logo" style="--logo-scale: {{ $brand['s'] }}"></span>
                    @endforeach
                    @endfor
                </div>
            </div>

            {{-- CTAs --}}
            <div class="flex flex-col sm:flex-row items-center justify-center gap-3 sm:gap-4 pb-16 lg:pb-32 relative z-10 brands-fade">
                <a href="{{ url('/onze-merken') }}" class="bg-primary rounded-full px-6 py-3.5 text-white text-xs font-semibold hover:bg-primary/80 transition-colors">Bekijk alle merken <i class="fa-solid fa-arrow-right text-xs ml-1.5"></i></a>
                <a href="{{ url('/projecten') }}" class="bg-white/10 border border-white/20 rounded-full px-6 py-3.5 text-white text-xs font-semibold hover:bg-white/20 transition-colors">Bekijk onze projecten</a>
            </div>
        </section>

        {{-- Alles voor een complete club --}}
        <section class="complete-club-section bg-white py-16 lg:py-32 relative" data-header-light>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
                <div class="text-center mb-10 lg:mb-16">
                    <p class="club-fade text-primary text-xs font-semibold uppercase tracking-widest mb-5">Totaaloplossing</p>
                    <h2 class="club-fade text-secondary text-3xl sm:text-5xl md:text-6xl font-bold leading-[1.05] mb-6">Alles voor een<br><span class="text-primary">complete club</span></h2>
                    <p class="club-fade text-secondary/50 text-sm leading-relaxed max-w-lg mx-auto">Van apparatuur tot de kluisjes in de kleedkamer. Wij leveren alles wat jouw club nodig heeft, uit een hand.</p>
                </div>

                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4 lg:gap-6">
                    @php
                    $categories = [
                        ['name' => 'Apparatuur', 'desc' => 'Cardio, kracht en functioneel van 18 merken', 'image' => 'apparatuur.jpg', 'icon' => 'fa-dumbbell'],
                        ['name' => 'Vloeren', 'desc' => 'PVC, laminaat en sportvloeren zoals rubberen tegels en Sprinttracks', 'image' => 'vloeren.jpg', 'icon' => 'fa-border-all'],
                        ['name' => 'Verlichting', 'desc' => 'Alle soorten, van sfeer tot functioneel', 'image' => 'verlichting.jpg', 'icon' => 'fa-lightbulb'],
                        ['name' => 'Audio', 'desc' => 'Voor iedere ruimte', 'image' => 'audio.jpg', 'icon' => 'fa-volume-high'],
                        ['name' => 'Spiegels', 'desc' => 'Op maat voor elke wand', 'image' => 'spiegels.jpg', 'icon' => 'fa-clone'],
                        ['name' => 'Kluisjes', 'desc' => 'Voor kleedkamer en entree', 'image' => 'kluisjes.jpg', 'icon' => 'fa-lock'],
                        ['name' => 'Meubels', 'desc' => 'Van receptie tot loungehoek', 'image' => 'meubels.jpg', 'icon' => 'fa-couch'],
                    ];
                    @endphp

                    @foreach($categories as $cat)
                    <div class="club-fade group relative rounded-2xl overflow-hidden aspect-[3/4] cursor-default">
                        @if($cat['image'])
                        <img src="{{ asset('assets/categories/' . $cat['image']) }}" alt="{{ $cat['name'] }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                        @else
                        <div class="absolute inset-0 bg-secondary/10"></div>
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-secondary via-secondary/50 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-4 sm:p-5">
                            <div class="w-8 h-8 rounded-full bg-primary/20 flex items-center justify-center mb-2">
                                <i class="fa-solid {{ $cat['icon'] }} text-primary text-xs"></i>
                            </div>
                            <h3 class="text-white text-sm sm:text-base font-bold mb-1">{{ $cat['name'] }}</h3>
                            <p class="text-white/60 text-[11px] sm:text-xs leading-relaxed">{{ $cat['desc'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-3 sm:gap-4 mt-10 lg:mt-16 club-fade">
                    <a href="{{ url('/vrijblijvend-adviesgesprek') }}" class="bg-primary rounded-full px-6 py-3.5 text-white text-xs font-semibold hover:bg-primary/80 transition-colors">Vrijblijvend adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-1.5"></i></a>
                    <a href="{{ url('/onze-merken') }}" class="border border-secondary/15 rounded-full px-6 py-3.5 text-secondary/60 text-xs font-semibold hover:border-primary/30 hover:text-primary transition-colors">Bekijk alle merken</a>
                </div>
            </div>
        </section>

        {{-- Diensten Section - Bento Grid --}}
        <section class="diensten-section bg-white py-24 lg:py-32 relative" data-header-light>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
                {{-- Header --}}
                <div class="flex flex-col lg:flex-row lg:items-end gap-4 lg:gap-0 justify-between mb-8 lg:mb-16">
                    <h2 class="diensten-fade text-secondary text-3xl lg:text-5xl font-bold leading-[1]">Wat wij voor jou<br><span class="text-primary">kunnen betekenen</span></h2>
                    <p class="diensten-fade lg:max-w-[400px] lg:text-right text-xs text-secondary/50">Van sportschool tot hotelgym, van PT-studio tot bedrijfsfitness. Wij ontzorgen het complete traject, van ontwerp en bouw tot inrichting en oplevering.</p>
                </div>

                {{-- Diensten Grid --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    {{-- Interieurontwerp --}}
                    <a href="{{ url('/diensten/inrichting-en-planning') }}" class="dienst-card group bg-white/[0.03] border border-white/[0.06] rounded-2xl overflow-hidden hover:border-primary/30 transition-all duration-300">
                        <div class="aspect-[16/9] relative overflow-hidden">
                            <img src="{{ asset('assets/dienst-interieur.jpg') }}" alt="Interieurontwerp" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                            <div class="absolute inset-0 bg-gradient-to-t from-secondary via-secondary/70 to-secondary/20"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-6 sm:p-8">
                                <div class="flex items-center gap-3 mb-3">
                                    <span class="inline-block bg-primary/20 text-primary text-[10px] font-semibold px-2.5 py-1 rounded-full border border-primary/30">Ontwerp</span>
                                </div>
                                <h3 class="text-white text-2xl font-bold mb-2">Interieurontwerp</h3>
                                <p class="text-white/70 text-sm leading-relaxed max-w-lg">Interieurontwerp is onze kracht. Wij vertalen jouw visie naar een ontwerp dat er niet alleen goed uitziet, maar ook rendeert: slimme looplijnen, elke m² benut en een indeling die leden bindt.</p>
                                <span class="inline-flex items-center text-primary text-xs font-semibold mt-4">Bekijk dienst <i class="fa-solid fa-arrow-right text-[10px] ml-1.5 group-hover:translate-x-1 transition-transform"></i></span>
                            </div>
                        </div>
                    </a>

                    {{-- Bouw, levering & installatie --}}
                    <a href="{{ url('/diensten/levering-en-installatie') }}" class="dienst-card group bg-white/[0.03] border border-white/[0.06] rounded-2xl overflow-hidden hover:border-primary/30 transition-all duration-300">
                        <div class="aspect-[16/9] relative overflow-hidden">
                            <img src="{{ asset('assets/dienst-bouw.jpg') }}" alt="Bouw, levering & installatie" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                            <div class="absolute inset-0 bg-gradient-to-t from-secondary via-secondary/70 to-secondary/20"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-6 sm:p-8">
                                <div class="flex items-center gap-3 mb-3">
                                    <span class="inline-block bg-primary/20 text-primary text-[10px] font-semibold px-2.5 py-1 rounded-full border border-primary/30">Turnkey</span>
                                </div>
                                <h3 class="text-white text-2xl font-bold mb-2">Bouw, levering & installatie</h3>
                                <p class="text-white/70 text-sm leading-relaxed max-w-lg">Totaal projectmanagement over de bouw: onze vaste partneraannemers bouwen, wij voeren de regie. Daarna verzorgt ons montageteam de complete levering en installatie. Alles uit een hand, met een opleverdatum.</p>
                                <span class="inline-flex items-center text-primary text-xs font-semibold mt-4">Bekijk dienst <i class="fa-solid fa-arrow-right text-[10px] ml-1.5 group-hover:translate-x-1 transition-transform"></i></span>
                            </div>
                        </div>
                    </a>

                    {{-- Fitnessapparatuur --}}
                    <a href="{{ url('/diensten/onderhoud-en-reparaties') }}" class="dienst-card group bg-white/[0.03] border border-white/[0.06] rounded-2xl overflow-hidden hover:border-primary/30 transition-all duration-300">
                        <div class="aspect-[16/9] relative overflow-hidden">
                            <img src="{{ asset('assets/3.jpg') }}" alt="Fitnessapparatuur" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                            <div class="absolute inset-0 bg-gradient-to-t from-secondary via-secondary/70 to-secondary/20"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-6 sm:p-8">
                                <div class="flex items-center gap-3 mb-3">
                                    <span class="inline-block bg-primary/20 text-primary text-[10px] font-semibold px-2.5 py-1 rounded-full border border-primary/30">Apparatuur</span>
                                </div>
                                <h3 class="text-white text-2xl font-bold mb-2">Fitnessapparatuur</h3>
                                <p class="text-white/70 text-sm leading-relaxed max-w-lg">Merk-onafhankelijk advies over cardio-, kracht- en functionele apparatuur. Van Matrix tot Eleiko, wij stellen de mix samen die past bij jouw doelgroep, budget en verdienmodel.</p>
                                <span class="inline-flex items-center text-primary text-xs font-semibold mt-4">Bekijk dienst <i class="fa-solid fa-arrow-right text-[10px] ml-1.5 group-hover:translate-x-1 transition-transform"></i></span>
                            </div>
                        </div>
                    </a>

                    {{-- Leasing & financiering --}}
                    <a href="{{ url('/diensten/leasing-en-financiering') }}" class="dienst-card group bg-white/[0.03] border border-white/[0.06] rounded-2xl overflow-hidden hover:border-primary/30 transition-all duration-300">
                        <div class="aspect-[16/9] relative overflow-hidden">
                            <img src="{{ asset('assets/dienst-leasing.jpg') }}" alt="Leasing & financiering" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                            <div class="absolute inset-0 bg-gradient-to-t from-secondary via-secondary/70 to-secondary/20"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-6 sm:p-8">
                                <div class="flex items-center gap-3 mb-3">
                                    <span class="inline-block bg-primary/20 text-primary text-[10px] font-semibold px-2.5 py-1 rounded-full border border-primary/30">Financieel</span>
                                </div>
                                <h3 class="text-white text-2xl font-bold mb-2">Leasing & financiering</h3>
                                <p class="text-white/70 text-sm leading-relaxed max-w-lg">Een complete club zonder grote eenmalige investering. Bij ons lease je niet alleen de apparatuur, maar ook het interieur: van vloeren tot verlichting. Flexibele opties, afgestemd op jouw businessplan en cashflow.</p>
                                <span class="inline-flex items-center text-primary text-xs font-semibold mt-4">Bekijk dienst <i class="fa-solid fa-arrow-right text-[10px] ml-1.5 group-hover:translate-x-1 transition-transform"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        {{-- Lease CTA Banner --}}
        <section class="bg-secondary py-16 lg:py-32 relative overflow-hidden">
            <div class="absolute inset-0">
                <img src="{{ asset('assets/lease-bg.jpg') }}" alt="" class="w-full h-full object-cover opacity-30">
                <div class="absolute inset-0 bg-gradient-to-r from-secondary via-secondary/90 to-secondary/60"></div>
            </div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
                <div class="flex flex-col lg:flex-row lg:items-end gap-4 lg:gap-0 justify-between mb-8 lg:mb-12">
                    <h2 class="text-white text-3xl lg:text-5xl font-bold leading-[1]">Liever <span class="text-primary">leasen</span><br>dan kopen?</h2>
                    <p class="lg:max-w-[400px] lg:text-right text-xs text-white opacity-80">Start direct met een complete club zonder grote investering. Bij ons lease je niet alleen apparatuur, maar ook het interieur: van vloeren tot verlichting. Flexibele oplossingen, afgestemd op jouw situatie.</p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-8 lg:mb-12">
                    <div class="bg-white/5 border border-white/10 rounded-2xl p-6">
                        <div class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center mb-4">
                            <i class="fa-solid fa-clock text-primary text-sm"></i>
                        </div>
                        <h3 class="text-white text-sm font-bold mb-1">Flexibele looptijden</h3>
                        <p class="text-white/50 text-xs leading-relaxed">Kies een looptijd die past bij jouw businessplan en cashflow.</p>
                    </div>
                    <div class="bg-white/5 border border-white/10 rounded-2xl p-6">
                        <div class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center mb-4">
                            <i class="fa-solid fa-piggy-bank text-primary text-sm"></i>
                        </div>
                        <h3 class="text-white text-sm font-bold mb-1">Behoud je werkkapitaal</h3>
                        <p class="text-white/50 text-xs leading-relaxed">Spreid de kosten en houd ruimte voor wat echt groei brengt: marketing, personeel en je opening.</p>
                    </div>
                    <div class="bg-white/5 border border-white/10 rounded-2xl p-6">
                        <div class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center mb-4">
                            <i class="fa-solid fa-calculator text-primary text-sm"></i>
                        </div>
                        <h3 class="text-white text-sm font-bold mb-1">Inzicht in je opties</h3>
                        <p class="text-white/50 text-xs leading-relaxed">Wij rekenen de scenario's voor je door: kopen, leasen of een combinatie. Zo vergelijk je zelf, of samen met je accountant, wat het beste past.</p>
                    </div>
                </div>
                <div class="flex flex-wrap items-center justify-center gap-3 sm:gap-4">
                    <a href="{{ url('/diensten/leasing-en-financiering') }}" class="bg-primary rounded-full px-6 py-3 text-white text-xs font-semibold hover:bg-primary/80 transition-colors">Bekijk leaseopties <i class="fa-solid fa-arrow-right text-xs ml-1"></i></a>
                    <a href="{{ url('/vrijblijvend-adviesgesprek') }}" class="bg-white/10 border border-white/30 rounded-full px-6 py-3 text-white text-xs font-semibold hover:bg-white/20 transition-colors">Vrijblijvend adviesgesprek</a>
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
                        <a href="{{ url('/vrijblijvend-adviesgesprek') }}" class="inline-flex items-center bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition mt-8">Stel je vraag <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                    </div>

                    {{-- Right: Accordion --}}
                    <div class="lg:w-[60%]">
                        @php
                        $faqs = [
                            [
                                'question' => 'Hoe verloopt het traject van ontwerp tot oplevering?',
                                'answer' => 'We starten met een vrijblijvend adviesgesprek of locatiebezoek. Daarna volgen ontwerp en 3D-visualisatie, stellen we de apparatuur samen en voeren we de regie over de bouw. Tot slot verzorgen we de volledige levering, installatie en oplevering. Een aanspreekpunt voor het hele traject.',
                            ],
                            [
                                'question' => 'Zijn jullie gebonden aan een specifiek merk?',
                                'answer' => 'Nee. Wij zijn officieel dealer van 18 merken en bewust onafhankelijk. We adviseren wat past bij jouw doelgroep, budget en verdienmodel. Van Matrix en Life Fitness tot Eleiko en Concept2.',
                            ],
                            [
                                'question' => 'Werken jullie ook buiten Nederland?',
                                'answer' => 'Ja. We zijn actief in de hele Benelux. Ook internationale projecten zijn bespreekbaar, afhankelijk van omvang en planning.',
                            ],
                            [
                                'question' => 'Kan ik apparatuur bij jullie leasen of financieren?',
                                'answer' => 'Ja. Zowel apparatuur als interieur kun je bij ons leasen of financieren, met flexibele looptijden en persoonlijk advies. In het adviesgesprek rekenen we door welke opzet bij jouw situatie past en wij leveren alle cijfers aan voor je accountant.',
                            ],
                            [
                                'question' => 'Regelen jullie ook de bouw?',
                                'answer' => 'Ja. Voor elk project stellen wij een bouwteam samen en voeren wij de volledige regie: van wanden en vloeren tot schilderwerk en afwerking. Jij hebt een aanspreekpunt en een planning. Heb je zelf al een schilder of installateur? Die schuift gewoon aan in ons bouwteam, onder onze regie.',
                            ],
                            [
                                'question' => 'Hoe lang duurt een compleet project?',
                                'answer' => 'De doorlooptijd wordt vooral bepaald door de levertijd van apparatuur: gemiddeld 12 tot 14 weken. Die tijd benutten we slim, want terwijl de apparatuur onderweg is, bouwen en richten wij de ruimte in. Zo staat alles klaar zodra de machines arriveren en verliezen we geen week. In het adviesgesprek krijg je een concrete planning voor jouw project.',
                            ],
                            [
                                'question' => 'Wat kost het inrichten van een sportschool?',
                                'answer' => 'Dat hangt af van drie factoren: het aantal vierkante meters, de apparatuurkeuze en het afwerkingsniveau. Een compacte PT-studio vraagt een andere investering dan een commerciele club van 1.000 m². Daarom werken we niet met standaardprijzen, maar met een budgetindicatie op maat. In een vrijblijvend adviesgesprek rekenen we jouw plan door en weet je binnen twee week waar je aan toe bent.',
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


        {{-- E-book Download Section --}}
        <section class="bg-white py-16 lg:py-32 overflow-hidden" data-header-light>
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <div class="flex flex-col lg:flex-row rounded-3xl overflow-hidden border border-secondary/[0.06]">

                    {{-- Left: E-book afbeelding --}}
                    <div class="lg:w-[45%] aspect-square">
                        <img src="{{ asset('assets/e-book.jpeg') }}" alt="Gratis Gym-Inrichting Handboek - Fitness Aannemer" class="w-full h-full object-cover">
                    </div>

                    {{-- Right: Content + Form --}}
                    <div class="lg:w-[55%] bg-white p-8 sm:p-12 lg:p-16 flex flex-col justify-center">
                        <span class="text-primary text-xs font-semibold uppercase tracking-widest mb-4 block">Gratis e-book</span>
                        <h2 class="text-secondary text-2xl sm:text-3xl lg:text-4xl font-bold leading-[1.1] mb-4">Van idee tot <span class="text-primary">succesvolle sportschool</span></h2>
                        <p class="text-secondary/50 text-sm leading-relaxed mb-8">Alles wat je moet weten voordat je begint: van concept en businessplan tot inrichting en opening. Download ons gratis e-book en start goed voorbereid.</p>

                        {{-- USPs --}}
                        <div class="flex flex-col gap-3 mb-8">
                            @foreach(['Stap-voor-stap van idee tot opening', 'Praktische checklists & budgettips', 'Inzichten uit 60+ gerealiseerde projecten'] as $usp)
                            <div class="flex items-center gap-3">
                                <div class="w-6 h-6 rounded-full bg-primary/10 flex items-center justify-center shrink-0">
                                    <i class="fa-solid fa-check text-primary text-[10px]"></i>
                                </div>
                                <span class="text-secondary text-sm font-medium">{{ $usp }}</span>
                            </div>
                            @endforeach
                        </div>

                        {{-- Form --}}
                        <form id="ebook-form" class="space-y-3" novalidate>
                            <div class="relative">
                                <i class="fa-solid fa-user absolute left-4 top-1/2 -translate-y-1/2 text-secondary/20 text-xs"></i>
                                <input type="text" name="naam" id="ebook-naam" placeholder="Jouw naam" required class="w-full bg-secondary/[0.03] border border-secondary/10 rounded-xl pl-11 pr-4 py-3.5 text-sm text-secondary placeholder:text-secondary/30 focus:outline-none focus:border-primary/40 transition">
                            </div>
                            <div class="relative">
                                <i class="fa-solid fa-envelope absolute left-4 top-1/2 -translate-y-1/2 text-secondary/20 text-xs"></i>
                                <input type="email" name="email" id="ebook-email" placeholder="jouw@email.nl" required class="w-full bg-secondary/[0.03] border border-secondary/10 rounded-xl pl-11 pr-4 py-3.5 text-sm text-secondary placeholder:text-secondary/30 focus:outline-none focus:border-primary/40 transition">
                            </div>
                            <p id="ebook-error" class="text-red-500 text-xs hidden"></p>
                            <button type="submit" id="ebook-btn" class="w-full bg-secondary hover:bg-secondary/90 text-white text-sm font-semibold rounded-xl px-6 py-3.5 flex items-center justify-center gap-2 transition">
                                <i class="fa-solid fa-download text-xs"></i>
                                Download gratis e-book
                            </button>
                        </form>
                        <div id="ebook-success" class="hidden text-center py-6">
                            <div class="w-14 h-14 rounded-full bg-green-100 flex items-center justify-center mx-auto mb-4">
                                <i class="fa-solid fa-check text-green-600 text-xl"></i>
                            </div>
                            <h3 class="text-secondary text-lg font-bold mb-2">Je download start automatisch</h3>
                            <p class="text-secondary/50 text-sm mb-4">Het e-book wordt nu gedownload. Niet ontvangen?</p>
                            <a href="{{ asset('EBook_Startende_Ondernemers.pdf') }}" download class="text-primary text-sm font-semibold hover:underline">Klik hier om opnieuw te downloaden</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>



        <div class="bg-secondary text-center pt-16 lg:pt-32 px-4 sm:px-6 relative z-10">
            <h2 class="brands-fade text-white text-3xl sm:text-5xl md:text-6xl font-bold leading-[1.05] mb-6">Klaar om jouw gym<br><span class="text-primary">te realiseren?</span></h2>
            <p class="brands-fade text-white/35 text-sm leading-relaxed max-w-lg mx-auto">Van ontwerp tot oplevering, wij regelen alles. Neem contact op voor een vrijblijvend adviesgesprek en ontdek wat wij voor jouw fitnessruimte kunnen betekenen.</p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-3 sm:gap-4 mt-8">
                <a href="{{ url('/vrijblijvend-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Vrijblijvend adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                <a href="{{ url('/projecten') }}" class="bg-white/10 border border-white/20 rounded-full px-6 py-3.5 text-white text-xs font-semibold hover:bg-white/20 transition">Bekijk onze projecten</a>
            </div>
        </div>

        <div class="project-arc bg-secondary relative z-10 hidden sm:block">
            @for ($i = 1; $i <= 9; $i++)
            <div class="project-arc-card rounded-3xl" data-arc-index="{{ $i - 1 }}">
                <video data-src="{{ asset('shorts/fitnessaannemer-short-' . $i . '.mp4') }}" preload="none" class="lazy-video absolute inset-0 w-full h-full object-cover rounded-3xl" muted loop playsinline></video>
                <div class="project-arc-overlay absolute inset-0 bg-secondary rounded-3xl pointer-events-none"></div>
            </div>
            @endfor
        </div>

        @include('partials.footer')
        @include('partials.cookie-consent')
    </body>
</html>
