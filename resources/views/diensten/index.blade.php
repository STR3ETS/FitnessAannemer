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
                    "name": "Turnkey Sportschool Bouwen",
                    "url": "{{ url('/diensten/turnkey-sportschool-bouwen') }}"
                }
            },
            {
                "@@type": "Offer",
                "itemOffered": {
                    "@@type": "Service",
                    "name": "Interieurontwerp & 3D-visualisatie",
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
                    "name": "Leasing & Financiering",
                    "url": "{{ url('/diensten/leasing-en-financiering') }}"
                }
            },
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
    <section class="bg-secondary pt-32 lg:pt-40 pb-12 lg:pb-20 relative overflow-hidden">
        <div class="hidden lg:block absolute inset-y-0 right-0 w-1/2">
            <video data-src="{{ asset('assets/10_AI-Transitions_v1.mp4') }}" class="w-full h-full object-cover lazy-video" preload="none" autoplay muted loop playsinline></video>
            <div class="absolute inset-0 bg-gradient-to-r from-secondary via-secondary/80 to-transparent"></div>
            <div class="absolute w-[650px] h-[650px] rounded-full border border-white/[0.07] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"></div>
            <div class="absolute w-[400px] h-[400px] rounded-full border border-white/[0.10] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="max-w-3xl">
                <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-4">Diensten</span>
                <h1 class="text-white text-4xl lg:text-6xl font-bold leading-[1.05] mb-6">Eén partner,<br>alle <span class="text-primary">diensten</span></h1>
                <p class="text-white/60 text-sm lg:text-base leading-relaxed max-w-xl">Van het eerste ontwerp tot de sleuteloverdracht en daarna: wij zijn jouw complete partner. Korte lijnen, heldere communicatie en volledig ontzorgd.</p>
            </div>
        </div>
    </section>

    {{-- Diensten grid --}}
    <section class="bg-white py-24" data-header-light>
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            {{-- Flagship card: Turnkey --}}
            <a href="{{ url('/diensten/turnkey-sportschool-bouwen') }}" class="group bg-secondary rounded-3xl p-8 lg:p-12 hover:shadow-2xl hover:shadow-primary/10 transition-all mb-6 block">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                    <div>
                        <div class="w-14 h-14 rounded-2xl bg-primary/15 flex items-center justify-center mb-6 group-hover:bg-primary/25 transition-colors">
                            <i class="fa-solid fa-building text-primary text-xl"></i>
                        </div>
                        <h3 class="text-white text-2xl lg:text-3xl font-bold mb-4">Turnkey sportschool bouwen</h3>
                        <p class="text-white/50 text-sm leading-relaxed mb-6">Eén partij die alles regelt: wij stellen het bouwteam samen, voeren de totale regie over de bouw en leveren zelf de complete inrichting. Van eerste gesprek tot sleuteloverdracht.</p>
                        <div class="flex flex-wrap gap-2 mb-6">
                            @foreach(['Eén aanspreekpunt', 'Vaste opleverdatum', 'Totale regie', 'Volledig turnkey'] as $tag)
                            <span class="bg-primary/15 text-primary text-[11px] font-semibold px-3 py-1.5 rounded-full border border-primary/20">{{ $tag }}</span>
                            @endforeach
                        </div>
                        <span class="inline-flex items-center text-primary text-xs font-semibold group-hover:gap-2 transition-all" style="font-family: 'Inter'">
                            Meer informatie <i class="fa-solid fa-arrow-right text-[10px] ml-1.5"></i>
                        </span>
                    </div>
                    <div class="hidden lg:block rounded-2xl overflow-hidden aspect-[4/3] bg-white/[0.04] border border-white/[0.06]">
                        <img src="{{ asset('assets/foto-assets/MCJO3837-1-1024x683.jpg') }}" alt="Turnkey sportschool bouwen" class="w-full h-full object-cover" loading="lazy">
                    </div>
                </div>
            </a>

            @php
            $diensten = [
                [
                    'url' => '/diensten/inrichting-en-planning',
                    'icon' => 'fa-compass-drafting',
                    'title' => 'Interieurontwerp & 3D-visualisatie',
                    'desc' => 'Slim ontwerp vormt de basis van elke succesvolle sportschool. Wij vertalen jouw doelen naar een indeling die rendeert: optimale looplijnen, elke m² benut en een ontwerp dat leden bindt.',
                    'tags' => ['3D Visualisatie', 'Plattegrond', 'Behoefteanalyse', 'Apparatuurkeuze'],
                ],
                [
                    'url' => '/diensten/levering-en-installatie',
                    'icon' => 'fa-truck-fast',
                    'title' => 'Levering & installatie',
                    'desc' => 'Complete levering en installatie van alles wat jouw sportschool nodig heeft: apparatuur van 18 merken, sportvloeren, verlichting, audio, spiegels, kluisjes en meubels. Geïnstalleerd door ons eigen montageteam.',
                    'tags' => ['Eigen montageteam', '18 merken', 'Vaste opleverdatum', 'NL & BE'],
                ],
                [
                    'url' => '/diensten/leasing-en-financiering',
                    'icon' => 'fa-chart-line',
                    'title' => 'Leasing & financiering',
                    'desc' => 'Een complete sportschool zonder grote eenmalige investering. Bij ons lease je niet alleen apparatuur, maar ook het interieur. Flexibele opties, afgestemd op jouw businessplan en cashflow.',
                    'tags' => ['Flexibel leasen', 'Ook interieur', 'Financieringsadvies', 'Op maat'],
                ],
            ];
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
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
                    <span class="inline-flex items-center text-primary text-xs font-semibold group-hover:gap-2 transition-all" style="font-family: 'Inter'">
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

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-8">
                @php
                $stappen = [
                    ['nr' => '01', 'title' => 'Kennismaking', 'desc' => 'Vrijblijvend adviesgesprek om jouw plan, doelen en budget in kaart te brengen.'],
                    ['nr' => '02', 'title' => 'Ontwerp', 'desc' => 'Plattegrond en 3D-visualisatie op maat, inclusief apparatuurkeuze.'],
                    ['nr' => '03', 'title' => 'Bouw & installatie', 'desc' => 'Wij voeren de regie over de bouw. Daarna installeert ons eigen montageteam de complete inrichting.'],
                    ['nr' => '04', 'title' => 'Sleuteloverdracht', 'desc' => 'Schoonmaak, gezamenlijke oplevering en de sleutel. Klaar voor je opening.'],
                    ['nr' => '05', 'title' => 'Nazorg', 'desc' => 'Onderhoud, service en advies bij uitbreiding. Wij blijven betrokken.'],
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
