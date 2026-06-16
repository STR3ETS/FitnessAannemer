@extends('layouts.app')

@section('title', 'Onderhoud & Reparaties | Fitness Aannemer')
@section('meta_description', 'Professioneel onderhoud en snelle reparatie van fitnessapparatuur. Minimaliseer downtime en verleng de levensduur van jouw investering.')

@section('content')
    <section class="bg-secondary pt-32 lg:pt-40 pb-16 lg:pb-30" id="or-hero">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="ip-hero-el flex items-center gap-2 mb-6">
                <a href="{{ url('/diensten') }}" class="text-white/40 text-xs font-medium hover:text-white transition" style="font-family: 'Inter Tight'">Diensten</a>
                <i class="fa-solid fa-chevron-right text-white/20 text-[8px]"></i>
                <span class="text-white/70 text-xs font-medium" style="font-family: 'Inter Tight'">Onderhoud & reparaties</span>
            </div>
            <div class="max-w-3xl">
                <h1 class="ip-hero-el text-white text-4xl lg:text-6xl font-bold leading-[1]">Onderhoud &<br><span class="text-primary">reparaties</span></h1>
                <p class="ip-hero-el text-white/60 text-sm lg:text-base leading-relaxed max-w-xl my-8">Bescherm je investering met professioneel onderhoud en snelle reparaties. Wij zorgen dat jouw apparatuur altijd in topconditie blijft.</p>
                <div class="ip-hero-el flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                    <a href="{{ url('/gratis-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Gratis adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                    <a href="{{ url('/projecten') }}" class="bg-white/10 border border-white/20 rounded-full px-6 py-3.5 text-white text-xs font-semibold hover:bg-white/20 transition">Bekijk onze projecten</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-16 lg:py-32 relative overflow-hidden" id="or-section1">
        <div class="horizontal-blob w-[700px] h-[700px]" style="background: radial-gradient(circle, rgba(82,171,226,0.2) 0%, rgba(82,171,226,0) 70%); top: -20%; left: -10%; animation: blob-float-1 18s ease-in-out infinite;"></div>
        <div class="horizontal-blob w-[500px] h-[500px]" style="background: radial-gradient(circle, rgba(82,171,226,0.15) 0%, rgba(82,171,226,0) 70%); top: 40%; right: -10%; animation: blob-float-2 22s ease-in-out infinite;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="ip-block-text">
                    <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-6">Preventief onderhoud</span>
                    <h2 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.05] mb-8">Voorkom stilstand, <span class="text-primary">bescherm je investering</span></h2>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-4">Fitnessapparatuur draait dagelijks op volle capaciteit. Zonder regelmatig onderhoud slijten onderdelen sneller, ontstaan storingen en daalt de gebruikservaring voor jouw leden. Preventief onderhoud voorkomt dit.</p>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-8">Met een onderhoudscontract op maat zorgen wij voor periodieke inspectie, smering, kalibratie en vervanging van slijtdelen. Zodat jouw apparatuur jarenlang betrouwbaar blijft draaien.</p>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                        <a href="{{ url('/gratis-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Gratis adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                        <a href="{{ url('/projecten') }}" class="bg-secondary/10 border border-secondary/20 rounded-full px-6 py-3.5 text-secondary text-xs font-semibold hover:bg-secondary/20 transition">Bekijk onze projecten</a>
                    </div>
                </div>
                <div class="ip-block-media rounded-3xl aspect-[4/3] overflow-hidden">
                    <img src="{{ asset('assets/foto-assets/BluePrint-2024-photos-39-1024x683.jpg') }}" alt="Onderhoud fitnessapparatuur" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    {{-- Process timeline --}}
    <section class="bg-secondary py-16 lg:py-32 overflow-hidden" id="or-process">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="text-center mb-20">
                <span class="ip-fade inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-4">Hoe wij werken</span>
                <h2 class="ip-fade text-white text-4xl lg:text-5xl font-bold leading-[1.05]">Van inspectie tot<br><span class="text-primary">optimale conditie</span></h2>
            </div>

            @php
            $stappen = [
                [
                    'nr' => '01',
                    'icon' => 'fa-magnifying-glass',
                    'title' => 'Inspectie & inventarisatie',
                    'desc' => 'We starten met een grondige inspectie van al jouw apparatuur. Elke machine wordt beoordeeld op staat, slijtage en veiligheid. Zo weten we precies waar de aandacht naartoe moet.',
                    'detail' => 'Complete inventarisatie',
                    'video' => '/shorts/fitnessaannemer-short-5.mp4',
                ],
                [
                    'nr' => '02',
                    'icon' => 'fa-clipboard-list',
                    'title' => 'Onderhoudsplan op maat',
                    'desc' => 'Op basis van de inspectie stellen we een onderhoudsschema op dat past bij jouw situatie. Frequentie, prioriteiten en budgettering, alles helder vastgelegd.',
                    'detail' => 'Afgestemd op jouw situatie',
                    'images' => [
                        ['src' => '/assets/foto-assets/FULL-Ballin-Fit-016-WF106882-1-683x1024.jpg', 'alt' => 'Onderhoudsplan opstellen'],
                        ['src' => '/assets/foto-assets/lesi-box-576x1024.jpg', 'alt' => 'Apparatuur beoordeling'],
                    ],
                ],
                [
                    'nr' => '03',
                    'icon' => 'fa-gears',
                    'title' => 'Periodiek onderhoud',
                    'desc' => 'Volgens planning voeren we onderhoud uit: smering, kalibratie, vervanging van slijtdelen en functionele tests. Alles gedocumenteerd in een onderhoudsrapport.',
                    'detail' => 'Volledig gedocumenteerd',
                    'video' => '/shorts/fitnessaannemer-short-7.mp4',
                ],
                [
                    'nr' => '04',
                    'icon' => 'fa-wrench',
                    'title' => 'Reparatie & vervanging',
                    'desc' => 'Bij storingen staan we snel paraat. We repareren ter plaatse of regelen vervangende onderdelen. Minimale downtime, maximale beschikbaarheid voor jouw leden.',
                    'detail' => 'Snelle responstijd',
                    'image' => '/assets/2.jpg',
                    'image_alt' => 'Reparatie fitnessapparatuur',
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
                            <span class="text-primary/30 text-6xl font-bold leading-none" style="font-family: 'Inter Tight'">{{ $stap['nr'] }}</span>
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

    <section class="bg-white py-16 lg:py-32 relative overflow-hidden" id="or-section2">
        <div class="horizontal-blob w-[600px] h-[600px]" style="background: radial-gradient(circle, rgba(82,171,226,0.18) 0%, rgba(82,171,226,0) 70%); top: -15%; right: -5%; animation: blob-float-3 15s ease-in-out infinite;"></div>
        <div class="horizontal-blob w-[500px] h-[500px]" style="background: radial-gradient(circle, rgba(82,171,226,0.15) 0%, rgba(82,171,226,0) 70%); bottom: -20%; left: -8%; animation: blob-float-1 20s ease-in-out infinite;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="ip-block-media rounded-3xl aspect-[4/3] overflow-hidden">
                    <img src="{{ asset('assets/4.jpg') }}" alt="Snelle reparatieservice" class="w-full h-full object-cover">
                </div>
                <div class="ip-block-text">
                    <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-6">Altijd bereikbaar</span>
                    <h2 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.05] mb-8">Storing? <span class="text-primary">Wij staan paraat</span></h2>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-4">Een kapot toestel betekent ontevreden leden en gemiste inkomsten. Daarom bieden wij snelle reparatieservice met korte responstijden. Ons team van ervaren technici lost de meeste storingen ter plaatse op.</p>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-8">Geen wachtlijsten en geen onduidelijkheid. Neem contact op en wij zorgen dat jouw gym zo snel mogelijk weer op volle kracht draait. In heel Nederland en Belgie.</p>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                        <a href="{{ url('/gratis-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Gratis adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                        <a href="{{ url('/projecten') }}" class="bg-secondary/10 border border-secondary/20 rounded-full px-6 py-3.5 text-secondary text-xs font-semibold hover:bg-secondary/20 transition">Bekijk onze projecten</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
