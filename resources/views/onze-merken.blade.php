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
    <section class="bg-secondary pt-32 lg:pt-40 pb-16 lg:pb-30 relative overflow-hidden">
        <div class="hidden lg:block absolute inset-y-0 right-0 w-1/2">
            <img src="{{ asset('assets/vl-blok2.jpg') }}" alt="" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-secondary via-secondary/80 to-transparent"></div>
            <div class="absolute w-[650px] h-[650px] rounded-full border border-white/[0.07] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"></div>
            <div class="absolute w-[400px] h-[400px] rounded-full border border-white/[0.10] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="ip-hero-el flex items-center gap-2 mb-6">
                <a href="{{ url('/') }}" class="text-white/40 text-xs font-medium hover:text-white transition" style="font-family: 'Inter'">Home</a>
                <i class="fa-solid fa-chevron-right text-white/20 text-[8px]"></i>
                <span class="text-white/70 text-xs font-medium" style="font-family: 'Inter'">Onze merken</span>
            </div>
            <div class="max-w-3xl">
                <h1 class="ip-hero-el text-white text-4xl lg:text-6xl font-bold leading-[1]">Onze <span class="text-primary">merken</span></h1>
                <p class="ip-hero-el text-white/60 text-sm lg:text-base leading-relaxed max-w-xl my-8">Niet gebonden aan een merk, wel aan kwaliteit. Wij adviseren objectief welke apparatuur past bij jouw concept, doelgroep en budget. Breed assortiment, scherpe condities.</p>
                <div class="ip-hero-el flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                    <a href="{{ url('/vrijblijvend-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Vrijblijvend adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
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
                        <a href="{{ url('/vrijblijvend-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Vrijblijvend adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                        <a href="{{ url('/apparatuur') }}" class="bg-secondary/10 border border-secondary/20 rounded-full px-6 py-3.5 text-secondary text-xs font-semibold hover:bg-secondary/20 transition">Bekijk apparatuur</a>
                    </div>
                </div>
                <div class="ip-block-media rounded-3xl aspect-[4/3] overflow-hidden">
                    <img src="{{ asset('assets/Matrix_Fitness.jpg') }}" alt="Matrix Fitness apparatuur" class="w-full h-full object-cover" loading="lazy">
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
                ['name' => 'Life Fitness', 'logo' => 'assets/wp-uploads/Life-Fitness.png', 'desc' => 'Wereldleider in fitnessapparatuur. Premium cardio- en krachtapparatuur voor commercieel gebruik.', 'cat' => 'Cardio en Kracht'],
                ['name' => 'Matrix Fitness', 'logo' => 'assets/wp-uploads/MATRIX-LOGO.png', 'desc' => 'Innovatieve fitnessoplossingen met geavanceerde technologie en strak design.', 'cat' => 'Cardio en Kracht'],
                ['name' => 'GYM80', 'logo' => 'assets/wp-uploads/LOGO_WEIss-1024x462-1.png', 'desc' => 'Duitse precisie-engineering. Commerciele krachtapparatuur van de hoogste kwaliteit.', 'cat' => 'Krachtapparatuur'],
                ['name' => 'Hammer Strength', 'logo' => 'assets/brand-logos/logo-hammer-strength.png', 'desc' => 'Plate-loaded krachtapparatuur voor serieuze krachtsporters. Robuust en professioneel.', 'cat' => 'Krachtapparatuur'],
                ['name' => 'Concept2', 'logo' => 'assets/wp-uploads/Concept2-1.png', 'desc' => 'De standaard in roeimachines, SkiErg en BikeErg. Onmisbaar voor functionele training.', 'cat' => 'Cardio'],
                ['name' => 'EGYM', 'logo' => 'assets/brand-logos/Logo_Egym.png', 'desc' => 'Digitale kracht- en flexibiliteitstraining. Slimme apparatuur die automatisch op de gebruiker afstemt.', 'cat' => 'Digitaal en Kracht'],
                ['name' => 'Eleiko', 'logo' => 'assets/brand-logos/Eleiko_Logo_2021_RGB-scaled.png', 'desc' => 'Zweedse topkwaliteit. Olympische halters, bumper plates en platforms voor serieuze kracht.', 'cat' => 'Functioneel'],
                ['name' => 'Watson', 'logo' => 'assets/brand-logos/Logo_Watson.png', 'desc' => 'Handgemaakte Britse krachtapparatuur. Gebouwd om generaties mee te gaan.', 'cat' => 'Krachtapparatuur'],
                ['name' => 'Nike Strength', 'logo' => 'assets/brand-logos/NikeStrength_Black_Logo_600px.png', 'desc' => 'Functionele trainingsapparatuur en accessoires met het kenmerkende Nike DNA.', 'cat' => 'Functioneel'],
                ['name' => 'ZIVA', 'logo' => 'assets/brand-logos/Logo_ZIVA.png', 'desc' => 'Professionele dumbbells, kettlebells en accessoires. Duurzaam en stijlvol ontworpen.', 'cat' => 'Functioneel'],
                ['name' => 'Vision', 'logo' => 'assets/brand-logos/Vision_Fitness_Logo.jpg', 'desc' => 'Betrouwbare cardio-apparatuur voor commercieel en thuisgebruik. Solide en onderhoudsvriendelijk.', 'cat' => 'Cardio en Kracht'],
                ['name' => 'YourReformer', 'logo' => 'assets/brand-logos/Logo_YourReformer.png', 'desc' => 'Reformers en pilatesapparatuur voor studio\'s. Compact, stijlvol en professioneel.', 'cat' => 'Reformers'],
                ['name' => 'LifeMaxx', 'logo' => 'assets/brand-logos/Logo_Lifemaxx.webp', 'desc' => 'Nederlands merk voor dumbbells, racks en functionele trainingstools. Breed assortiment.', 'cat' => 'Functioneel en Kracht'],
                ['name' => 'TKO', 'logo' => 'assets/brand-logos/Logo_TKO.webp', 'desc' => 'Professionele krachtaccessoires, bags en opslagsystemen voor commerciele gyms.', 'cat' => 'Cardio en Kracht'],
                ['name' => 'Assault Fitness', 'logo' => 'assets/brand-logos/assault_fitness_logo.webp', 'desc' => 'AirBikes en runners voor high-intensity training. Gebouwd voor de zwaarste workouts.', 'cat' => 'Cardio'],
                ['name' => 'Sprinttracks', 'logo' => 'assets/brand-logos/Logo_Sprinttracks.png', 'desc' => 'Professionele sprintbanen voor indoor gebruik. Ideaal voor functionele en HIIT zones.', 'cat' => 'Vloeren'],
                ['name' => 'InBody', 'logo' => 'assets/brand-logos/Logo_Inbody.png', 'desc' => 'Lichaamsanalyse en compositiemetingen. Professionele meetapparatuur voor resultaattracking.', 'cat' => 'Analyse en metingen'],
            ];
            @endphp

            <div class="ip-fade grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mb-20">
                @foreach($merken as $merk)
                <div class="bg-white/[0.03] border border-white/[0.06] rounded-2xl p-7 hover:border-primary/30 hover:bg-primary/[0.04] transition-all duration-300">
                    <div class="h-12 flex items-center mb-6">
                        @if($merk['logo'])
                            <img src="{{ asset($merk['logo']) }}" alt="{{ $merk['name'] }}" class="h-7 w-auto object-contain" style="filter: brightness(0) invert(1); opacity: 0.7;">
                        @else
                            <span class="text-white/70 text-lg font-bold" style="font-family: 'Inter'">{{ $merk['name'] }}</span>
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
                        <a href="{{ url('/vrijblijvend-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Vrijblijvend adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
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
