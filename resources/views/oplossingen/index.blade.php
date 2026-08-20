@extends('layouts.app')

@section('title', 'Oplossingen voor elk concept | Fitness Aannemer')
@section('meta_description', 'Van sportschool tot PT studio, van hotel gym tot Hyrox box. Wij ontwerpen, bouwen en richten elk concept in. Bekijk onze oplossingen per type sportschool.')

@section('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Service",
    "name": "Oplossingen",
    "description": "Oplossingen voor elk type sportschool: commercieel, PT studio, hotel gym, Hyrox box en meer.",
    "url": "{{ url('/oplossingen') }}",
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
        { "@@type": "ListItem", "position": 2, "name": "Oplossingen", "item": "{{ url('/oplossingen') }}" }
    ]
}
</script>
@endsection

@section('content')
    <section class="bg-secondary pt-32 lg:pt-40 pb-16 lg:pb-30 relative overflow-hidden" id="opl-hero">
        <div class="hidden lg:block absolute inset-y-0 right-0 w-1/2">
            <img src="{{ asset('assets/opl-hero.jpg') }}" alt="Oplossingen per concept" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-secondary via-secondary/80 to-transparent"></div>
            <div class="absolute w-[650px] h-[650px] rounded-full border border-white/[0.07] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"></div>
            <div class="absolute w-[400px] h-[400px] rounded-full border border-white/[0.10] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="ip-hero-el flex items-center gap-2 mb-6">
                <a href="{{ url('/') }}" class="text-white/40 text-xs font-medium hover:text-white transition" style="font-family: 'Inter'">Home</a>
                <i class="fa-solid fa-chevron-right text-white/20 text-[8px]"></i>
                <span class="text-white/70 text-xs font-medium" style="font-family: 'Inter'">Oplossingen</span>
            </div>
            <div class="max-w-3xl">
                <h1 class="ip-hero-el text-white text-4xl lg:text-6xl font-bold leading-[1]">Voor elk concept<br><span class="text-primary">de juiste aanpak</span></h1>
                <p class="ip-hero-el text-white/60 text-sm lg:text-base leading-relaxed max-w-xl my-8">Een commerciële sportschool vraagt iets anders dan een PT studio, en een hotel gym iets anders dan een Hyrox box. Wij kennen de verschillen en ontwerpen, bouwen en richten elk concept in.</p>
                <div class="ip-hero-el flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                    <a href="{{ url('/vrijblijvend-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Vrijblijvend adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                    <a href="{{ url('/projecten') }}" class="bg-white/10 border border-white/20 rounded-full px-6 py-3.5 text-white text-xs font-semibold hover:bg-white/20 transition">Bekijk onze projecten</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-16 lg:py-32 relative overflow-hidden" id="opl-logica" data-header-light>
        <div class="horizontal-blob w-[700px] h-[700px]" style="background: radial-gradient(circle, rgba(82,171,226,0.2) 0%, rgba(82,171,226,0) 70%); top: -20%; left: -10%; animation: blob-float-1 18s ease-in-out infinite;"></div>
        <div class="horizontal-blob w-[500px] h-[500px]" style="background: radial-gradient(circle, rgba(82,171,226,0.15) 0%, rgba(82,171,226,0) 70%); top: 40%; right: -10%; animation: blob-float-2 22s ease-in-out infinite;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="ip-block-text">
                    <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-6">Elk concept zijn eigen logica</span>
                    <h2 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.05] mb-8">Geen standaardformule, wel <span class="text-primary">een bewezen aanpak</span></h2>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-4">Elk type sportschool heeft zijn eigen verdienmodel, doelgroep en eisen aan de ruimte. Een commerciële club draait op ledenstromen en retentie, een PT studio op beleving en exclusiviteit, een hotel gym op gastvervaring. Dat vraagt telkens om andere keuzes in indeling, apparatuur en afwerking.</p>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-8">Onze aanpak blijft daarbij hetzelfde: wij ontwerpen, bouwen en richten in vanuit één regie, met ons eigen ontwerpteam en montageteam. Met 60+ gerealiseerde projecten weten we wat werkt per concept, en wat niet.</p>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                        <a href="{{ url('/vrijblijvend-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Vrijblijvend adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                        <a href="{{ url('/projecten') }}" class="bg-secondary/10 border border-secondary/20 rounded-full px-6 py-3.5 text-secondary text-xs font-semibold hover:bg-secondary/20 transition">Bekijk onze projecten</a>
                    </div>
                </div>
                <div class="ip-block-media rounded-3xl aspect-[4/3] overflow-hidden">
                    <img src="{{ asset('assets/opl-blok2.jpg') }}" alt="Bewezen aanpak per concept" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-secondary py-16 lg:py-32 relative overflow-hidden" id="opl-aanpak">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="ip-block-media rounded-3xl aspect-[4/3] overflow-hidden">
                    <img src="{{ asset('assets/opl-blok3.jpg') }}" alt="Doordacht ontwerp sportschool" class="w-full h-full object-cover">
                </div>
                <div class="ip-block-text">
                    <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-6">Onze aanpak</span>
                    <h2 class="text-white text-3xl lg:text-5xl font-bold leading-[1.05] mb-8">Doordacht ontwerp, <span class="text-primary">maximaal resultaat</span></h2>
                    <p class="text-white/50 text-sm leading-relaxed mb-4">Elke ruimte begint met een grondige analyse van jouw doelgroep, locatie en ambities. Wij vertalen dit naar een plattegrond met logische looplijnen, duidelijke zones en optimale apparatuurplaatsing, passend bij jouw concept.</p>
                    <p class="text-white/50 text-sm leading-relaxed mb-8">Van sportschool tot studio en van hotel tot Hyrox box: wij zorgen dat elke vierkante meter bijdraagt aan de ervaring van jouw leden én aan jouw verdienmodel.</p>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                        <a href="{{ url('/vrijblijvend-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Vrijblijvend adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                        <a href="{{ url('/projecten') }}" class="bg-white/10 border border-white/20 rounded-full px-6 py-3.5 text-white text-xs font-semibold hover:bg-white/20 transition">Bekijk onze projecten</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-16 lg:py-32 relative overflow-hidden" id="opl-realisatie" data-header-light>
        <div class="horizontal-blob w-[600px] h-[600px]" style="background: radial-gradient(circle, rgba(82,171,226,0.18) 0%, rgba(82,171,226,0) 70%); top: -15%; right: -5%; animation: blob-float-3 15s ease-in-out infinite;"></div>
        <div class="horizontal-blob w-[500px] h-[500px]" style="background: radial-gradient(circle, rgba(82,171,226,0.15) 0%, rgba(82,171,226,0) 70%); bottom: -20%; left: -8%; animation: blob-float-1 20s ease-in-out infinite;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="ip-block-text">
                    <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-6">Complete realisatie</span>
                    <h2 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.05] mb-8">Van ontwerp tot <span class="text-primary">sleuteloverdracht</span></h2>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-4">Welk concept je ook bouwt, bij ons werk je altijd met één partij. Wij verzorgen het interieurontwerp met 3D-visualisatie, voeren de regie over de bouw en leveren de complete inrichting: apparatuur van 18 merken, vloeren, verlichting, spiegels, kluisjes, meubels en audio.</p>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-8">Zo weet je vooraf precies hoe jouw ruimte eruit komt te zien, wat het kost en wanneer je open kunt. Eén aanspreekpunt, één planning, één opleverdatum.</p>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                        <a href="{{ url('/vrijblijvend-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Vrijblijvend adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                        <a href="{{ url('/diensten') }}" class="bg-secondary/10 border border-secondary/20 rounded-full px-6 py-3.5 text-secondary text-xs font-semibold hover:bg-secondary/20 transition">Bekijk onze diensten</a>
                    </div>
                </div>
                <div class="ip-block-media rounded-3xl aspect-[4/3] overflow-hidden">
                    <video src="{{ asset('assets/opl-blok4.mp4') }}" class="w-full h-full object-cover" autoplay muted loop playsinline></video>
                </div>
            </div>
        </div>
    </section>

@endsection
