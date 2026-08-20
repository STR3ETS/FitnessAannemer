@extends('layouts.app')

@section('title', 'Apparatuur en materialen | Fitness Aannemer')
@section('meta_description', 'Ons complete assortiment: cardio, kracht, functioneel, gewichten, sportvloeren, verlichting, audio, spiegels, kluisjes en meer. 18 merken, alles geleverd en geïnstalleerd.')

@section('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "CollectionPage",
    "name": "Apparatuur en materialen",
    "description": "Ons complete assortiment fitnessapparatuur en interieurmaterialen. Van cardio tot kracht, van sportvloeren tot verlichting. 18 merken, alles geleverd en geïnstalleerd.",
    "url": "{{ url('/apparatuur') }}",
    "publisher": {
        "@@type": "Organization",
        "name": "Fitness Aannemer",
        "url": "{{ url('/') }}"
    }
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        { "@@type": "ListItem", "position": 1, "name": "Home", "item": "{{ url('/') }}" },
        { "@@type": "ListItem", "position": 2, "name": "Apparatuur", "item": "{{ url('/apparatuur') }}" }
    ]
}
</script>
@endsection

@section('content')
    <section class="bg-secondary pt-32 lg:pt-40 pb-12 lg:pb-20 relative overflow-hidden">
        <div class="hidden lg:block absolute inset-y-0 right-0 w-1/2">
            <img src="{{ asset('assets/wp-uploads/009_DSC0569-HDR-scaled.jpg') }}" alt="" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-secondary via-secondary/80 to-transparent"></div>
            <div class="absolute w-[650px] h-[650px] rounded-full border border-white/[0.07] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"></div>
            <div class="absolute w-[400px] h-[400px] rounded-full border border-white/[0.10] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="ip-hero-el flex items-center gap-2 mb-6">
                <a href="{{ url('/') }}" class="text-white/40 text-xs font-medium hover:text-white transition" style="font-family: 'Inter'">Home</a>
                <i class="fa-solid fa-chevron-right text-white/20 text-[8px]"></i>
                <span class="text-white/70 text-xs font-medium" style="font-family: 'Inter'">Apparatuur</span>
            </div>
            <div class="max-w-3xl">
                <h1 class="ip-hero-el text-white text-4xl lg:text-6xl font-bold leading-[1.05] mb-6">Apparatuur en <span class="text-primary">materialen</span></h1>
                <p class="ip-hero-el text-white/60 text-sm lg:text-base leading-relaxed max-w-xl mb-8">Van cardio en kracht tot sportvloeren, verlichting en meubels. Als dealer van 18 merken leveren, installeren en monteren wij alles wat jouw sportschool nodig heeft.</p>
                <div class="ip-hero-el flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                    <a href="{{ url('/vrijblijvend-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Vrijblijvend adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                    <a href="{{ url('/onze-merken') }}" class="bg-white/10 border border-white/20 rounded-full px-6 py-3.5 text-white text-xs font-semibold hover:bg-white/20 transition">Bekijk onze merken</a>
                </div>
            </div>
        </div>
    </section>

    {{-- APPARATUUR --}}
    <section class="bg-white py-16 lg:py-24" data-header-light>
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="ip-fade mb-10">
                <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-3">Apparatuur</span>
                <h2 class="text-secondary text-3xl lg:text-4xl font-bold leading-[1.05]">Trainingsapparatuur</h2>
            </div>

            @php
            $apparatuur = [
                ['url' => '/apparatuur/collecties', 'img' => 'assets/foto-assets/MCJO3837-1-1024x683.jpg', 'title' => 'Collecties', 'desc' => 'Complete apparatuurcollecties samengesteld per merk of concept.'],
                ['url' => '/apparatuur/cardio', 'img' => 'assets/ca-hero.jpg', 'title' => 'Cardio', 'desc' => 'Loopbanden, fietsen, crosstrainers, roeiers en meer van topmerken.'],
                ['url' => '/apparatuur/krachtapparatuur', 'img' => 'assets/kr-hero.jpg', 'title' => 'Krachtapparatuur', 'desc' => 'Pin-loaded, plate-loaded en cable machines voor elke gym.'],
                ['url' => '/apparatuur/apparatuur-functioneel', 'img' => 'assets/fn-hero.jpg', 'title' => 'Functioneel', 'desc' => 'Rigs, racks, sleds, kettlebells en functionele accessoires.'],
                ['url' => '/apparatuur/gewichten', 'img' => 'assets/lg-hero.jpg', 'title' => 'Losse gewichten', 'desc' => 'Dumbbells, barbells, schijven en kettlebells met opbergsystemen.'],
                ['url' => '/apparatuur/herstel', 'img' => 'assets/icetubs_probath.jpg', 'title' => 'Herstel en recovery', 'desc' => 'Ijsbaden, sauna, compressietherapie en recovery-apparatuur.'],
            ];
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                @foreach($apparatuur as $cat)
                <a href="{{ url($cat['url']) }}" class="ip-fade group relative rounded-2xl overflow-hidden aspect-[4/3]">
                    <img src="{{ asset($cat['img']) }}" alt="{{ $cat['title'] }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <h3 class="text-white text-xl font-bold mb-1.5">{{ $cat['title'] }}</h3>
                        <p class="text-white/60 text-sm leading-relaxed mb-3">{{ $cat['desc'] }}</p>
                        <span class="inline-flex items-center text-primary text-xs font-semibold" style="font-family: 'Inter'">
                            Bekijk {{ strtolower($cat['title']) }} <i class="fa-solid fa-arrow-right text-[10px] ml-1.5 group-hover:translate-x-1 transition-transform"></i>
                        </span>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- MATERIALEN & INTERIEUR --}}
    <section class="bg-secondary py-16 lg:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="ip-fade mb-10">
                <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-3">Materialen</span>
                <h2 class="text-white text-3xl lg:text-4xl font-bold leading-[1.05]">Materialen en <span class="text-primary">interieur</span></h2>
            </div>

            @php
            $materialen = [
                ['url' => '/apparatuur/sportvloeren', 'img' => 'assets/sv-blok2.jpg', 'title' => 'Sportvloeren', 'desc' => 'Rubberen tegels, rollen en Sprinttracks voor elke trainingszone.'],
                ['url' => '/apparatuur/pvc-laminaat-vloeren', 'img' => 'assets/pvc-hero.jpg', 'title' => 'PVC en laminaat vloeren', 'desc' => 'Voor entree, kleedkamers, horeca en kantoor.'],
                ['url' => '/apparatuur/verlichting', 'img' => 'assets/vl-hero.jpg', 'title' => 'Verlichting', 'desc' => 'LED-lijnen, spots en accentverlichting, op maat gemonteerd.'],
                ['url' => '/apparatuur/audio', 'img' => 'assets/au-hero.jpg', 'title' => 'Audio', 'desc' => 'Speakers, versterkers en bekabeling per zone.'],
                ['url' => '/apparatuur/spiegels', 'img' => 'assets/sp-hero.jpg', 'title' => 'Spiegels', 'desc' => 'Spiegelwanden op maat, veilig gemonteerd en strak afgewerkt.'],
                ['url' => '/apparatuur/kluisjes', 'img' => 'assets/kl-hero.jpg', 'title' => 'Kluisjes', 'desc' => 'Lockers en kleedkamerwanden in elke configuratie.'],
                ['url' => '/apparatuur/meubels', 'img' => 'assets/mb-hero.jpg', 'title' => 'Meubels', 'desc' => 'Receptiebalie, loungehoek, horecameubilair en kantoorinrichting.'],
            ];
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                @foreach($materialen as $idx => $cat)
                <a href="{{ url($cat['url']) }}" class="ip-fade group relative rounded-2xl overflow-hidden aspect-[4/3] {{ $idx === 0 ? 'md:col-span-2 md:aspect-[8/3]' : '' }}">
                    <img src="{{ asset($cat['img']) }}" alt="{{ $cat['title'] }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <h3 class="text-white text-xl font-bold mb-1.5">{{ $cat['title'] }}</h3>
                        <p class="text-white/60 text-sm leading-relaxed mb-3">{{ $cat['desc'] }}</p>
                        <span class="inline-flex items-center text-primary text-xs font-semibold" style="font-family: 'Inter'">
                            Bekijk {{ strtolower($cat['title']) }} <i class="fa-solid fa-arrow-right text-[10px] ml-1.5 group-hover:translate-x-1 transition-transform"></i>
                        </span>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA + Merken --}}
    <section class="bg-white py-16 lg:py-24" data-header-light>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 text-center">
            <div class="ip-fade">
                <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-4">18 merken</span>
                <h2 class="text-secondary text-3xl lg:text-4xl font-bold leading-[1.05] mb-4">Officieel dealer van <span class="text-primary">topmerken</span></h2>
                <p class="text-secondary/50 text-sm leading-relaxed max-w-2xl mx-auto mb-10">Wij werken rechtstreeks met fabrikanten. Dat betekent toegang tot het volledige assortiment, onafhankelijk advies en de beste prijsafspraken.</p>
            </div>
            <div class="ip-fade flex flex-wrap items-center justify-center gap-x-8 gap-y-4 mb-10">
                @foreach(['Life Fitness', 'Matrix', 'GYM80', 'Hammer Strength', 'Eleiko', 'Concept2', 'EGYM', 'ZIVA', 'Vision', 'YourReformer', 'Watson', 'Nike Strength', 'LifeMaxx', 'TKO', 'Assault Fitness', 'Sprinttracks', 'InBody'] as $merk)
                <span class="text-secondary/30 text-sm font-semibold" style="font-family: 'Inter'">{{ $merk }}</span>
                @endforeach
            </div>
            <a href="{{ url('/onze-merken') }}" class="ip-fade inline-flex items-center bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Bekijk alle merken <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
        </div>
    </section>

@endsection
