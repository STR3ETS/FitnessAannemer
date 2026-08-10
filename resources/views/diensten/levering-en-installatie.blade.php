@extends('layouts.app')

@section('title', 'Levering & installatie fitnessapparatuur | Fitness Aannemer')
@section('meta_description', 'Complete levering en installatie van fitnessapparatuur en inrichting door ons eigen montageteam. Een aanspreekpunt, een opleverdatum, actief in heel de Benelux. Vraag een offerte aan.')

@section('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Service",
    "name": "Levering & Installatie",
    "description": "Complete levering en professionele installatie van fitnessapparatuur. Turnkey oplevering in heel Nederland en Belgie.",
    "url": "{{ url('/diensten/levering-en-installatie') }}",
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
        { "@@type": "ListItem", "position": 3, "name": "Levering & Installatie", "item": "{{ url('/diensten/levering-en-installatie') }}" }
    ]
}
</script>
@endsection

@section('content')
    <section class="bg-secondary pt-32 lg:pt-40 pb-16 lg:pb-30 relative overflow-hidden" id="li-hero">
        <div class="hidden lg:block absolute inset-y-0 right-0 w-1/2">
            <img src="{{ asset('assets/foto-assets/MCJO3837-1-1024x683.jpg') }}" alt="" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-secondary via-secondary/80 to-transparent"></div>
            <div class="absolute w-[650px] h-[650px] rounded-full border border-white/[0.07] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"></div>
            <div class="absolute w-[400px] h-[400px] rounded-full border border-white/[0.10] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="ip-hero-el flex items-center gap-2 mb-6">
                <a href="{{ url('/diensten') }}" class="text-white/40 text-xs font-medium hover:text-white transition" style="font-family: 'Inter'">Diensten</a>
                <i class="fa-solid fa-chevron-right text-white/20 text-[8px]"></i>
                <span class="text-white/70 text-xs font-medium" style="font-family: 'Inter'">Levering & installatie</span>
            </div>
            <div class="max-w-3xl">
                <h1 class="ip-hero-el text-white text-4xl lg:text-6xl font-bold leading-[1]">Levering &<br><span class="text-primary">installatie</span></h1>
                <p class="ip-hero-el text-white/60 text-sm lg:text-base leading-relaxed max-w-xl my-8">Complete levering en installatie van alles wat jouw sportschool nodig heeft, door ons eigen montageteam. Van transport tot de laatste afgestelde machine: alles uit één hand, met één opleverdatum.</p>
                <div class="ip-hero-el flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                    <a href="{{ url('/vrijblijvend-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Vrijblijvend adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                    <a href="{{ url('/projecten') }}" class="bg-white/10 border border-white/20 rounded-full px-6 py-3.5 text-white text-xs font-semibold hover:bg-white/20 transition">Bekijk onze projecten</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-16 lg:py-32 relative overflow-hidden" id="li-section1">
        <div class="horizontal-blob w-[700px] h-[700px]" style="background: radial-gradient(circle, rgba(82,171,226,0.2) 0%, rgba(82,171,226,0) 70%); top: -20%; left: -10%; animation: blob-float-1 18s ease-in-out infinite;"></div>
        <div class="horizontal-blob w-[500px] h-[500px]" style="background: radial-gradient(circle, rgba(82,171,226,0.15) 0%, rgba(82,171,226,0) 70%); top: 40%; right: -10%; animation: blob-float-2 22s ease-in-out infinite;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="ip-block-text">
                    <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-6">Eigen montageteam</span>
                    <h2 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.05] mb-8">Geïnstalleerd zoals het <span class="text-primary">ontworpen is</span></h2>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-4">Ons eigen montageteam verzorgt de volledige levering en installatie, in heel Nederland en België. Geen externe monteurs die het ontwerp voor het eerst zien, maar een vast team dat het project kent en precies weet waar alles moet staan.</p>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-8">Elke machine wordt geplaatst volgens de plattegrond, afgesteld en getest voor gebruik. Van het uitladen tot de laatste stelschroef: als wij de deur achter ons dichttrekken, kun jij open.</p>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                        <a href="{{ url('/vrijblijvend-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Vrijblijvend adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                        <a href="{{ url('/projecten') }}" class="bg-secondary/10 border border-secondary/20 rounded-full px-6 py-3.5 text-secondary text-xs font-semibold hover:bg-secondary/20 transition">Bekijk onze projecten</a>
                    </div>
                </div>
                <div class="ip-block-media rounded-3xl aspect-[4/3] overflow-hidden">
                    <img src="{{ asset('assets/foto-assets/MCJO3837-1-1024x683.jpg') }}" alt="Professionele installatie fitnessapparatuur" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    {{-- Process timeline --}}
    <section class="bg-secondary py-16 lg:py-32 overflow-hidden" id="li-process">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="text-center mb-20">
                <span class="ip-fade inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-4">Hoe wij werken</span>
                <h2 class="ip-fade text-white text-4xl lg:text-5xl font-bold leading-[1.05]">Van bestelling tot<br><span class="text-primary">opgeleverde sportschool</span></h2>
            </div>

            @php
            $stappen = [
                [
                    'nr' => '01',
                    'icon' => 'fa-clipboard-check',
                    'title' => 'Orderbevestiging & planning',
                    'desc' => 'Na akkoord op de offerte plannen we direct de levering in. Je krijgt één planning met een vaste opleverdatum, afgestemd op de bouw of verbouwing van jouw ruimte.',
                    'detail' => 'Vaste opleverdatum',
                    'video' => '/assets/li-step01.mp4',
                ],
                [
                    'nr' => '02',
                    'icon' => 'fa-truck-fast',
                    'title' => 'Levering & transport',
                    'desc' => 'Wij regelen het volledige transport, van fabrikant tot jouw deur. Ook bij lastige locaties: verdiepingen, smalle doorgangen of binnensteden. Wij hebben het allemaal gezien.',
                    'detail' => 'NL & BE breed',
                    'image' => '/assets/li-step02.jpg',
                    'image_alt' => 'Levering fitnessapparatuur',
                ],
                [
                    'nr' => '03',
                    'icon' => 'fa-screwdriver-wrench',
                    'title' => 'Montage & installatie',
                    'desc' => 'Ons montageteam bouwt alles op volgens het ontwerp: apparatuur, vloeren, verlichting, spiegels, kluisjes, meubels en audio. Elke machine wordt afgesteld en getest.',
                    'detail' => 'Eigen montageteam',
                    'image' => '/assets/li-step03.jpg',
                    'image_alt' => 'Montage fitnessapparatuur',
                ],
                [
                    'nr' => '04',
                    'icon' => 'fa-circle-check',
                    'title' => 'Oplevering',
                    'desc' => 'We lopen samen alles na: staat elke machine op de juiste plek, werkt alles naar behoren? Pas als jij tevreden bent, is de klus af.',
                    'detail' => 'Direct klaar voor gebruik',
                    'video' => '/assets/li-step04.mp4',
                ],
            ];
            @endphp

            <div class="relative">
                {{-- Vertical timeline line --}}
                <div class="absolute left-6 lg:left-1/2 top-0 bottom-0 w-px bg-white/[0.06] lg:-translate-x-px">
                    <div class="ip-timeline-fill w-full bg-primary/40 origin-top" style="height: 0%"></div>
                </div>

                <div class="space-y-16 lg:space-y-24">
                    @foreach($stappen as $index => $stap)
                    <div class="ip-step relative flex items-start gap-8 lg:gap-0 {{ $index % 2 === 0 ? '' : 'lg:flex-row-reverse' }}">
                        {{-- Content --}}
                        <div class="lg:w-1/2 {{ $index % 2 === 0 ? 'lg:pr-16 lg:text-right' : 'lg:pl-16' }} pl-16 lg:pl-0">
                            <span class="text-primary/30 text-6xl font-bold leading-none" style="font-family: 'Inter'">{{ $stap['nr'] }}</span>
                            <h3 class="text-white text-xl lg:text-2xl font-bold mt-2 mb-3">{{ $stap['title'] }}</h3>
                            <p class="text-white/45 text-sm leading-relaxed mb-3">{{ $stap['desc'] }}</p>
                            <span class="inline-flex items-center gap-2 text-primary/60 text-xs font-medium">
                                <i class="fa-solid fa-circle-check text-[10px]"></i> {{ $stap['detail'] }}
                            </span>
                        </div>

                        {{-- Center dot --}}
                        <div class="absolute left-6 lg:left-1/2 -translate-x-1/2 w-12 h-12 rounded-xl bg-secondary border-2 border-white/[0.08] flex items-center justify-center z-10 ip-dot">
                            <i class="fa-solid {{ $stap['icon'] }} text-primary text-sm"></i>
                        </div>

                        {{-- Media --}}
                        <div class="hidden lg:block lg:w-1/2 {{ $index % 2 === 0 ? 'lg:pl-16' : 'lg:pr-16' }}">
                            @if(!empty($stap['video']))
                                <div class="rounded-2xl overflow-hidden aspect-[4/3] bg-white/[0.03] border border-white/[0.06]">
                                    <video src="{{ asset($stap['video']) }}" class="w-full h-full object-cover" autoplay muted loop playsinline></video>
                                </div>
                            @elseif(!empty($stap['images']))
                                <div class="grid grid-cols-2 gap-3">
                                    @foreach($stap['images'] as $img)
                                    <div class="rounded-2xl overflow-hidden aspect-[3/4] bg-white/[0.03] border border-white/[0.06]">
                                        <img src="{{ asset($img['src']) }}" alt="{{ $img['alt'] }}" class="w-full h-full object-cover" loading="lazy">
                                    </div>
                                    @endforeach
                                </div>
                            @else
                                <div class="rounded-2xl overflow-hidden aspect-[4/3] bg-white/[0.03] border border-white/[0.06]">
                                    <img src="{{ asset($stap['image']) }}" alt="{{ $stap['image_alt'] }}" class="w-full h-full object-cover" loading="lazy">
                                </div>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-16 lg:py-32 relative overflow-hidden" id="li-section2">
        <div class="horizontal-blob w-[600px] h-[600px]" style="background: radial-gradient(circle, rgba(82,171,226,0.18) 0%, rgba(82,171,226,0) 70%); top: -15%; right: -5%; animation: blob-float-3 15s ease-in-out infinite;"></div>
        <div class="horizontal-blob w-[500px] h-[500px]" style="background: radial-gradient(circle, rgba(82,171,226,0.15) 0%, rgba(82,171,226,0) 70%); bottom: -20%; left: -8%; animation: blob-float-1 20s ease-in-out infinite;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="ip-block-media rounded-3xl aspect-[4/3] overflow-hidden">
                    <img src="{{ asset('assets/li-blok4.jpg') }}" alt="Complete sportschoolinrichting" class="w-full h-full object-cover">
                </div>
                <div class="ip-block-text">
                    <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-6">Compleet assortiment</span>
                    <h2 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.05] mb-8">Meer dan alleen <span class="text-primary">apparatuur</span></h2>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-4">Een sportschool is meer dan een rij machines. Daarom leveren en installeren wij de complete inrichting: apparatuur van 18 merken, sportvloeren zoals PVC, laminaat, rubberen tegels en Sprinttracks, verlichting, spiegels, kluisjes, meubels en audio.</p>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-8">Alles komt uit één hand en wordt in één planning geïnstalleerd. Geen vijf leveranciers met vijf leverdata, maar één team dat jouw sportschool compleet oplevert.</p>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                        <a href="{{ url('/vrijblijvend-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Vrijblijvend adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                        <a href="{{ url('/onze-merken') }}" class="bg-secondary/10 border border-secondary/20 rounded-full px-6 py-3.5 text-secondary text-xs font-semibold hover:bg-secondary/20 transition">Bekijk alle merken</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
