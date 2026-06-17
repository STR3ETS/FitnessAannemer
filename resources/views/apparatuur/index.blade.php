@extends('layouts.app')

@section('title', 'Apparatuur | Fitness Aannemer')
@section('meta_description', 'Ontdek ons complete assortiment fitnessapparatuur. Cardio, kracht, functioneel, gewichten, flooring en herstel van topmerken.')

@section('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "CollectionPage",
    "name": "Fitnessapparatuur",
    "description": "Ontdek ons complete assortiment fitnessapparatuur. Cardio, kracht, functioneel, gewichten, flooring en herstel van topmerken.",
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
    <section class="bg-secondary pt-32 lg:pt-40 pb-12 lg:pb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="max-w-3xl">
                <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-4">Assortiment</span>
                <h1 class="text-white text-4xl lg:text-6xl font-bold leading-[1.05] mb-6">Onze <span class="text-primary">apparatuur</span></h1>
                <p class="text-white/60 text-sm lg:text-base leading-relaxed max-w-xl">Van cardio tot kracht, van flooring tot recovery. Wij leveren uitsluitend topapparatuur van de beste merken.</p>
            </div>
        </div>
    </section>

    <section class="bg-white py-16 lg:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            @php
            $categorieën = [
                ['url' => '/apparatuur/collecties', 'icon' => 'fa-layer-group', 'title' => 'Collecties', 'desc' => 'Complete apparatuurcollecties samengesteld per merk of concept. Alles op elkaar afgestemd.'],
                ['url' => '/apparatuur/cardio', 'icon' => 'fa-heart-pulse', 'title' => 'Cardio', 'desc' => 'Loopbanden, fietsen, crosstrainers, roeimachines en meer. Premium cardio van topmerken.'],
                ['url' => '/apparatuur/krachtapparatuur', 'icon' => 'fa-dumbbell', 'title' => 'Krachtapparatuur', 'desc' => 'Pin-loaded, plate-loaded en cable machines. Commerciële krachtapparatuur voor elke gym.'],
                ['url' => '/apparatuur/apparatuur-functioneel', 'icon' => 'fa-fire', 'title' => 'Functioneel', 'desc' => 'Rigs, racks, kettlebells, battleropes en meer. Alles voor functionele training en CrossFit.'],
                ['url' => '/apparatuur/gewichten', 'icon' => 'fa-weight-hanging', 'title' => 'Gewichten', 'desc' => 'Dumbbells, barbells, bumper plates en gewichtsopslag. Competition-grade en commercieel.'],
                ['url' => '/apparatuur/flooring', 'icon' => 'fa-square', 'title' => 'Flooring', 'desc' => 'Professionele gymvloeren: rubber, kunstgras, tatami en meer. Op maat gelegd.'],
                ['url' => '/apparatuur/herstel', 'icon' => 'fa-spa', 'title' => 'Herstel', 'desc' => 'Recovery apparatuur: cold plunge, sauna, compressietherapie en massage-equipment.'],
            ];
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($categorieën as $cat)
                <a href="{{ url($cat['url']) }}" class="group bg-secondary/[0.02] border border-secondary/[0.06] rounded-3xl p-8 hover:border-primary/20 hover:shadow-xl hover:shadow-primary/5 transition-all">
                    <div class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center mb-6 group-hover:bg-primary/20 transition-colors">
                        <i class="fa-solid {{ $cat['icon'] }} text-primary text-xl"></i>
                    </div>
                    <h3 class="text-secondary text-xl font-bold mb-3">{{ $cat['title'] }}</h3>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-6">{{ $cat['desc'] }}</p>
                    <span class="inline-flex items-center text-primary text-xs font-semibold" style="font-family: 'Inter Tight'">
                        Bekijk {{ strtolower($cat['title']) }} <i class="fa-solid fa-arrow-right text-[10px] ml-1.5"></i>
                    </span>
                </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Merken strip --}}
    <section class="bg-secondary py-12 lg:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 text-center">
            <p class="text-white/40 text-xs uppercase tracking-widest font-semibold mb-8">Topmerken in ons assortiment</p>
            <div class="flex flex-wrap items-center justify-center gap-8">
                @foreach(['Life Fitness', 'Matrix', 'Concept2', 'Gym80', 'Keiser', 'StairMaster', 'KingsBox', 'Hammer Strength'] as $merk)
                <span class="text-white/30 text-sm font-semibold hover:text-white/60 transition" style="font-family: 'Inter Tight'">{{ $merk }}</span>
                @endforeach
            </div>
        </div>
    </section>

@endsection
