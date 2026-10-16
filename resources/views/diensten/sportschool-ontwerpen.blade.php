@extends('layouts.app')

@section('title', 'Sportschool ontwerpen laten maken | Fitness Aannemer')
@section('meta_description', 'Sportschool laten ontwerpen? Plattegrond, 3D-ontwerp en raming in een traject, gebaseerd op een businessmodel dat klopt. 40+ projecten in NL en BE.')

@section('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Service",
    "name": "Sportschool ontwerpen",
    "description": "Sportschool laten ontwerpen: plattegrond, 3D-ontwerp en raming in een traject, gebaseerd op een businessmodel dat klopt.",
    "url": "{{ url('/diensten/sportschool-ontwerpen') }}",
    "provider": {
        "@@type": "Organization",
        "name": "Fitness Aannemer",
        "url": "{{ url('/') }}"
    },
    "areaServed": [
        { "@@type": "Country", "name": "Nederland" },
        { "@@type": "Country", "name": "België" }
    ],
    "serviceType": "Sportschool ontwerpen",
    "offers": {
        "@@type": "Offer",
        "priceCurrency": "EUR",
        "price": "10000",
        "priceSpecification": {
            "@@type": "PriceSpecification",
            "priceCurrency": "EUR",
            "price": "10000",
            "description": "Volledig ontwerptraject vanaf"
        }
    }
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "FAQPage",
    "mainEntity": [
        {
            "@@type": "Question",
            "name": "Wat kost het om een sportschool te laten ontwerpen?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Een volledig ontwerptraject start vanaf €10.000, afhankelijk van vierkante meters en budget. Je betaalt per fase en beslist na elke fase of je doorgaat."
            }
        },
        {
            "@@type": "Question",
            "name": "Hoe lang duurt het ontwerp en de bouw van een sportschool?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Fase 1 duurt vier weken. Van start tot oplevering rekenen we gemiddeld vijf tot zeven maanden. Dat komt vooral door de levertijd van apparatuur: 10 tot 20 weken, afhankelijk van het merk. De bouw zelf duurt 6 tot 8 weken en kan een week na opdracht starten. Heb je een deadline, dan werken we sneller."
            }
        },
        {
            "@@type": "Question",
            "name": "Wat heb ik nodig om te starten?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Een pand of een pand op het oog, een globaal concept en een investeringsbudget vanaf €100.000. Heb je nog geen pand? Dan denken we mee over wat je moet zoeken."
            }
        },
        {
            "@@type": "Question",
            "name": "Is een sportschool winstgevend?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Dat hangt af van huur, ledenaantal, prijs per lid en investering. In een succesvolle casus verdient een sportschool zich binnen 3 tot 5 jaar terug. Daarom rekenen we je businessmodel door voordat we tekenen. Bij De Krachtfabriek lag het break-evenpunt in maand 6."
            }
        },
        {
            "@@type": "Question",
            "name": "Zijn jullie gebonden aan een merk?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Nee. We zijn dealer van 18 merken en kiezen wat past bij je doelgroep, ruimte en budget."
            }
        },
        {
            "@@type": "Question",
            "name": "Regelen jullie ook de vergunning?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "De vergunning vraag je zelf aan bij de gemeente. Wij denken mee en leveren de tekeningen die je nodig hebt. Begin op tijd: vergunningstrajecten duren vaak maanden."
            }
        }
    ]
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        { "@@type": "ListItem", "position": 1, "name": "Home", "item": "{{ url('/') }}" },
        { "@@type": "ListItem", "position": 2, "name": "Diensten", "item": "{{ url('/diensten') }}" },
        { "@@type": "ListItem", "position": 3, "name": "Sportschool ontwerpen", "item": "{{ url('/diensten/sportschool-ontwerpen') }}" }
    ]
}
</script>
@endsection

@section('content')
    {{-- Hero --}}
    <section class="bg-secondary pt-32 lg:pt-40 pb-16 lg:pb-30 relative overflow-hidden" id="so-hero">
        <div class="hidden lg:block absolute inset-y-0 right-0 w-1/2">
            <img src="{{ asset('assets/io-hero.jpg') }}" alt="Sportschool ontwerp 3D-visualisatie Fitness Aannemer" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-secondary via-secondary/80 to-transparent"></div>
            <div class="absolute w-[650px] h-[650px] rounded-full border border-white/[0.07] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"></div>
            <div class="absolute w-[400px] h-[400px] rounded-full border border-white/[0.10] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="ip-hero-el flex items-center gap-2 mb-6">
                <a href="{{ url('/diensten') }}" class="text-white/40 text-xs font-medium hover:text-white transition" style="font-family: 'Inter'">Diensten</a>
                <i class="fa-solid fa-chevron-right text-white/20 text-[8px]"></i>
                <span class="text-white/70 text-xs font-medium" style="font-family: 'Inter'">Sportschool ontwerpen</span>
            </div>
            <div class="max-w-3xl">
                <h1 class="ip-hero-el text-white text-4xl lg:text-6xl font-bold leading-[1]">Sportschool<br><span class="text-primary">ontwerpen</span></h1>
                <p class="ip-hero-el text-white/60 text-sm lg:text-base leading-relaxed max-w-xl my-8">Een goed sportschoolontwerp past bij je budget en verdient zichzelf terug. Wij ontwerpen je gym op basis van je businessmodel: indeling, sfeer, apparatuur en materialen afgestemd op wat je wilt investeren. Zo weet je vóór de eerste schop in de grond wat je bouwt, wat het kost en wanneer je het terugverdient.</p>
                <div class="ip-hero-el flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                    <a href="{{ url('/vrijblijvend-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Plan een kennismaking <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                    <a href="{{ url('/projecten') }}" class="bg-white/10 border border-white/20 rounded-full px-6 py-3.5 text-white text-xs font-semibold hover:bg-white/20 transition">Bekijk projecten</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Proof balk --}}
    <div class="bg-primary/10 border-y border-primary/20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 py-4 flex flex-wrap items-center justify-center gap-x-8 gap-y-2 text-center">
            <span class="text-secondary text-xs font-semibold">40+ gerealiseerde projecten</span>
            <span class="text-secondary/30 hidden sm:inline">&#9670;</span>
            <span class="text-secondary text-xs font-semibold">Merkonafhankelijk, 18 merken</span>
            <span class="text-secondary/30 hidden sm:inline">&#9670;</span>
            <span class="text-secondary text-xs font-semibold">Projecten tot ruim 3.000 m²</span>
            <span class="text-secondary/30 hidden sm:inline">&#9670;</span>
            <span class="text-secondary text-xs font-semibold">Nederland en België</span>
        </div>
    </div>

    {{-- Eerst rekenen, dan tekenen, dan bouwen --}}
    <section class="bg-white py-16 lg:py-32 relative overflow-hidden" data-header-light>
        <div class="horizontal-blob w-[700px] h-[700px]" style="background: radial-gradient(circle, rgba(82,171,226,0.2) 0%, rgba(82,171,226,0) 70%); top: -20%; left: -10%; animation: blob-float-1 18s ease-in-out infinite;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="ip-block-text">
                    <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-6">Onze aanpak</span>
                    <h2 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.05] mb-8">Eerst rekenen, dan tekenen, <span class="text-primary">dan bouwen</span></h2>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-4">Wij richten ons alleen op sportscholen. Daardoor weten we hoe een club beweegt, hoe hij geld verdient en wat materialen en apparatuur kosten. Die kennis zit vanaf de eerste schets in je ontwerp.</p>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-8">Eerst rekenen we je businessmodel door: hoeveel leden heb je nodig, wat mag de inrichting kosten, wat levert elke vierkante meter op. Daarna tekenen we. En als ontwerp en prijs kloppen, bouwen we.</p>
                    <a href="{{ url('/vrijblijvend-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Plan een kennismaking <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                </div>
                <div class="ip-block-media rounded-3xl aspect-[4/3] overflow-hidden">
                    <img src="{{ asset('assets/io-zonering.jpg') }}" alt="Sportschool ontwerp plattegrond en zonering Fitness Aannemer" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    {{-- Ontwerpen naar budget --}}
    <section class="bg-secondary py-16 lg:py-32 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="ip-block-media rounded-3xl aspect-[4/3] overflow-hidden order-2 lg:order-1">
                    <img src="{{ asset('assets/foto-assets/FULL-Ballin-Fit-013-WF206762-1-1024x683.jpg') }}" alt="Sportschool interieur ontworpen naar budget" class="w-full h-full object-cover">
                </div>
                <div class="ip-block-text order-1 lg:order-2">
                    <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-6">Budget</span>
                    <h2 class="text-white text-3xl lg:text-5xl font-bold leading-[1.05] mb-8">Ontwerpen naar <span class="text-primary">budget</span></h2>
                    <p class="text-white/50 text-sm leading-relaxed mb-4">Elk ontwerp dat we maken past bij je budget. Een sportschool moet zich in een succesvolle casus binnen 3 tot 5 jaar terugverdienen. Een onbeperkt budget bestaat dus niet: alles wat je extra uitgeeft, moet je ook weer terugverdienen.</p>
                    <p class="text-white/50 text-sm leading-relaxed">High end hoeft niet altijd duur te zijn. Echt marmer of RVS ziet er prachtig uit, maar HPL-platen met dezelfde look schelen enorm in prijs. Juist omdat we materialen en hun prijzen kennen, kunnen we de uitstraling neerzetten die je wilt, binnen het bedrag dat je wilt investeren.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Wat je van ons krijgt --}}
    <section class="bg-white py-16 lg:py-32 relative overflow-hidden" data-header-light>
        <div class="horizontal-blob w-[500px] h-[500px]" style="background: radial-gradient(circle, rgba(82,171,226,0.15) 0%, rgba(82,171,226,0) 70%); top: -15%; right: -5%; animation: blob-float-2 22s ease-in-out infinite;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="text-center mb-12 lg:mb-16">
                <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-4">Wat je krijgt</span>
                <h2 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.05]">Wat je van ons <span class="text-primary">krijgt</span></h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                $deliverables = [
                    ['icon' => 'fa-location-dot', 'title' => 'Locatiebezoek', 'desc' => 'Met ontwerper en aannemer'],
                    ['icon' => 'fa-ruler-combined', 'title' => 'Zone-indeling en plattegrond', 'desc' => 'Met maatvoering'],
                    ['icon' => 'fa-cube', 'title' => '3D-visualisaties', 'desc' => 'Fotorealistisch, vanuit elke hoek'],
                    ['icon' => 'fa-dumbbell', 'title' => 'Apparatuurplan', 'desc' => 'Merkonafhankelijk, passend bij je doelgroep'],
                    ['icon' => 'fa-sliders', 'title' => 'Keuzes per onderdeel', 'desc' => 'Van instap tot high end: vloer, verlichting, audio, kluisjes, spiegels en meubels'],
                    ['icon' => 'fa-file-invoice', 'title' => 'Raming in fase 1', 'desc' => 'Definitieve offerte na het voorlopig ontwerp'],
                    ['icon' => 'fa-chart-line', 'title' => 'Businessmodel', 'desc' => 'Investering, maandkosten, ledenaantal en terugverdientijd'],
                ];
                @endphp
                @foreach($deliverables as $item)
                <div class="bg-secondary/[0.02] border border-secondary/[0.06] rounded-2xl p-6 lg:p-8 hover:border-primary/20 transition-colors">
                    <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center mb-4">
                        <i class="fa-solid {{ $item['icon'] }} text-primary"></i>
                    </div>
                    <h3 class="text-secondary text-base font-bold mb-2">{{ $item['title'] }}</h3>
                    <p class="text-secondary/50 text-sm leading-relaxed">{{ $item['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Zo verloopt het ontwerptraject --}}
    <section class="bg-secondary py-16 lg:py-32 overflow-hidden" id="so-process">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="text-center mb-20">
                <span class="ip-fade inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-4">Het traject</span>
                <h2 class="ip-fade text-white text-4xl lg:text-5xl font-bold leading-[1.05]">Zo verloopt het<br><span class="text-primary">ontwerptraject</span></h2>
            </div>

            @php
            $fasen = [
                [
                    'nr' => '01',
                    'icon' => 'fa-magnifying-glass',
                    'title' => 'Haalbaarheid en schetsontwerp',
                    'duration' => '4 weken',
                    'desc' => 'Na akkoord plannen we een online kick-off, daarna een locatiebezoek met ontwerper en aannemer. Drie weken later ligt er een schetsontwerp met raming (marge ±10%). Hier beslis je of je doorgaat.',
                ],
                [
                    'nr' => '02',
                    'icon' => 'fa-compass-drafting',
                    'title' => 'Voorlopig ontwerp',
                    'duration' => '',
                    'desc' => 'De indeling en sfeer worden uitgewerkt in 3D. Daarna volgt de definitieve offerte.',
                ],
                [
                    'nr' => '03',
                    'icon' => 'fa-file-signature',
                    'title' => 'Definitief ontwerp',
                    'duration' => '',
                    'desc' => 'Alles staat vast: tekeningen, materialen en apparatuur.',
                ],
                [
                    'nr' => '04',
                    'icon' => 'fa-list-check',
                    'title' => 'Werkvoorbereiding',
                    'duration' => '',
                    'desc' => 'Planning, bestellingen en afspraken met leveranciers en aannemer.',
                ],
                [
                    'nr' => '05',
                    'icon' => 'fa-hammer',
                    'title' => 'Realisatie',
                    'duration' => '6-8 weken bouw',
                    'desc' => 'We kunnen een week na opdracht starten met bouwen. De bouw duurt 6 tot 8 weken, de levertijd van apparatuur 10 tot 20 weken, afhankelijk van het merk. Wij voeren de regie tot de sleuteloverdracht.',
                ],
            ];
            @endphp

            <div class="relative">
                <div class="absolute left-6 lg:left-1/2 top-0 bottom-0 w-px bg-white/[0.06] lg:-translate-x-px">
                    <div class="ip-timeline-fill w-full bg-primary/40 origin-top" style="height: 0%"></div>
                </div>

                <div class="space-y-16 lg:space-y-24">
                    @foreach($fasen as $index => $fase)
                    <div class="ip-step relative flex items-start gap-8 lg:gap-0 {{ $index % 2 === 0 ? '' : 'lg:flex-row-reverse' }}">
                        <div class="lg:w-1/2 {{ $index % 2 === 0 ? 'lg:pr-16 lg:text-right' : 'lg:pl-16' }} pl-16 lg:pl-0">
                            <span class="text-primary/30 text-6xl font-bold leading-none" style="font-family: 'Inter'">{{ $fase['nr'] }}</span>
                            <h3 class="text-white text-xl lg:text-2xl font-bold mt-2 mb-3">{{ $fase['title'] }}</h3>
                            <p class="text-white/45 text-sm leading-relaxed mb-3">{{ $fase['desc'] }}</p>
                            @if($fase['duration'])
                            <span class="inline-flex items-center gap-2 text-primary/60 text-xs font-medium">
                                <i class="fa-solid fa-clock text-[10px]"></i> {{ $fase['duration'] }}
                            </span>
                            @endif
                        </div>

                        <div class="absolute left-6 lg:left-1/2 -translate-x-1/2 w-12 h-12 rounded-xl bg-secondary border-2 border-white/[0.08] flex items-center justify-center z-10 ip-dot">
                            <i class="fa-solid {{ $fase['icon'] }} text-primary text-sm"></i>
                        </div>

                        <div class="hidden lg:block lg:w-1/2 {{ $index % 2 === 0 ? 'lg:pl-16' : 'lg:pr-16' }}"></div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="mt-16 text-center">
                <p class="text-white/50 text-sm mb-2">Heb je een harde openingsdatum? Dan werken we sneller.</p>
                <p class="text-white/50 text-sm">Je betaalt per fase en beslist na iedere fase of je verder gaat. Bouw je daarna met ons, dan krijg je 50% van het ontwerptraject terug als korting op de realisatie, mits wij de complete inrichting leveren.</p>
            </div>
        </div>
    </section>

    {{-- Wat kost een sportschool ontwerp? --}}
    <section class="bg-white py-16 lg:py-32 relative overflow-hidden" data-header-light>
        <div class="horizontal-blob w-[600px] h-[600px]" style="background: radial-gradient(circle, rgba(82,171,226,0.18) 0%, rgba(82,171,226,0) 70%); bottom: -20%; left: -8%; animation: blob-float-1 20s ease-in-out infinite;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="max-w-3xl mx-auto text-center">
                <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-4">Investering</span>
                <h2 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.05] mb-8">Wat kost een sportschool <span class="text-primary">ontwerp?</span></h2>
                <p class="text-secondary/50 text-sm leading-relaxed mb-4">Een volledig ontwerptraject start vanaf &euro;10.000. De prijs hangt af van het aantal vierkante meters en je budget. Een PT-studio van 150 m² vraagt een ander traject dan een club van 1.500 m².</p>
                <p class="text-secondary/50 text-sm leading-relaxed mb-8">Een compleet ontwerptraject past bij ondernemers met een pand (of een pand op het oog) en een investeringsbudget vanaf &euro;100.000. Is je budget lager? Dan is een volledig interieurontwerp vaak niet nodig. We helpen je dan met een slimme indeling en de juiste inrichting, zonder compleet ontwerptraject.</p>
                <a href="{{ url('/vrijblijvend-adviesgesprek') }}" class="inline-flex bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Plan een kennismaking <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
            </div>
        </div>
    </section>

    {{-- Waarom Fitness Aannemer --}}
    <section class="bg-secondary py-16 lg:py-32 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="text-center mb-12 lg:mb-16">
                <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-4">Waarom wij</span>
                <h2 class="text-white text-3xl lg:text-5xl font-bold leading-[1.05]">Waarom <span class="text-primary">Fitness Aannemer</span></h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                $usps = [
                    ['icon' => 'fa-chart-line', 'title' => 'Ontwerp vanuit je businessmodel', 'desc' => 'Elke vierkante meter draagt bij aan omzet en ledenbinding.'],
                    ['icon' => 'fa-scale-balanced', 'title' => 'Merkonafhankelijk', 'desc' => 'Dealer van 18 merken. We kiezen wat past bij je doelgroep en ruimte.'],
                    ['icon' => 'fa-file-invoice', 'title' => 'Raming al in fase 1', 'desc' => 'Zodat je vroeg weet waar je staat.'],
                    ['icon' => 'fa-handshake', 'title' => 'Ontwerp en realisatie in een hand', 'desc' => 'Een aanspreekpunt van schets tot sleuteloverdracht.'],
                    ['icon' => 'fa-swatchbook', 'title' => 'Kennis van materialen en prijzen', 'desc' => 'De uitstraling die je wilt, binnen je budget.'],
                ];
                @endphp
                @foreach($usps as $usp)
                <div class="bg-white/[0.03] border border-white/[0.06] rounded-2xl p-6 lg:p-8">
                    <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center mb-4">
                        <i class="fa-solid {{ $usp['icon'] }} text-primary"></i>
                    </div>
                    <h3 class="text-white text-base font-bold mb-2">{{ $usp['title'] }}</h3>
                    <p class="text-white/50 text-sm leading-relaxed">{{ $usp['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Ontwerpen die al draaien --}}
    <section class="bg-white py-16 lg:py-32 relative overflow-hidden" data-header-light>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="text-center mb-12 lg:mb-16">
                <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-4">Projecten</span>
                <h2 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.05]">Ontwerpen die <span class="text-primary">al draaien</span></h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @php
                $projecten = [
                    [
                        'url' => '/projecten/de-krachtfabriek-huissen',
                        'image' => 'assets/wp-uploads/009_DSC0569-HDR-scaled.jpg',
                        'title' => 'De Krachtfabriek',
                        'location' => 'Huissen',
                        'desc' => '880 m² casco omgebouwd tot complete sportschool. Geopend januari 2026, break-even in maand 6, nu 600 leden.',
                    ],
                    [
                        'url' => '/projecten/axon-healthclub',
                        'image' => 'assets/wp-uploads/011_DSC0596-HDR-scaled-e1758023491547.jpg',
                        'title' => 'AXON',
                        'location' => 'Maasbracht',
                        'desc' => '1.200 m², turnkey gerealiseerd. Meer dan 200 aanmeldingen voor de opening.',
                    ],
                    [
                        'url' => '/projecten/sportcentrum-pleizier-amsterdam-zuidoost',
                        'image' => 'assets/wp-uploads/gym-interior-with-exercise-machines-2025-03-09-03-02-13-utc-2.jpg',
                        'title' => 'Sportcentrum Pleizier',
                        'location' => 'Amsterdam',
                        'desc' => 'Renovatie van 1.000 m² inclusief lounge, terwijl de rest van de club openbleef.',
                    ],
                ];
                @endphp
                @foreach($projecten as $project)
                <a href="{{ url($project['url']) }}" class="group rounded-2xl overflow-hidden shadow-lg hover:shadow-xl border border-secondary/[0.08] hover:border-primary/30 transition-all duration-300">
                    <div class="aspect-[4/3] relative overflow-hidden">
                        <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }} {{ $project['location'] }} sportschool ontwerp" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-secondary via-secondary/50 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="inline-block bg-primary/20 text-primary text-[10px] font-semibold px-2.5 py-1 rounded-full border border-primary/30">{{ $project['location'] }}</span>
                            </div>
                            <h3 class="text-white text-xl font-bold mb-2">{{ $project['title'] }}</h3>
                            <p class="text-white/70 text-sm leading-relaxed">{{ $project['desc'] }}</p>
                            <span class="inline-flex items-center text-primary text-xs font-semibold mt-3">Bekijk project <i class="fa-solid fa-arrow-right text-[10px] ml-1.5 group-hover:translate-x-1 transition-transform"></i></span>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <section class="bg-secondary py-16 lg:py-32 overflow-hidden" id="so-faq">
        <div class="max-w-3xl mx-auto px-4 sm:px-6">
            <div class="text-center mb-12 lg:mb-16">
                <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-4">FAQ</span>
                <h2 class="text-white text-3xl lg:text-5xl font-bold leading-[1.05]">Veelgestelde <span class="text-primary">vragen</span></h2>
            </div>
            @php
            $faqs = [
                ['q' => 'Wat kost het om een sportschool te laten ontwerpen?', 'a' => 'Een volledig ontwerptraject start vanaf €10.000, afhankelijk van vierkante meters en budget. Je betaalt per fase en beslist na elke fase of je doorgaat.'],
                ['q' => 'Hoe lang duurt het ontwerp en de bouw van een sportschool?', 'a' => 'Fase 1 duurt vier weken. Van start tot oplevering rekenen we gemiddeld vijf tot zeven maanden. Dat komt vooral door de levertijd van apparatuur: 10 tot 20 weken, afhankelijk van het merk. De bouw zelf duurt 6 tot 8 weken en kan een week na opdracht starten. Heb je een deadline, dan werken we sneller.'],
                ['q' => 'Wat heb ik nodig om te starten?', 'a' => 'Een pand of een pand op het oog, een globaal concept en een investeringsbudget vanaf €100.000. Heb je nog geen pand? Dan denken we mee over wat je moet zoeken.'],
                ['q' => 'Is een sportschool winstgevend?', 'a' => 'Dat hangt af van huur, ledenaantal, prijs per lid en investering. In een succesvolle casus verdient een sportschool zich binnen 3 tot 5 jaar terug. Daarom rekenen we je businessmodel door vóórdat we tekenen. Bij De Krachtfabriek lag het break-evenpunt in maand 6.'],
                ['q' => 'Zijn jullie gebonden aan een merk?', 'a' => 'Nee. We zijn dealer van 18 merken en kiezen wat past bij je doelgroep, ruimte en budget.'],
                ['q' => 'Regelen jullie ook de vergunning?', 'a' => 'De vergunning vraag je zelf aan bij de gemeente. Wij denken mee en leveren de tekeningen die je nodig hebt. Begin op tijd: vergunningstrajecten duren vaak maanden.'],
            ];
            @endphp
            <div class="space-y-4">
                @foreach($faqs as $index => $faq)
                <details class="group bg-white/[0.03] border border-white/[0.06] rounded-2xl overflow-hidden hover:border-primary/20 transition-colors" {{ $index === 0 ? 'open' : '' }}>
                    <summary class="flex items-center justify-between p-6 cursor-pointer list-none [&::-webkit-details-marker]:hidden">
                        <h3 class="text-white text-sm font-semibold pr-4">{{ $faq['q'] }}</h3>
                        <svg class="w-4 h-4 text-primary/60 shrink-0 transition-transform duration-200 group-open:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </summary>
                    <div class="px-6 pb-6">
                        <p class="text-white/50 text-sm leading-relaxed">{{ $faq['a'] }}</p>
                    </div>
                </details>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Slot CTA --}}
    <section class="bg-primary py-16 lg:py-24 overflow-hidden">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 text-center">
            <h2 class="text-white text-3xl lg:text-5xl font-bold leading-[1.05] mb-6">Klaar om je sportschool te <span class="text-secondary">ontwerpen?</span></h2>
            <p class="text-white/80 text-sm leading-relaxed mb-8 max-w-xl mx-auto">Plan een kennismaking. We bespreken je plan, pand en budget, en vertellen eerlijk of het haalbaar is.</p>
            <a href="{{ url('/vrijblijvend-adviesgesprek') }}" class="inline-flex bg-secondary hover:bg-secondary/90 rounded-full px-8 py-4 text-white text-sm font-semibold transition">Plan een kennismaking <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
        </div>
    </section>
@endsection
