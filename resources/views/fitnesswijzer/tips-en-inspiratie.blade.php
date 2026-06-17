@extends('layouts.app')

@section('title', 'Tips & Inspiratie | Fitnesswijzer | Fitness Aannemer')
@section('meta_description', 'Praktische tips en inspiratie voor het inrichten en runnen van jouw fitnessruimte. Van apparatuurkeuze tot gym design en financiering.')

@section('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "CollectionPage",
    "name": "Tips & Inspiratie",
    "description": "Praktische tips en inspiratie voor het inrichten en runnen van jouw fitnessruimte.",
    "url": "{{ url('/fitnesswijzer/tips-en-inspiratie') }}",
    "isPartOf": {
        "@@type": "Blog",
        "name": "Fitnesswijzer",
        "url": "{{ url('/fitnesswijzer') }}"
    }
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        { "@@type": "ListItem", "position": 1, "name": "Home", "item": "{{ url('/') }}" },
        { "@@type": "ListItem", "position": 2, "name": "Fitnesswijzer", "item": "{{ url('/fitnesswijzer') }}" },
        { "@@type": "ListItem", "position": 3, "name": "Tips & Inspiratie", "item": "{{ url('/fitnesswijzer/tips-en-inspiratie') }}" }
    ]
}
</script>
@endsection

@section('content')
    <section class="bg-secondary pt-32 lg:pt-40 pb-16 lg:pb-30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="ip-hero-el flex items-center gap-2 mb-6">
                <a href="{{ url('/fitnesswijzer') }}" class="text-white/40 text-xs font-medium hover:text-white transition" style="font-family: 'Inter Tight'">Fitnesswijzer</a>
                <i class="fa-solid fa-chevron-right text-white/20 text-[8px]"></i>
                <span class="text-white/70 text-xs font-medium" style="font-family: 'Inter Tight'">Tips & inspiratie</span>
            </div>
            <div class="max-w-3xl">
                <h1 class="ip-hero-el text-white text-4xl lg:text-6xl font-bold leading-[1]">Tips & <span class="text-primary">inspiratie</span></h1>
                <p class="ip-hero-el text-white/60 text-sm lg:text-base leading-relaxed max-w-xl my-6 lg:my-8">Praktische kennis en inspiratie voor het inrichten, runnen en groeien van jouw fitnessruimte. Van indeling en verlichting tot financiering en groeiverhalen.</p>
                <div class="ip-hero-el flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                    <a href="{{ url('/gratis-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Gratis adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                    <a href="{{ url('/fitnesswijzer') }}" class="bg-white/10 border border-white/20 rounded-full px-6 py-3.5 text-white text-xs font-semibold hover:bg-white/20 transition">Fitnesswijzer</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-16 lg:py-32 relative overflow-hidden" id="ti-section1">
        <div class="horizontal-blob w-[700px] h-[700px]" style="background: radial-gradient(circle, rgba(82,171,226,0.2) 0%, rgba(82,171,226,0) 70%); top: -20%; left: -10%; animation: blob-float-1 18s ease-in-out infinite;"></div>
        <div class="horizontal-blob w-[500px] h-[500px]" style="background: radial-gradient(circle, rgba(82,171,226,0.15) 0%, rgba(82,171,226,0) 70%); top: 40%; right: -10%; animation: blob-float-2 22s ease-in-out infinite;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="ip-block-text">
                    <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-6">Kennisdeling</span>
                    <h2 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.05] mb-8">De details maken <span class="text-primary">het verschil</span></h2>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-4">Een goede gym draait om meer dan alleen apparatuur. Het zijn de details die bepalen of leden terugkomen: de sfeer, de indeling, de verlichting, de vloer en het geluid.</p>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-8">In onze artikelen delen we praktische tips, groeiverhalen en inzichten uit tientallen gerealiseerde projecten. Direct toepasbaar, ongeacht de grootte van jouw ruimte.</p>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                        <a href="{{ url('/gratis-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Gratis adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                        <a href="{{ url('/projecten') }}" class="bg-secondary/10 border border-secondary/20 rounded-full px-6 py-3.5 text-secondary text-xs font-semibold hover:bg-secondary/20 transition">Bekijk onze projecten</a>
                    </div>
                </div>
                <div class="ip-block-media rounded-3xl aspect-[4/3] overflow-hidden">
                    <video src="{{ asset('shorts/fitnessaannemer-short-9.mp4') }}" class="w-full h-full object-cover" autoplay muted loop playsinline></video>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-secondary py-16 lg:py-32 overflow-hidden" id="ti-section2">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="ip-fade text-center mb-16">
                <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-4">Artikelen</span>
                <h2 class="text-white text-4xl lg:text-5xl font-bold leading-[1.05]">Tips, verhalen en <span class="text-primary">praktijkinzichten</span></h2>
            </div>

            <div class="ip-fade grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach($artikelen as $slug => $artikel)
                <a href="{{ url('/fitnesswijzer/tips-en-inspiratie/' . $slug) }}" class="group bg-white/[0.03] border border-white/[0.06] rounded-2xl overflow-hidden hover:border-primary/30 transition-all duration-300 {{ $loop->first ? 'md:col-span-2' : '' }}">
                    <div class="aspect-[16/9] {{ $loop->first ? 'md:aspect-[21/9]' : '' }} relative overflow-hidden">
                        @if(str_starts_with($artikel['cardImage'], 'http'))
                            <img src="{{ $artikel['cardImage'] }}" alt="{{ $artikel['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                        @else
                            <img src="{{ asset($artikel['cardImage']) }}" alt="{{ $artikel['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-secondary via-secondary/70 to-secondary/20"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-8">
                            <h3 class="text-white text-xl {{ $loop->first ? 'lg:text-2xl' : '' }} font-bold mb-2" style="font-family: 'Inter Tight'">{{ $artikel['title'] }}</h3>
                            <p class="text-white/70 text-sm leading-relaxed max-w-lg">{{ $artikel['cardDesc'] }}</p>
                            <span class="inline-flex items-center text-primary text-xs font-semibold mt-4" style="font-family: 'Inter Tight'">
                                Lees artikel <i class="fa-solid fa-arrow-right text-[10px] ml-1.5 group-hover:translate-x-1 transition-transform"></i>
                            </span>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-white py-16 lg:py-32 relative overflow-hidden" id="ti-section3">
        <div class="horizontal-blob w-[600px] h-[600px]" style="background: radial-gradient(circle, rgba(82,171,226,0.18) 0%, rgba(82,171,226,0) 70%); top: -15%; right: -5%; animation: blob-float-3 15s ease-in-out infinite;"></div>
        <div class="horizontal-blob w-[500px] h-[500px]" style="background: radial-gradient(circle, rgba(82,171,226,0.15) 0%, rgba(82,171,226,0) 70%); bottom: -20%; left: -8%; animation: blob-float-1 20s ease-in-out infinite;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="ip-block-text">
                    <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-6">Persoonlijk advies</span>
                    <h2 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.05] mb-8">Meer weten over <span class="text-primary">jouw project?</span></h2>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-4">Elke fitnessruimte is uniek. Wat werkt voor een commerciele sportschool verschilt van een boutique studio of homegym. Wij adviseren op basis van jouw specifieke situatie.</p>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-8">Plan een vrijblijvend adviesgesprek en ontdek hoe wij jouw fitnessruimte naar een hoger niveau tillen. Van eerste idee tot complete realisatie.</p>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                        <a href="{{ url('/gratis-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Gratis adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                        <a href="{{ url('/projecten') }}" class="bg-secondary/10 border border-secondary/20 rounded-full px-6 py-3.5 text-secondary text-xs font-semibold hover:bg-secondary/20 transition">Bekijk onze projecten</a>
                    </div>
                </div>
                <div class="ip-block-media rounded-3xl aspect-[4/3] overflow-hidden">
                    <img src="{{ asset('assets/foto-assets/FULL-Ballin-Fit-013-WF206762-1-1024x683.jpg') }}" alt="Fitnessruimte inspiratie" class="w-full h-full object-cover" loading="lazy">
                </div>
            </div>
        </div>
    </section>

@endsection
