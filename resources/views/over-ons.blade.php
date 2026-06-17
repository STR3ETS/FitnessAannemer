@extends('layouts.app')

@section('title', 'Over ons | Fitness Aannemer')
@section('meta_description', 'Maak kennis met Stijn Harder, oprichter van Fitness Aannemer. Van webshop tot volledige gymbouw. Ontdek ons verhaal, onze aanpak en waarom wij anders zijn.')

@section('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "AboutPage",
    "name": "Over Fitness Aannemer",
    "description": "Maak kennis met Stijn Harder, oprichter van Fitness Aannemer. Van webshop tot volledige gymbouw.",
    "url": "{{ url('/over-ons') }}",
    "mainEntity": {
        "@@type": "Organization",
        "name": "Fitness Aannemer",
        "url": "{{ url('/') }}",
        "founder": {
            "@@type": "Person",
            "name": "Stijn Harder"
        },
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
    <section class="bg-secondary pt-32 lg:pt-40 pb-16 lg:pb-30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="ip-hero-el flex items-center gap-2 mb-6">
                <a href="{{ url('/') }}" class="text-white/40 text-xs font-medium hover:text-white transition" style="font-family: 'Inter Tight'">Home</a>
                <i class="fa-solid fa-chevron-right text-white/20 text-[8px]"></i>
                <span class="text-white/70 text-xs font-medium" style="font-family: 'Inter Tight'">Over ons</span>
            </div>
            <div class="max-w-3xl">
                <h1 class="ip-hero-el text-white text-4xl lg:text-6xl font-bold leading-[1]">Building the gyms of the <span class="text-primary">future</span></h1>
                <p class="ip-hero-el text-white/60 text-sm lg:text-base leading-relaxed max-w-xl my-8">Fitness Aannemer is ontstaan uit passie voor fitness en ondernemerschap. Wij ontwerpen, leveren en bouwen complete fitnessruimtes door heel Nederland en Belgie. Van eerste idee tot sleuteloverdracht.</p>
                <div class="ip-hero-el flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                    <a href="{{ url('/gratis-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Gratis adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                    <a href="{{ url('/projecten') }}" class="bg-white/10 border border-white/20 rounded-full px-6 py-3.5 text-white text-xs font-semibold hover:bg-white/20 transition">Bekijk projecten</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-16 lg:py-32 relative overflow-hidden" id="oo-section1">
        <div class="horizontal-blob w-[700px] h-[700px]" style="background: radial-gradient(circle, rgba(82,171,226,0.2) 0%, rgba(82,171,226,0) 70%); top: -20%; left: -10%; animation: blob-float-1 18s ease-in-out infinite;"></div>
        <div class="horizontal-blob w-[500px] h-[500px]" style="background: radial-gradient(circle, rgba(82,171,226,0.15) 0%, rgba(82,171,226,0) 70%); top: 40%; right: -10%; animation: blob-float-2 22s ease-in-out infinite;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="ip-block-text">
                    <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-6">Het verhaal</span>
                    <h2 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.05] mb-8">Van webshop naar <span class="text-primary">gymbouwer</span></h2>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-4">Fitness Aannemer is opgericht door Stijn Harder vanuit Duiven. Het begon met DeThuisSportWinkel.nl, een webshop met fitnessapparatuur van duizenden euro's. Een beetje adverteren, afwachten, en hopen dat iemand spontaan tienduizend euro overmaakt via iDEAL. Dat gebeurde niet.</p>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-8">Maandenlang producten toevoegen, omschrijvingen optimaliseren, knutselen aan advertenties. Kleine orders kwamen binnen, maar pas toen de focus verschoof naar het totaalplaatje, complete home gyms bouwen, begon het te draaien. Fitness Aannemer is niet geboren uit een strak businessplan, maar uit blijven proberen, testen, aanpassen en doorzetten.</p>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                        <a href="{{ url('/gratis-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Gratis adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                        <a href="{{ url('/projecten') }}" class="bg-secondary/10 border border-secondary/20 rounded-full px-6 py-3.5 text-secondary text-xs font-semibold hover:bg-secondary/20 transition">Bekijk projecten</a>
                    </div>
                </div>
                <div class="ip-block-media rounded-3xl aspect-[4/3] overflow-hidden">
                    <video src="{{ asset('shorts/fitnessaannemer-short-1.mp4') }}" class="w-full h-full object-cover" autoplay muted loop playsinline></video>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-secondary py-16 lg:py-32 overflow-hidden" id="oo-section2">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="ip-fade text-center mb-16">
                <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-4">Het team</span>
                <h2 class="text-white text-4xl lg:text-5xl font-bold leading-[1.05]">De mensen achter <span class="text-primary">Fitness Aannemer</span></h2>
            </div>

            <div class="ip-fade max-w-4xl mx-auto">
                <div class="bg-white/[0.03] border border-white/[0.06] rounded-3xl overflow-hidden">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        {{-- Video portret --}}
                        <div class="aspect-[3/4] md:aspect-auto overflow-hidden relative">
                            <video src="{{ asset('shorts/fitnessaannemer-short-5.mp4') }}" class="w-full h-full object-cover" autoplay muted loop playsinline></video>
                        </div>
                        {{-- Bio --}}
                        <div class="p-8 lg:p-12 flex flex-col justify-center">
                            <span class="inline-block text-primary text-[10px] font-semibold uppercase tracking-widest mb-3">Oprichter</span>
                            <h3 class="text-white text-3xl lg:text-4xl font-bold mb-2" style="font-family: 'Inter Tight'">Stijn Harder</h3>
                            <p class="text-primary text-sm font-semibold mb-6" style="font-family: 'Inter Tight'">Founder & CEO</p>
                            <p class="text-white/50 text-sm leading-relaxed mb-4">Komt uit de fitnesswereld. Werkte bij FeelGoodClub AeroFitt en Vitality Sports in Duiven. Die ervaring op de vloer, zien wat werkt en wat niet, vormt de basis van hoe Fitness Aannemer opereert.</p>
                            <p class="text-white/50 text-sm leading-relaxed mb-8">Gelooft dat een gym meer moet zijn dan een ruimte met apparaten. Het moet een beleving zijn. Deelt zijn kennis via TikTok en YouTube, waar duizenden mensen meekijken met gymreviews, bouwprojecten en tips voor fitnessondernemers.</p>
                            <div class="flex items-center gap-3">
                                <a href="https://www.tiktok.com/@fitnessaannemer" target="_blank" rel="noopener" class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center text-white/40 hover:text-primary hover:border-primary/30 transition">
                                    <i class="fa-brands fa-tiktok text-sm"></i>
                                </a>
                                <a href="https://www.youtube.com/@FitnessAannemer" target="_blank" rel="noopener" class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center text-white/40 hover:text-primary hover:border-primary/30 transition">
                                    <i class="fa-brands fa-youtube text-sm"></i>
                                </a>
                                <a href="https://www.instagram.com/fitnessaannemer.nl/" target="_blank" rel="noopener" class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center text-white/40 hover:text-primary hover:border-primary/30 transition">
                                    <i class="fa-brands fa-instagram text-sm"></i>
                                </a>
                                <a href="https://nl.linkedin.com/in/stijn-harder" target="_blank" rel="noopener" class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center text-white/40 hover:text-primary hover:border-primary/30 transition">
                                    <i class="fa-brands fa-linkedin-in text-sm"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ip-fade grid grid-cols-2 md:grid-cols-4 gap-8 text-center mt-20 pt-16 border-t border-white/[0.06]">
                <div>
                    <p class="text-primary text-4xl lg:text-5xl font-bold mb-2">5+</p>
                    <p class="text-white/40 text-xs uppercase font-semibold tracking-wider">Projecten gerealiseerd</p>
                </div>
                <div>
                    <p class="text-primary text-4xl lg:text-5xl font-bold mb-2">2400+</p>
                    <p class="text-white/40 text-xs uppercase font-semibold tracking-wider">M2 ingericht</p>
                </div>
                <div>
                    <p class="text-primary text-4xl lg:text-5xl font-bold mb-2">50+</p>
                    <p class="text-white/40 text-xs uppercase font-semibold tracking-wider">Premium merken</p>
                </div>
                <div>
                    <p class="text-primary text-4xl lg:text-5xl font-bold mb-2">A-Z</p>
                    <p class="text-white/40 text-xs uppercase font-semibold tracking-wider">Volledig ontzorgd</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-16 lg:py-32 relative overflow-hidden" id="oo-section3">
        <div class="horizontal-blob w-[600px] h-[600px]" style="background: radial-gradient(circle, rgba(82,171,226,0.18) 0%, rgba(82,171,226,0) 70%); top: -15%; right: -5%; animation: blob-float-3 15s ease-in-out infinite;"></div>
        <div class="horizontal-blob w-[500px] h-[500px]" style="background: radial-gradient(circle, rgba(82,171,226,0.15) 0%, rgba(82,171,226,0) 70%); bottom: -20%; left: -8%; animation: blob-float-1 20s ease-in-out infinite;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="ip-block-text">
                    <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-6">Onze aanpak</span>
                    <h2 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.05] mb-8">Geen tussenhandel, geen <span class="text-primary">gedoe</span></h2>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-4">Fitness Aannemer werkt rechtstreeks met fabrikanten als Life Fitness, Matrix, Concept2, Gym80 en Keiser. Geen tussenpartijen, geen onnodige opslag. Dat vertaalt zich in scherpe prijzen en toegang tot het volledige assortiment van elk merk.</p>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-8">Van 3D-ontwerp en vloeren tot apparatuur en installatie: alles onder een dak. Wij begeleiden elk project van eerste schets tot sleuteloverdracht. Of het nu een sportschool van 1.000m2 is, een boutique PT-studio of een homegym in je schuur. Geen verrassingen, geen gedoe, gewoon een gym waar je trots op bent.</p>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                        <a href="{{ url('/gratis-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Gratis adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                        <a href="{{ url('/apparatuur') }}" class="bg-secondary/10 border border-secondary/20 rounded-full px-6 py-3.5 text-secondary text-xs font-semibold hover:bg-secondary/20 transition">Bekijk apparatuur</a>
                    </div>
                </div>
                <div class="ip-block-media rounded-3xl aspect-[4/3] overflow-hidden">
                    <img src="{{ asset('assets/wp-uploads/FULL-Ballin-Fit-004-WF206687-scaled.jpg') }}" alt="Gerealiseerd gymproject Fitness Aannemer" class="w-full h-full object-cover" loading="lazy">
                </div>
            </div>
        </div>
    </section>

@endsection
