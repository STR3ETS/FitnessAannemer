@extends('layouts.app')

@section('title', 'Fitnessapparatuur leasen | Ook interieur | Fitness Aannemer')
@section('meta_description', 'Fitnessapparatuur en interieur leasen of financieren: flexibele looptijden, afgestemd op jouw businessplan en cashflow. Wij rekenen met je mee. Bekijk de leaseopties.')

@section('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Service",
    "name": "Leasing & Financiering",
    "description": "Flexibele lease- en financieringsopties voor fitnessapparatuur. Start direct met topapparatuur en spreid de kosten.",
    "url": "{{ url('/diensten/leasing-en-financiering') }}",
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
        { "@@type": "ListItem", "position": 3, "name": "Leasing & Financiering", "item": "{{ url('/diensten/leasing-en-financiering') }}" }
    ]
}
</script>
@endsection

@section('content')
    <section class="bg-secondary pt-32 lg:pt-40 pb-16 lg:pb-30 relative overflow-hidden" id="lf-hero">
        <div class="hidden lg:block absolute inset-y-0 right-0 w-1/2">
            <img src="{{ asset('assets/lf-hero.jpg') }}" alt="Leasing fitnessapparatuur" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-secondary via-secondary/80 to-transparent"></div>
            <div class="absolute w-[650px] h-[650px] rounded-full border border-white/[0.07] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"></div>
            <div class="absolute w-[400px] h-[400px] rounded-full border border-white/[0.10] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="ip-hero-el flex items-center gap-2 mb-6">
                <a href="{{ url('/diensten') }}" class="text-white/40 text-xs font-medium hover:text-white transition" style="font-family: 'Inter'">Diensten</a>
                <i class="fa-solid fa-chevron-right text-white/20 text-[8px]"></i>
                <span class="text-white/70 text-xs font-medium" style="font-family: 'Inter'">Leasing & financiering</span>
            </div>
            <div class="max-w-3xl">
                <h1 class="ip-hero-el text-white text-4xl lg:text-6xl font-bold leading-[1]">Leasing &<br><span class="text-primary">financiering</span></h1>
                <p class="ip-hero-el text-white/60 text-sm lg:text-base leading-relaxed max-w-xl my-6 lg:my-8">Een complete sportschool zonder grote eenmalige investering. Bij ons lease je niet alleen de apparatuur, maar ook het interieur: van vloeren tot verlichting. Flexibele opties, afgestemd op jouw businessplan en cashflow.</p>
                <div class="ip-hero-el flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                    <a href="{{ url('/vrijblijvend-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Vrijblijvend adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                    <a href="{{ url('/projecten') }}" class="bg-white/10 border border-white/20 rounded-full px-6 py-3.5 text-white text-xs font-semibold hover:bg-white/20 transition">Bekijk onze projecten</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-16 lg:py-32 relative overflow-hidden" id="lf-section1">
        <div class="horizontal-blob w-[700px] h-[700px]" style="background: radial-gradient(circle, rgba(82,171,226,0.2) 0%, rgba(82,171,226,0) 70%); top: -20%; left: -10%; animation: blob-float-1 18s ease-in-out infinite;"></div>
        <div class="horizontal-blob w-[500px] h-[500px]" style="background: radial-gradient(circle, rgba(82,171,226,0.15) 0%, rgba(82,171,226,0) 70%); top: 40%; right: -10%; animation: blob-float-2 22s ease-in-out infinite;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="ip-block-text">
                    <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-6">Slim investeren</span>
                    <h2 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.05] mb-8">Behoud je <span class="text-primary">werkkapitaal</span></h2>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-4">Een complete sportschool vraagt om een flinke investering. Niet iedereen wil of kan dat in één keer doen. Met onze lease- en financieringsopties spreid je de kosten en houd je ruimte voor wat écht groei brengt: marketing, personeel en je opening.</p>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-8">Wij werken samen met gerenommeerde financieringspartners en rekenen alle scenario's voor je door: operational lease, financial lease of externe financiering. Zo vergelijk je zelf, of samen met je accountant, wat het beste past.</p>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                        <a href="{{ url('/vrijblijvend-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Vrijblijvend adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                        <a href="{{ url('/projecten') }}" class="bg-secondary/10 border border-secondary/20 rounded-full px-6 py-3.5 text-secondary text-xs font-semibold hover:bg-secondary/20 transition">Bekijk onze projecten</a>
                    </div>
                </div>
                <div class="ip-block-media rounded-3xl aspect-[4/3] overflow-hidden">
                    <img src="{{ asset('assets/lf-blok2.jpg') }}" alt="Sportschool via leasing" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    {{-- Process timeline --}}
    <section class="bg-secondary py-16 lg:py-32 overflow-hidden" id="lf-process">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="text-center mb-20">
                <span class="ip-fade inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-4">Hoe wij werken</span>
                <h2 class="ip-fade text-white text-4xl lg:text-5xl font-bold leading-[1.05]">Van eerste gesprek tot<br><span class="text-primary">getekende overeenkomst</span></h2>
            </div>

            @php
            $stappen = [
                [
                    'nr' => '01',
                    'icon' => 'fa-comments',
                    'title' => 'Inventarisatie & doorrekening',
                    'desc' => 'We bespreken jouw plannen, budget en voorkeuren. Op basis daarvan rekenen we de scenario\'s voor je door: operational lease, financial lease of externe financiering.',
                    'detail' => 'Vrijblijvend en transparant',
                    'image' => '/assets/lf-step01.jpg',
                    'image_alt' => 'Inventarisatie en doorrekening',
                ],
                [
                    'nr' => '02',
                    'icon' => 'fa-file-invoice-dollar',
                    'title' => 'Voorstel op maat',
                    'desc' => 'Je ontvangt een helder financieringsvoorstel met maandelijkse termijnen, looptijd en voorwaarden. Geen kleine lettertjes, transparant en overzichtelijk.',
                    'detail' => 'Transparante voorwaarden',
                    'video' => '/assets/lf-step02.mp4',
                ],
                [
                    'nr' => '03',
                    'icon' => 'fa-file-signature',
                    'title' => 'Goedkeuring & overeenkomst',
                    'desc' => 'Na akkoord van de financieringspartner regelen wij de volledige afhandeling. Je tekent de overeenkomst en wij zetten het leveringstraject in gang.',
                    'detail' => 'Wij regelen de afhandeling',
                    'video' => '/assets/lf-step03.mp4',
                ],
                [
                    'nr' => '04',
                    'icon' => 'fa-rocket',
                    'title' => 'Levering & direct starten',
                    'desc' => 'Jouw apparatuur en inrichting worden geleverd en geïnstalleerd. Je start direct met een volledig ingerichte sportschool zonder grote voorinvestering.',
                    'detail' => 'Direct operationeel',
                    'image' => '/assets/lf-step04.jpg',
                    'image_alt' => 'Levering en installatie sportschool',
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

    <section class="bg-white py-16 lg:py-32 relative overflow-hidden" id="lf-section2">
        <div class="horizontal-blob w-[600px] h-[600px]" style="background: radial-gradient(circle, rgba(82,171,226,0.18) 0%, rgba(82,171,226,0) 70%); top: -15%; right: -5%; animation: blob-float-3 15s ease-in-out infinite;"></div>
        <div class="horizontal-blob w-[500px] h-[500px]" style="background: radial-gradient(circle, rgba(82,171,226,0.15) 0%, rgba(82,171,226,0) 70%); bottom: -20%; left: -8%; animation: blob-float-1 20s ease-in-out infinite;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="ip-block-media rounded-3xl aspect-[4/3] overflow-hidden">
                    <img src="{{ asset('assets/lf-blok4.jpg') }}" alt="Financieringsopties sportschool" class="w-full h-full object-cover">
                </div>
                <div class="ip-block-text">
                    <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-6">Financieringsopties</span>
                    <h2 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.05] mb-8">De opties <span class="text-primary">op een rij</span></h2>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-4">Bij operational lease gebruik je de apparatuur tegen vaste maandelijkse kosten, zonder eigenaarschap. Bij financial lease word je stapsgewijs eigenaar. En externe financiering via een bank of investeerder is ook mogelijk; daarvoor leveren wij een gedegen projectplan en de juiste documentatie aan.</p>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-8">Welke vorm past, hangt af van jouw situatie en plannen. Wij rekenen de scenario's door en leveren alle cijfers aan, zodat jouw accountant direct kan vergelijken.</p>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                        <a href="{{ url('/vrijblijvend-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Vrijblijvend adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                        <a href="{{ url('/projecten') }}" class="bg-secondary/10 border border-secondary/20 rounded-full px-6 py-3.5 text-secondary text-xs font-semibold hover:bg-secondary/20 transition">Bekijk onze projecten</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
