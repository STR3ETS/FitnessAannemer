@extends('layouts.app')

@section('title', 'Gymreviews | Fitnesswijzer | Fitness Aannemer')
@section('meta_description', 'Uitgebreide gymreviews van de meest bijzondere sportscholen en fitnessruimtes van Nederland. Apparatuur, sfeer, prijs en faciliteiten beoordeeld.')

@section('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "CollectionPage",
    "name": "Gymreviews",
    "description": "Uitgebreide gymreviews van de meest bijzondere sportscholen en fitnessruimtes van Nederland.",
    "url": "{{ url('/fitnesswijzer/gymreviews') }}",
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
        { "@@type": "ListItem", "position": 3, "name": "Gymreviews", "item": "{{ url('/fitnesswijzer/gymreviews') }}" }
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
                <span class="text-white/70 text-xs font-medium" style="font-family: 'Inter Tight'">Gymreviews</span>
            </div>
            <div class="max-w-3xl">
                <h1 class="ip-hero-el text-white text-4xl lg:text-6xl font-bold leading-[1]">Gym<span class="text-primary">reviews</span></h1>
                <p class="ip-hero-el text-white/60 text-sm lg:text-base leading-relaxed max-w-xl my-8">Uitgebreide reviews van de meest bijzondere sportscholen en fitnessruimtes van Nederland. Van budget tot ultra-premium, van kerken tot underground gyms.</p>
                <div class="ip-hero-el flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                    <a href="{{ url('/gratis-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Gratis adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                    <a href="{{ url('/fitnesswijzer') }}" class="bg-white/10 border border-white/20 rounded-full px-6 py-3.5 text-white text-xs font-semibold hover:bg-white/20 transition">Fitnesswijzer</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-16 lg:py-32 relative overflow-hidden" id="gr-section1">
        <div class="horizontal-blob w-[700px] h-[700px]" style="background: radial-gradient(circle, rgba(82,171,226,0.2) 0%, rgba(82,171,226,0) 70%); top: -20%; left: -10%; animation: blob-float-1 18s ease-in-out infinite;"></div>
        <div class="horizontal-blob w-[500px] h-[500px]" style="background: radial-gradient(circle, rgba(82,171,226,0.15) 0%, rgba(82,171,226,0) 70%); top: 40%; right: -10%; animation: blob-float-2 22s ease-in-out infinite;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="ip-block-text">
                    <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-6">Gymreviews</span>
                    <h2 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.05] mb-8">Wij bezoeken en <span class="text-primary">beoordelen</span></h2>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-4">Van budget keten tot ultra-premium boutique gym, wij bezoeken de meest bijzondere fitnessruimtes van Nederland. Per review beoordelen we apparatuur, sfeer, faciliteiten en prijs-kwaliteitverhouding.</p>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-8">Onze reviews zijn eerlijk en onafhankelijk. We laten zien wat een gym bijzonder maakt, welke apparatuurkeuzes zijn gemaakt en wat je als sporter kunt verwachten. Ideaal als inspiratie voor jouw eigen project.</p>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                        <a href="{{ url('/gratis-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Gratis adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                        <a href="{{ url('/projecten') }}" class="bg-secondary/10 border border-secondary/20 rounded-full px-6 py-3.5 text-secondary text-xs font-semibold hover:bg-secondary/20 transition">Bekijk onze projecten</a>
                    </div>
                </div>
                <div class="ip-block-media rounded-3xl aspect-[4/3] overflow-hidden">
                    <video src="{{ asset('shorts/fitnessaannemer-short-2.mp4') }}" class="w-full h-full object-cover" autoplay muted loop playsinline></video>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-secondary py-16 lg:py-32 overflow-hidden" id="gr-section2">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="ip-fade text-center mb-16">
                <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-4">Reviews</span>
                <h2 class="text-white text-4xl lg:text-5xl font-bold leading-[1.05]">De meest bijzondere <span class="text-primary">gyms beoordeeld</span></h2>
            </div>

            <div class="ip-fade grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach($artikelen as $slug => $artikel)
                <a href="{{ url('/fitnesswijzer/gymreviews/' . $slug) }}" class="group bg-white/[0.03] border border-white/[0.06] rounded-2xl overflow-hidden hover:border-primary/30 transition-all duration-300 {{ $loop->first ? 'md:col-span-2' : '' }}">
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
                                Lees review <i class="fa-solid fa-arrow-right text-[10px] ml-1.5 group-hover:translate-x-1 transition-transform"></i>
                            </span>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-white py-16 lg:py-32 relative overflow-hidden" id="gr-section3">
        <div class="horizontal-blob w-[600px] h-[600px]" style="background: radial-gradient(circle, rgba(82,171,226,0.18) 0%, rgba(82,171,226,0) 70%); top: -15%; right: -5%; animation: blob-float-3 15s ease-in-out infinite;"></div>
        <div class="horizontal-blob w-[500px] h-[500px]" style="background: radial-gradient(circle, rgba(82,171,226,0.15) 0%, rgba(82,171,226,0) 70%); bottom: -20%; left: -8%; animation: blob-float-1 20s ease-in-out infinite;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="ip-block-text">
                    <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-6">Jouw project</span>
                    <h2 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.05] mb-8">Laat je inspireren voor <span class="text-primary">jouw gym</span></h2>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-4">Elke gym die we reviewen levert inzichten op. Over apparatuurkeuzes, indeling, sfeer en positionering. Gebruik deze kennis als inspiratie voor jouw eigen project.</p>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-8">Wij helpen je om de juiste keuzes te maken. Van concept en apparatuurselectie tot complete realisatie. Plan een adviesgesprek en bespreek jouw ideeen met ons team.</p>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                        <a href="{{ url('/gratis-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Gratis adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                        <a href="{{ url('/projecten') }}" class="bg-secondary/10 border border-secondary/20 rounded-full px-6 py-3.5 text-secondary text-xs font-semibold hover:bg-secondary/20 transition">Bekijk onze projecten</a>
                    </div>
                </div>
                <div class="ip-block-media rounded-3xl aspect-[4/3] overflow-hidden">
                    <img src="{{ asset('assets/foto-assets/SOCIAL-Farmfit-015-WF104887-1-1-1024x683.jpg') }}" alt="Gerealiseerd gymproject" class="w-full h-full object-cover" loading="lazy">
                </div>
            </div>
        </div>
    </section>

@endsection
