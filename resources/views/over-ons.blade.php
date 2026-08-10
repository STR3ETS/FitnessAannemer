@extends('layouts.app')

@section('title', 'Over ons | Fitness Aannemer')
@section('meta_description', 'Maak kennis met het team achter Fitness Aannemer. Specialisten in gymontwerp en inrichting met 60+ gerealiseerde projecten door heel de Benelux.')

@section('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "AboutPage",
    "name": "Over Fitness Aannemer",
    "description": "Maak kennis met het team achter Fitness Aannemer. Specialist in gymontwerp en inrichting, 60+ projecten in de Benelux.",
    "url": "{{ url('/over-ons') }}",
    "mainEntity": {
        "@@type": "Organization",
        "name": "Fitness Aannemer",
        "url": "{{ url('/') }}",
        "founder": [
            { "@@type": "Person", "name": "Stijn Harder" },
            { "@@type": "Person", "name": "Sil Wartena" }
        ],
        "areaServed": [
            { "@@type": "Country", "name": "Nederland" },
            { "@@type": "Country", "name": "België" }
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
        { "@@type": "ListItem", "position": 2, "name": "Over ons", "item": "{{ url('/over-ons') }}" }
    ]
}
</script>
@endsection

@section('content')
    {{-- BLOK 1: HERO --}}
    <section class="bg-secondary pt-32 lg:pt-40 pb-16 lg:pb-30 relative overflow-hidden">
        <div class="hidden lg:block absolute inset-y-0 right-0 w-1/2">
            <video src="{{ asset('assets/kr-blok4.mp4') }}" class="w-full h-full object-cover" autoplay muted loop playsinline></video>
            <div class="absolute inset-0 bg-gradient-to-r from-secondary via-secondary/80 to-transparent"></div>
            <div class="absolute w-[650px] h-[650px] rounded-full border border-white/[0.07] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"></div>
            <div class="absolute w-[400px] h-[400px] rounded-full border border-white/[0.10] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="ip-hero-el flex items-center gap-2 mb-6">
                <a href="{{ url('/') }}" class="text-white/40 text-xs font-medium hover:text-white transition" style="font-family: 'Inter'">Home</a>
                <i class="fa-solid fa-chevron-right text-white/20 text-[8px]"></i>
                <span class="text-white/70 text-xs font-medium" style="font-family: 'Inter'">Over ons</span>
            </div>
            <div class="max-w-3xl">
                <h1 class="ip-hero-el text-white text-4xl lg:text-6xl font-bold leading-[1]">De specialisten achter jouw <span class="text-primary">sportschool</span></h1>
                <p class="ip-hero-el text-white/60 text-sm lg:text-base leading-relaxed max-w-xl my-8">Fitness Aannemer ontwerpt, bouwt en richt complete sportscholen in door heel Nederland en België. Met een eigen ontwerpteam, een vast montageteam en een netwerk van bouwpartners realiseren wij projecten van compacte studio tot club van 1.000+ m².</p>
                <div class="ip-hero-el flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                    <a href="{{ url('/vrijblijvend-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Vrijblijvend adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                    <a href="{{ url('/projecten') }}" class="bg-white/10 border border-white/20 rounded-full px-6 py-3.5 text-white text-xs font-semibold hover:bg-white/20 transition">Bekijk projecten</a>
                </div>
            </div>
        </div>
    </section>

    {{-- BLOK 2: STATEMENT + KLANTLOGO'S --}}
    <section class="bg-secondary py-16 lg:py-28 overflow-hidden border-t border-white/[0.06]" id="oo-statement">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 text-center">
            <blockquote class="ip-fade text-white text-2xl lg:text-4xl font-bold leading-snug mb-16">
                "Elke sportschool die wij bouwen, moet zichzelf <span class="text-primary">terugverdienen</span>. Anders hebben wij ons werk niet goed gedaan."
            </blockquote>

            <div class="ip-fade">
                <span class="inline-block text-primary text-[10px] font-semibold uppercase tracking-widest mb-8">Gerealiseerd voor</span>
                <div class="flex flex-wrap items-center justify-center gap-8 lg:gap-12 opacity-50">
                    {{-- Klantlogo's worden toegevoegd zodra logo's beschikbaar zijn --}}
                    @php
                    $klanten = [
                        ['name' => 'Vitality Sports'],
                        ['name' => 'MANA'],
                        ['name' => 'De Krachtfabriek'],
                        ['name' => 'Ballin Fit'],
                        ['name' => 'ONA Gym'],
                        ['name' => 'Farm Fit'],
                        ['name' => 'FitCore'],
                    ];
                    @endphp
                    @foreach($klanten as $klant)
                        <span class="text-white/70 text-sm font-semibold" style="font-family: 'Inter'">{{ $klant['name'] }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- BLOK 3: WIE WIJ ZIJN --}}
    <section class="bg-white py-16 lg:py-32 relative overflow-hidden" id="oo-section1">
        <div class="horizontal-blob w-[700px] h-[700px]" style="background: radial-gradient(circle, rgba(82,171,226,0.2) 0%, rgba(82,171,226,0) 70%); top: -20%; left: -10%; animation: blob-float-1 18s ease-in-out infinite;"></div>
        <div class="horizontal-blob w-[500px] h-[500px]" style="background: radial-gradient(circle, rgba(82,171,226,0.15) 0%, rgba(82,171,226,0) 70%); top: 40%; right: -10%; animation: blob-float-2 22s ease-in-out infinite;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="ip-block-text">
                    <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-6">Wie wij zijn</span>
                    <h2 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.05] mb-8">Gebouwd op <span class="text-primary">de vloer</span></h2>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-4">Sinds 2016 zitten wij in de fitnessbranche. Oprichters Stijn Harder en Sil Wartena stonden jarenlang zelf op de vloer van commerciële clubs en zagen daar wat werkt en wat niet. Die tien jaar ervaring vormt de basis van elk project dat we vandaag realiseren.</p>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-8">Inmiddels staat er een team van specialisten in concept, ontwerp, sales, projectuitvoering en finance, met 60+ gerealiseerde projecten door heel de Benelux. Van boutique studio's tot commerciële clubs van meer dan 1.000 m², telkens vanuit dezelfde overtuiging: een sportschool moet niet alleen mooi zijn, maar ook renderen.</p>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                        <a href="{{ url('/vrijblijvend-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Vrijblijvend adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                        <a href="{{ url('/projecten') }}" class="bg-secondary/10 border border-secondary/20 rounded-full px-6 py-3.5 text-secondary text-xs font-semibold hover:bg-secondary/20 transition">Bekijk projecten</a>
                    </div>
                </div>
                <div class="ip-block-media rounded-3xl aspect-[4/3] overflow-hidden">
                    <video src="{{ asset('assets/oo-blok3.mp4') }}" class="w-full h-full object-cover" autoplay muted loop playsinline></video>
                </div>
            </div>
        </div>
    </section>

    {{-- BLOK 4: TEAMSECTIE --}}
    <section class="bg-secondary py-16 lg:py-32 overflow-hidden" id="oo-team">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="ip-fade text-center mb-6">
                <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-4">Het team</span>
                <h2 class="text-white text-4xl lg:text-5xl font-bold leading-[1.05] mb-6">De mensen achter <span class="text-primary">Fitness Aannemer</span></h2>
                <p class="text-white/50 text-sm leading-relaxed max-w-2xl mx-auto">Eén team dat jouw project draagt: van concept en ontwerp tot verkoop, planning en cijfers. De uitvoering op de vloer doen we met ons vaste montageteam en bouwpartners, onder onze regie.</p>
            </div>

            {{-- Groepsfoto placeholder --}}
            <div class="ip-fade rounded-3xl aspect-[21/9] overflow-hidden bg-white/[0.03] border border-white/[0.06] mb-12 flex items-center justify-center">
                <p class="text-white/20 text-sm">Groepsfoto volgt</p>
            </div>

            @php
            $team = [
                ['name' => 'Stijn Harder', 'role' => 'Founder', 'desc' => 'Marketing, strategie en concept.'],
                ['name' => 'Sil Wartena', 'role' => 'Founder', 'desc' => 'Strategie.'],
                ['name' => 'Timo', 'role' => 'Salesmanager', 'desc' => 'Jouw eerste aanspreekpunt van kennismaking tot offerte.'],
                ['name' => 'Kevin', 'role' => 'Accountmanager', 'desc' => 'Denkt mee van eerste vraag tot passend voorstel.'],
                ['name' => 'Lars', 'role' => 'Accountmanager', 'desc' => 'Denkt mee van eerste vraag tot passend voorstel.'],
                ['name' => 'Cacharel', 'role' => 'Design en projectuitvoering', 'desc' => 'Vertaalt het ontwerp naar de vloer.'],
                ['name' => 'Renee', 'role' => 'Design', 'desc' => 'Plattegronden en 3D-visualisaties.'],
                ['name' => 'Jeroen', 'role' => 'Data en finance', 'desc' => 'Bewaakt budgetten en cijfers achter elk project.'],
            ];
            @endphp

            <div class="ip-fade grid grid-cols-2 md:grid-cols-4 gap-5">
                @foreach($team as $lid)
                <div class="bg-white/[0.03] border border-white/[0.06] rounded-2xl overflow-hidden">
                    <div class="aspect-[3/4] bg-white/[0.02] flex items-center justify-center">
                        <i class="fa-solid fa-user text-white/10 text-3xl"></i>
                    </div>
                    <div class="p-5">
                        <h3 class="text-white font-bold text-sm mb-0.5">{{ $lid['name'] }}</h3>
                        <p class="text-primary text-[11px] font-semibold mb-2">{{ $lid['role'] }}</p>
                        <p class="text-white/40 text-xs leading-relaxed">{{ $lid['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- BLOK 5: ONZE AANPAK --}}
    <section class="bg-white py-16 lg:py-32 relative overflow-hidden" id="oo-section3">
        <div class="horizontal-blob w-[600px] h-[600px]" style="background: radial-gradient(circle, rgba(82,171,226,0.18) 0%, rgba(82,171,226,0) 70%); top: -15%; right: -5%; animation: blob-float-3 15s ease-in-out infinite;"></div>
        <div class="horizontal-blob w-[500px] h-[500px]" style="background: radial-gradient(circle, rgba(82,171,226,0.15) 0%, rgba(82,171,226,0) 70%); bottom: -20%; left: -8%; animation: blob-float-1 20s ease-in-out infinite;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="ip-block-text">
                    <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-6">Onze aanpak</span>
                    <h2 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.05] mb-8">Turnkey, met <span class="text-primary">korte lijnen</span></h2>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-4">Wij geloven in korte lijnen en vaste teams. Het ontwerp komt van ons eigen ontwerpteam, de installatie van ons vaste montageteam en de bouw voeren we uit met een vast netwerk van partneraannemers, onder onze regie. Zo houden we grip op kwaliteit, planning en budget.</p>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-8">Als officieel dealer van 18 merken werken we rechtstreeks met fabrikanten als Life Fitness, Matrix, Gym80 en Eleiko. Dat betekent toegang tot het volledige assortiment en onafhankelijk advies: wij stellen samen wat bij jouw club past, zonder voorkeur en zonder verplichtingen.</p>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                        <a href="{{ url('/vrijblijvend-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Vrijblijvend adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                        <a href="{{ url('/apparatuur') }}" class="bg-secondary/10 border border-secondary/20 rounded-full px-6 py-3.5 text-secondary text-xs font-semibold hover:bg-secondary/20 transition">Bekijk apparatuur</a>
                    </div>
                </div>
                <div class="ip-block-media rounded-3xl aspect-[4/3] overflow-hidden">
                    <video src="{{ asset('assets/oo-blok5.mp4') }}" class="w-full h-full object-cover" autoplay muted loop playsinline></video>
                </div>
            </div>
        </div>
    </section>

@endsection
