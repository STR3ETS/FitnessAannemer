@extends('layouts.app')

@section('title', 'Turnkey sportschool bouwen | Fitness Aannemer')
@section('meta_description', 'Turnkey sportschool bouwen: van ontwerp tot sleuteloverdracht onder één regie. Eén aanspreekpunt, vaste opleverdatum, complete inrichting. Plan een gratis adviesgesprek.')

@section('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Service",
    "name": "Turnkey Sportschool Bouwen",
    "description": "Turnkey sportschool bouwen: van ontwerp tot sleuteloverdracht. Eén partij voor bouwregie en complete inrichting.",
    "url": "{{ url('/diensten/turnkey-sportschool-bouwen') }}",
    "provider": {
        "@@type": "Organization",
        "name": "Fitness Aannemer",
        "url": "{{ url('/') }}"
    },
    "areaServed": [
        { "@@type": "Country", "name": "Nederland" },
        { "@@type": "Country", "name": "België" }
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
        { "@@type": "ListItem", "position": 3, "name": "Turnkey sportschool bouwen", "item": "{{ url('/diensten/turnkey-sportschool-bouwen') }}" }
    ]
}
</script>
@endsection

@section('content')
    {{-- BLOK 1: HERO --}}
    <section class="bg-secondary pt-32 lg:pt-40 pb-16 lg:pb-30 relative overflow-hidden" id="tk-hero">
        <div class="hidden lg:block absolute inset-y-0 right-0 w-1/2">
            <img src="{{ asset('assets/tk-hero.jpg') }}" alt="" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-secondary via-secondary/80 to-transparent"></div>
            <div class="absolute w-[650px] h-[650px] rounded-full border border-white/[0.07] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"></div>
            <div class="absolute w-[400px] h-[400px] rounded-full border border-white/[0.10] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="ip-hero-el flex items-center gap-2 mb-6">
                <a href="{{ url('/diensten') }}" class="text-white/40 text-xs font-medium hover:text-white transition" style="font-family: 'Inter'">Diensten</a>
                <i class="fa-solid fa-chevron-right text-white/20 text-[8px]"></i>
                <span class="text-white/70 text-xs font-medium" style="font-family: 'Inter'">Turnkey sportschool bouwen</span>
            </div>
            <div class="max-w-3xl">
                <h1 class="ip-hero-el text-white text-4xl lg:text-6xl font-bold leading-[1]">Turnkey sportschool<br><span class="text-primary">bouwen</span></h1>
                <p class="ip-hero-el text-white/60 text-sm lg:text-base leading-relaxed max-w-xl my-8">Eén partij die alles regelt: ontwerp, bouw, inrichting en oplevering. Wij stellen het bouwteam samen, voeren de totale regie en leveren zelf alles wat jouw sportschool tot sportschool maakt.</p>
                <div class="ip-hero-el flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                    <a href="{{ url('/vrijblijvend-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Vrijblijvend adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                    <a href="{{ url('/projecten') }}" class="bg-white/10 border border-white/20 rounded-full px-6 py-3.5 text-white text-xs font-semibold hover:bg-white/20 transition">Bekijk onze projecten</a>
                </div>
            </div>
        </div>
    </section>

    {{-- BLOK 2: TOTALE REGIE --}}
    <section class="bg-white py-16 lg:py-32 relative overflow-hidden" id="tk-regie" data-header-light>
        <div class="horizontal-blob w-[700px] h-[700px]" style="background: radial-gradient(circle, rgba(82,171,226,0.2) 0%, rgba(82,171,226,0) 70%); top: -20%; left: -10%; animation: blob-float-1 18s ease-in-out infinite;"></div>
        <div class="horizontal-blob w-[500px] h-[500px]" style="background: radial-gradient(circle, rgba(82,171,226,0.15) 0%, rgba(82,171,226,0) 70%); top: 40%; right: -10%; animation: blob-float-2 22s ease-in-out infinite;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="ip-block-text">
                    <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-6">Totale regie</span>
                    <h2 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.05] mb-8">Eén aanspreekpunt, <span class="text-primary">geen gedoe</span></h2>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-4">Een sportschool bouwen betekent normaal schakelen met een aannemer, elektricien, vloerenlegger, apparatuurleverancier en nog vijf andere partijen. Bij ons niet. Wij stellen per project een bouwteam samen van vaste partneraannemers en specialisten, en voeren de totale regie over elke fase.</p>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-8">Van sloop en wanden tot installaties, gietvloeren en schilderwerk; jij hebt één aanspreekpunt, één planning en één opleverdatum. Heb je zelf al een schilder of installateur? Die schuift gewoon aan in ons bouwteam, onder onze regie.</p>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                        <a href="{{ url('/vrijblijvend-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Vrijblijvend adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                        <a href="{{ url('/projecten') }}" class="bg-secondary/10 border border-secondary/20 rounded-full px-6 py-3.5 text-secondary text-xs font-semibold hover:bg-secondary/20 transition">Bekijk onze projecten</a>
                    </div>
                </div>
                <div class="ip-block-media rounded-3xl aspect-[4/3] overflow-hidden">
                    <video src="{{ asset('assets/tk-regie.mp4') }}" class="w-full h-full object-cover" autoplay muted loop playsinline></video>
                </div>
            </div>
        </div>
    </section>

    {{-- BLOK 3: PROCES TIMELINE --}}
    <section class="bg-secondary py-16 lg:py-32 overflow-hidden" id="tk-process">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="text-center mb-20">
                <span class="ip-fade inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-4">Hoe wij werken</span>
                <h2 class="ip-fade text-white text-4xl lg:text-5xl font-bold leading-[1.05]">Van eerste gesprek tot<br><span class="text-primary">sleuteloverdracht</span></h2>
            </div>

            @php
            $stappen = [
                [
                    'nr' => '01',
                    'icon' => 'fa-comments',
                    'title' => 'Kennismaking & intake',
                    'desc' => 'We starten met een vrijblijvend gesprek. Wat is jouw plan? Wie moet er straks trainen én betalen? Welke ruimte heb je op het oog? We brengen alles in kaart, van ambitie tot budget.',
                    'detail' => 'Bij ons op kantoor of op locatie',
                    'video' => '/assets/tk-step01.mp4',
                ],
                [
                    'nr' => '02',
                    'icon' => 'fa-compass-drafting',
                    'title' => 'Ontwerp & projectplan',
                    'desc' => 'Ons ontwerpteam maakt de plattegrond en fotorealistische 3D-visualisatie, inclusief apparatuurkeuze. Alles komt samen in een helder projectplan met planning en transparante offerte.',
                    'detail' => 'Compleet en transparant',
                    'video' => '/assets/tk-step02.mp4',
                ],
                [
                    'nr' => '03',
                    'icon' => 'fa-helmet-safety',
                    'title' => 'Bouw onder onze regie',
                    'desc' => 'Wij stellen het bouwteam samen en voeren de regie over de volledige verbouwing: wanden, vloeren, installaties, schilderwerk en afwerking. Jij hoeft nergens achteraan.',
                    'detail' => 'Eén planning, één aanspreekpunt',
                    'video' => '/shorts/fitnessaannemer-short-4.mp4',
                ],
                [
                    'nr' => '04',
                    'icon' => 'fa-truck-fast',
                    'title' => 'Levering & installatie',
                    'desc' => 'Terwijl de bouw loopt, is de apparatuur al onderweg. Ons montageteam installeert de complete inrichting: apparatuur, vloeren, verlichting, spiegels, kluisjes, meubels en audio.',
                    'detail' => 'Eigen montageteam, NL & BE breed',
                    'video' => '/assets/tk-step04.mp4',
                ],
                [
                    'nr' => '05',
                    'icon' => 'fa-key',
                    'title' => 'Schoonmaak & sleuteloverdracht',
                    'desc' => 'Ons schoonmaakteam maakt de volledige ruimte grondig schoon. Daarna lopen we samen elk punt van het ontwerp na. Klopt alles? Dan krijg jij de sleutel en kan de opening gepland worden.',
                    'detail' => 'Klaar voor je eerste leden',
                    'video' => '/assets/tk-step05.mp4',
                ],
            ];
            @endphp

            <div class="relative">
                <div class="absolute left-6 lg:left-1/2 top-0 bottom-0 w-px bg-white/[0.06] lg:-translate-x-px">
                    <div class="ip-timeline-fill w-full bg-primary/40 origin-top" style="height: 0%"></div>
                </div>

                <div class="space-y-16 lg:space-y-24">
                    @foreach($stappen as $index => $stap)
                    <div class="ip-step relative flex items-start gap-8 lg:gap-0 {{ $index % 2 === 0 ? '' : 'lg:flex-row-reverse' }}">
                        <div class="lg:w-1/2 {{ $index % 2 === 0 ? 'lg:pr-16 lg:text-right' : 'lg:pl-16' }} pl-16 lg:pl-0">
                            <span class="text-primary/30 text-6xl font-bold leading-none" style="font-family: 'Inter'">{{ $stap['nr'] }}</span>
                            <h3 class="text-white text-xl lg:text-2xl font-bold mt-2 mb-3">{{ $stap['title'] }}</h3>
                            <p class="text-white/45 text-sm leading-relaxed mb-3">{{ $stap['desc'] }}</p>
                            <span class="inline-flex items-center gap-2 text-primary/60 text-xs font-medium">
                                <i class="fa-solid fa-circle-check text-[10px]"></i> {{ $stap['detail'] }}
                            </span>
                        </div>

                        <div class="absolute left-6 lg:left-1/2 -translate-x-1/2 w-12 h-12 rounded-xl bg-secondary border-2 border-white/[0.08] flex items-center justify-center z-10 ip-dot">
                            <i class="fa-solid {{ $stap['icon'] }} text-primary text-sm"></i>
                        </div>

                        <div class="hidden lg:block lg:w-1/2 {{ $index % 2 === 0 ? 'lg:pl-16' : 'lg:pr-16' }}">
                            <div class="rounded-2xl overflow-hidden aspect-[4/3] bg-white/[0.03] border border-white/[0.06]">
                                <video src="{{ asset($stap['video']) }}" class="w-full h-full object-cover" autoplay muted loop playsinline></video>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- BLOK 4: SLIMME PLANNING --}}
    <section class="bg-white py-16 lg:py-32 relative overflow-hidden" id="tk-planning" data-header-light>
        <div class="horizontal-blob w-[600px] h-[600px]" style="background: radial-gradient(circle, rgba(82,171,226,0.18) 0%, rgba(82,171,226,0) 70%); top: -15%; right: -5%; animation: blob-float-3 15s ease-in-out infinite;"></div>
        <div class="horizontal-blob w-[500px] h-[500px]" style="background: radial-gradient(circle, rgba(82,171,226,0.15) 0%, rgba(82,171,226,0) 70%); bottom: -20%; left: -8%; animation: blob-float-1 20s ease-in-out infinite;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="ip-block-media rounded-3xl aspect-[4/3] overflow-hidden">
                    <img src="{{ asset('assets/tk-planning.jpg') }}" alt="Slimme planning sportschoolproject" class="w-full h-full object-cover">
                </div>
                <div class="ip-block-text">
                    <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-6">Slimme planning</span>
                    <h2 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.05] mb-8">Geen week <span class="text-primary">verloren</span></h2>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-4">De doorlooptijd van een sportschoolproject wordt vooral bepaald door de levertijd van apparatuur: gemiddeld 12 tot 14 weken. Die tijd benutten we slim. Terwijl de apparatuur onderweg is, bouwen en richten wij de ruimte in.</p>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-8">Zo staat alles klaar zodra de machines arriveren en loopt de bouw nooit te wachten op de levering, of andersom. In het adviesgesprek krijg je een concrete planning voor jouw project, met een vaste opleverdatum.</p>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                        <a href="{{ url('/vrijblijvend-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Vrijblijvend adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                        <a href="{{ url('/projecten') }}" class="bg-secondary/10 border border-secondary/20 rounded-full px-6 py-3.5 text-secondary text-xs font-semibold hover:bg-secondary/20 transition">Bekijk onze projecten</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- BLOK 5: COMPLETE INRICHTING --}}
    <section class="bg-white py-16 lg:py-32 relative overflow-hidden border-t border-secondary/[0.04]" id="tk-inrichting" data-header-light>
        <div class="horizontal-blob w-[700px] h-[700px]" style="background: radial-gradient(circle, rgba(82,171,226,0.15) 0%, rgba(82,171,226,0) 70%); top: -25%; left: -10%; animation: blob-float-2 20s ease-in-out infinite;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="ip-block-text">
                    <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-6">Complete inrichting</span>
                    <h2 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.05] mb-8">Alles uit <span class="text-primary">één hand</span></h2>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-4">Naast de bouw leveren wij zelf de volledige inrichting: apparatuur van 18 merken, sportvloeren zoals PVC, laminaat, rubberen tegels en Sprinttracks, verlichting, spiegels, kluisjes, meubels en audio.</p>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-8">Alles wordt ontworpen door ons eigen ontwerpteam en geïnstalleerd door ons eigen montageteam. Zo sluit elk onderdeel naadloos op elkaar aan, van plattegrond tot de laatste machine.</p>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                        <a href="{{ url('/vrijblijvend-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Vrijblijvend adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                        <a href="{{ url('/onze-merken') }}" class="bg-secondary/10 border border-secondary/20 rounded-full px-6 py-3.5 text-secondary text-xs font-semibold hover:bg-secondary/20 transition">Bekijk alle merken</a>
                    </div>
                </div>
                <div class="ip-block-media rounded-3xl aspect-[4/3] overflow-hidden">
                    <img src="{{ asset('assets/tk-inrichting.jpg') }}" alt="Complete inrichting sportschool" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

@endsection
