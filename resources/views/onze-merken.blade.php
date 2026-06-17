@extends('layouts.app')

@section('title', 'Onze Merken | Fitness Aannemer')
@section('meta_description', 'Fitness Aannemer werkt met topmerken als Life Fitness, Matrix, Concept2, KingsBox, Gym80 en Keiser. Ontdek ons assortiment.')

@section('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "WebPage",
    "name": "Onze Merken",
    "description": "Fitness Aannemer werkt met topmerken als Life Fitness, Matrix, Concept2, KingsBox, Gym80 en Keiser.",
    "url": "{{ url('/onze-merken') }}"
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        { "@@type": "ListItem", "position": 1, "name": "Home", "item": "{{ url('/') }}" },
        { "@@type": "ListItem", "position": 2, "name": "Onze Merken", "item": "{{ url('/onze-merken') }}" }
    ]
}
</script>
@endsection

@section('content')
    <section class="bg-secondary pt-32 lg:pt-40 pb-16 lg:pb-30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="ip-hero-el flex items-center gap-2 mb-6">
                <a href="{{ url('/') }}" class="text-white/40 text-xs font-medium hover:text-white transition" style="font-family: 'Inter Tight'">Home</a>
                <i class="fa-solid fa-chevron-right text-white/20 text-[8px]"></i>
                <span class="text-white/70 text-xs font-medium" style="font-family: 'Inter Tight'">Onze merken</span>
            </div>
            <div class="max-w-3xl">
                <h1 class="ip-hero-el text-white text-4xl lg:text-6xl font-bold leading-[1]">Onze <span class="text-primary">merken</span></h1>
                <p class="ip-hero-el text-white/60 text-sm lg:text-base leading-relaxed max-w-xl my-8">Wij werken uitsluitend met topmerken uit de fitnessindustrie. Kwaliteit, duurzaamheid en innovatie staan bij ons voorop. Dankzij directe partnerships krijg je het beste assortiment tegen scherpe condities.</p>
                <div class="ip-hero-el flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                    <a href="{{ url('/gratis-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Gratis adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                    <a href="{{ url('/apparatuur') }}" class="bg-white/10 border border-white/20 rounded-full px-6 py-3.5 text-white text-xs font-semibold hover:bg-white/20 transition">Bekijk apparatuur</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-16 lg:py-32 relative overflow-hidden" id="om-section1">
        <div class="horizontal-blob w-[700px] h-[700px]" style="background: radial-gradient(circle, rgba(82,171,226,0.2) 0%, rgba(82,171,226,0) 70%); top: -20%; left: -10%; animation: blob-float-1 18s ease-in-out infinite;"></div>
        <div class="horizontal-blob w-[500px] h-[500px]" style="background: radial-gradient(circle, rgba(82,171,226,0.15) 0%, rgba(82,171,226,0) 70%); top: 40%; right: -10%; animation: blob-float-2 22s ease-in-out infinite;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="ip-block-text">
                    <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-6">Premium partners</span>
                    <h2 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.05] mb-8">Directe lijnen met <span class="text-primary">topfabrikanten</span></h2>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-4">Wij werken rechtstreeks samen met de grootste namen in de fitnessindustrie. Dat betekent geen tussenhandel, scherpe prijzen en toegang tot het volledige assortiment van elk merk.</p>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-8">Van Life Fitness en Matrix voor cardio en kracht, tot Concept2 voor functionele training en Gym80 voor Duitse precisie-krachtapparatuur. Wij adviseren objectief welke merken en modellen het beste passen bij jouw concept.</p>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                        <a href="{{ url('/gratis-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Gratis adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                        <a href="{{ url('/apparatuur') }}" class="bg-secondary/10 border border-secondary/20 rounded-full px-6 py-3.5 text-secondary text-xs font-semibold hover:bg-secondary/20 transition">Bekijk apparatuur</a>
                    </div>
                </div>
                <div class="ip-block-media rounded-3xl aspect-[4/3] overflow-hidden">
                    <img src="{{ asset('assets/wp-uploads/nike-4-2-1024x683.jpg') }}" alt="Premium fitnessapparatuur showroom" class="w-full h-full object-cover" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-secondary py-16 lg:py-32 overflow-hidden" id="om-section2">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="ip-fade text-center mb-16">
                <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-4">Ons assortiment</span>
                <h2 class="text-white text-4xl lg:text-5xl font-bold leading-[1.05]">Topapparatuur van de <span class="text-primary">beste merken</span></h2>
            </div>

            @php
            $merken = [
                ['name' => 'Life Fitness', 'logo' => 'assets/wp-uploads/Life-Fitness.png', 'desc' => 'Wereldleider in fitnessapparatuur. Premium cardio- en krachtapparatuur voor commercieel gebruik.', 'cat' => 'Cardio & Kracht'],
                ['name' => 'Matrix Fitness', 'logo' => 'assets/wp-uploads/MATRIX-LOGO.png', 'desc' => 'Innovatieve fitnessoplossingen met geavanceerde technologie en strak design.', 'cat' => 'Cardio & Kracht'],
                ['name' => 'Gym80', 'logo' => 'assets/wp-uploads/LOGO_WEIss-1024x462-1.png', 'desc' => 'Duitse precisie-engineering. Commerciele krachtapparatuur van de hoogste kwaliteit.', 'cat' => 'Krachtapparatuur'],
                ['name' => 'Hammer Strength', 'logo' => 'assets/wp-uploads/logo-hammer-strength-2.png', 'desc' => 'Plate-loaded krachtapparatuur voor serieuze krachtsporters. Robuust en professioneel.', 'cat' => 'Krachtapparatuur'],
                ['name' => 'Concept2', 'logo' => 'assets/wp-uploads/Concept2-1.png', 'desc' => 'De standaard in roeimachines, SkiErg en BikeErg. Onmisbaar voor functionele training.', 'cat' => 'Functioneel'],
                ['name' => 'Keiser', 'logo' => 'assets/wp-uploads/keiser-scaled.png', 'desc' => 'Pneumatische weerstandstraining. Innovatief, veilig en ideaal voor functional training.', 'cat' => 'Functioneel & Kracht'],
                ['name' => 'StairMaster', 'logo' => 'assets/wp-uploads/StairMaster-Logo.png', 'desc' => 'De ultieme klimtraining. StepMills en StairClimbers voor intensieve cardio workouts.', 'cat' => 'Cardio'],
                ['name' => 'Star Trac', 'logo' => 'assets/wp-uploads/acf.Logo-Star-Trac-scaled.webp', 'desc' => 'Cardio-apparatuur met focus op gebruiksgemak en entertainment-integratie.', 'cat' => 'Cardio'],
                ['name' => 'Stockz', 'logo' => 'assets/wp-uploads/6239bf5b33d83711745b1edb_StockZ-Logo-Primary-CMYK-Black.png', 'desc' => 'Functionele trainingsoplossingen en storage-systemen voor een opgeruimde gym.', 'cat' => 'Functioneel & Opslag'],
                ['name' => 'Next Round', 'logo' => 'assets/wp-uploads/66840a042cc873f7252180df_Full-width-logo.png', 'desc' => 'Boxing en MMA apparatuur. Bokszakken, ringen en trainingsaccessoires.', 'cat' => 'Boksen & MMA'],
                ['name' => 'Clubjoy', 'logo' => 'assets/wp-uploads/LOGO-CLUBJOY-LIGGEND-KLEUR-e1643845894830.png', 'desc' => 'Groepslessen en virtual training oplossingen voor een compleet lesaanbod.', 'cat' => 'Groepsfitness'],
                ['name' => 'KingsBox', 'logo' => null, 'desc' => 'Functionele fitness en CrossFit apparatuur. Rigs, racks en accessoires voor elke box.', 'cat' => 'Functioneel'],
            ];
            @endphp

            <div class="ip-fade grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mb-20">
                @foreach($merken as $merk)
                <div class="bg-white/[0.03] border border-white/[0.06] rounded-2xl p-7 hover:border-primary/30 hover:bg-primary/[0.04] transition-all duration-300">
                    <div class="h-12 flex items-center mb-6">
                        @if($merk['logo'])
                            <img src="{{ asset($merk['logo']) }}" alt="{{ $merk['name'] }}" class="h-7 w-auto object-contain" style="filter: brightness(0) invert(1); opacity: 0.7;">
                        @else
                            <span class="text-white/70 text-lg font-bold" style="font-family: 'Inter Tight'">{{ $merk['name'] }}</span>
                        @endif
                    </div>
                    <p class="text-white/40 text-sm leading-relaxed mb-4">{{ $merk['desc'] }}</p>
                    <span class="inline-block bg-primary/10 text-primary text-[10px] font-semibold px-2.5 py-1 rounded-full border border-primary/20">{{ $merk['cat'] }}</span>
                </div>
                @endforeach
            </div>

            <div class="ip-fade grid grid-cols-2 md:grid-cols-4 gap-8 text-center pt-16 border-t border-white/[0.06]">
                <div>
                    <p class="text-primary text-4xl lg:text-5xl font-bold mb-2">50+</p>
                    <p class="text-white/40 text-xs uppercase font-semibold tracking-wider">Premium merken</p>
                </div>
                <div>
                    <p class="text-primary text-4xl lg:text-5xl font-bold mb-2">10.000+</p>
                    <p class="text-white/40 text-xs uppercase font-semibold tracking-wider">Producten</p>
                </div>
                <div>
                    <p class="text-primary text-4xl lg:text-5xl font-bold mb-2">Direct</p>
                    <p class="text-white/40 text-xs uppercase font-semibold tracking-wider">Van de fabrikant</p>
                </div>
                <div>
                    <p class="text-primary text-4xl lg:text-5xl font-bold mb-2">A-Z</p>
                    <p class="text-white/40 text-xs uppercase font-semibold tracking-wider">Compleet assortiment</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-16 lg:py-32 relative overflow-hidden" id="om-section3">
        <div class="horizontal-blob w-[600px] h-[600px]" style="background: radial-gradient(circle, rgba(82,171,226,0.18) 0%, rgba(82,171,226,0) 70%); top: -15%; right: -5%; animation: blob-float-3 15s ease-in-out infinite;"></div>
        <div class="horizontal-blob w-[500px] h-[500px]" style="background: radial-gradient(circle, rgba(82,171,226,0.15) 0%, rgba(82,171,226,0) 70%); bottom: -20%; left: -8%; animation: blob-float-1 20s ease-in-out infinite;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="ip-block-text">
                    <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-6">Objectief advies</span>
                    <h2 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.05] mb-8">Het juiste merk voor <span class="text-primary">jouw concept</span></h2>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-4">Elk merk heeft zijn eigen sterke punten. Life Fitness voor all-round commercieel gebruik, Gym80 voor high-end kracht, Concept2 voor functionele training. Wij adviseren objectief welke combinatie past bij jouw situatie.</p>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-8">Geen vaste merkverplichtingen, geen verborgen kosten. Wij stellen samen met jou het optimale pakket samen op basis van concept, doelgroep en budget. Inclusief levering, installatie en garantie.</p>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                        <a href="{{ url('/gratis-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Gratis adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                        <a href="{{ url('/apparatuur') }}" class="bg-secondary/10 border border-secondary/20 rounded-full px-6 py-3.5 text-secondary text-xs font-semibold hover:bg-secondary/20 transition">Bekijk apparatuur</a>
                    </div>
                </div>
                <div class="ip-block-media rounded-3xl aspect-[4/3] overflow-hidden">
                    <img src="{{ asset('assets/wp-uploads/FULL-Ballin-Fit-002-WF206683-scaled.jpg') }}" alt="Premium gym met topmerken" class="w-full h-full object-cover" loading="lazy">
                </div>
            </div>
        </div>
    </section>

@endsection
