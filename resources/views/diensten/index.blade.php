@extends('layouts.app')

@section('title', 'Onze Diensten | Fitness Aannemer')
@section('meta_description', 'Eén partner, alle diensten. Fitness Aannemer verzorgt inrichting, levering, installatie, onderhoud en leasing van fitnessapparatuur.')

@section('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Service",
    "serviceType": "Fitness Equipment & Gym Design",
    "provider": {
        "@@type": "Organization",
        "name": "Fitness Aannemer",
        "url": "{{ url('/') }}"
    },
    "name": "Onze Diensten",
    "description": "Fitness Aannemer verzorgt inrichting, levering, installatie, onderhoud en leasing van fitnessapparatuur.",
    "url": "{{ url('/diensten') }}",
    "areaServed": [
        { "@@type": "Country", "name": "Nederland" },
        { "@@type": "Country", "name": "België" }
    ],
    "hasOfferCatalog": {
        "@@type": "OfferCatalog",
        "name": "Diensten",
        "itemListElement": [
            {
                "@@type": "Offer",
                "itemOffered": {
                    "@@type": "Service",
                    "name": "Inrichting & Planning",
                    "url": "{{ url('/diensten/inrichting-en-planning') }}"
                }
            },
            {
                "@@type": "Offer",
                "itemOffered": {
                    "@@type": "Service",
                    "name": "Levering & Installatie",
                    "url": "{{ url('/diensten/levering-en-installatie') }}"
                }
            },
            {
                "@@type": "Offer",
                "itemOffered": {
                    "@@type": "Service",
                    "name": "Onderhoud & Reparaties",
                    "url": "{{ url('/diensten/onderhoud-en-reparaties') }}"
                }
            },
            {
                "@@type": "Offer",
                "itemOffered": {
                    "@@type": "Service",
                    "name": "Leasing & Financiering",
                    "url": "{{ url('/diensten/leasing-en-financiering') }}"
                }
            }
        ]
    }
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        { "@@type": "ListItem", "position": 1, "name": "Home", "item": "{{ url('/') }}" },
        { "@@type": "ListItem", "position": 2, "name": "Diensten", "item": "{{ url('/diensten') }}" }
    ]
}
</script>
@endsection

@section('content')
    {{-- Hero --}}
    <section class="bg-secondary pt-32 lg:pt-40 pb-12 lg:pb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="max-w-3xl">
                <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-4">Diensten</span>
                <h1 class="text-white text-4xl lg:text-6xl font-bold leading-[1.05] mb-6">Eén partner,<br>alle <span class="text-primary">diensten</span></h1>
                <p class="text-white/60 text-sm lg:text-base leading-relaxed max-w-xl">Van het eerste ontwerp tot dagelijkse operatie — wij zijn jouw complete partner. Korte lijnen, heldere communicatie en volledig ontzorgd.</p>
            </div>
        </div>
    </section>

    {{-- Diensten grid --}}
    <section class="bg-white py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @php
                $diensten = [
                    [
                        'url' => '/diensten/inrichting-en-planning',
                        'icon' => 'fa-compass-drafting',
                        'title' => 'Inrichting & planning',
                        'desc' => 'Slim ontwerp en doordachte planning vormen de basis van elke succesvolle fitnessruimte. Wij vertalen jouw doelen naar een functionele indeling met optimale looproutes.',
                        'tags' => ['3D Visualisatie', 'Plattegrond', 'Behoefteanalyse', 'Apparatuurkeuze'],
                    ],
                    [
                        'url' => '/diensten/levering-en-installatie',
                        'icon' => 'fa-truck-fast',
                        'title' => 'Levering & installatie',
                        'desc' => 'Complete levering en professionele installatie van alle onderdelen. Van vloer en verlichting tot racks, cardio en audiosystemen — wij regelen het.',
                        'tags' => ['Eigen montageteam', 'Turnkey', 'Vaste opleverdatum', 'NL & BE'],
                    ],
                    [
                        'url' => '/diensten/onderhoud-en-reparaties',
                        'icon' => 'fa-wrench',
                        'title' => 'Onderhoud & reparaties',
                        'desc' => 'Bescherm je investering met professioneel onderhoud. Wij minimaliseren downtime en maximaliseren de ervaring voor jouw leden.',
                        'tags' => ['Onderhoudscontracten', 'Snelle service', 'Garantie', 'Preventief onderhoud'],
                    ],
                    [
                        'url' => '/diensten/leasing-en-financiering',
                        'icon' => 'fa-chart-line',
                        'title' => 'Leasing & financiering',
                        'desc' => 'Flexibele lease- en financieringsopties zodat jij kunt investeren in topapparatuur zonder grote eenmalige uitgave. Wij werken samen met banken en financieringspartners.',
                        'tags' => ['Flexibel leasen', 'Financieringsadvies', 'Maandelijkse termijnen', 'Op maat'],
                    ],
                ];
                @endphp

                @foreach($diensten as $dienst)
                <a href="{{ url($dienst['url']) }}" class="group bg-secondary/[0.02] border border-secondary/[0.06] rounded-3xl p-8 lg:p-10 hover:border-primary/20 hover:shadow-xl hover:shadow-primary/5 transition-all">
                    <div class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center mb-6 group-hover:bg-primary/20 transition-colors">
                        <i class="fa-solid {{ $dienst['icon'] }} text-primary text-xl"></i>
                    </div>
                    <h3 class="text-secondary text-xl font-bold mb-3">{{ $dienst['title'] }}</h3>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-6">{{ $dienst['desc'] }}</p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        @foreach($dienst['tags'] as $tag)
                        <span class="bg-primary/8 text-primary text-[11px] font-semibold px-3 py-1.5 rounded-full border border-primary/15">{{ $tag }}</span>
                        @endforeach
                    </div>
                    <span class="inline-flex items-center text-primary text-xs font-semibold group-hover:gap-2 transition-all" style="font-family: 'Inter Tight'">
                        Meer informatie <i class="fa-solid fa-arrow-right text-[10px] ml-1.5"></i>
                    </span>
                </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Proces --}}
    <section class="bg-secondary/[0.03] py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="text-center mb-16">
                <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-4">Ons werkproces</span>
                <h2 class="text-secondary text-3xl lg:text-4xl font-bold leading-[1.1]">Hoe wij werken</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                @php
                $stappen = [
                    ['nr' => '01', 'title' => 'Kennismaking', 'desc' => 'Gratis adviesgesprek om jouw wensen, doelen en budget in kaart te brengen.'],
                    ['nr' => '02', 'title' => 'Ontwerp', 'desc' => 'Plattegrond en 3D visualisatie op maat, inclusief apparatuurkeuze.'],
                    ['nr' => '03', 'title' => 'Realisatie', 'desc' => 'Complete levering en professionele installatie door ons eigen team.'],
                    ['nr' => '04', 'title' => 'Nazorg', 'desc' => 'Onderhoud, service en advies voor uitbreiding. Wij blijven betrokken.'],
                ];
                @endphp

                @foreach($stappen as $stap)
                <div class="text-center">
                    <span class="text-primary text-4xl font-bold opacity-30">{{ $stap['nr'] }}</span>
                    <h3 class="text-secondary text-lg font-bold mt-2 mb-3">{{ $stap['title'] }}</h3>
                    <p class="text-secondary/50 text-sm leading-relaxed">{{ $stap['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
