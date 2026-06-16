@extends('layouts.app')

@section('title', 'Levering & Installatie | Fitness Aannemer')
@section('meta_description', 'Complete levering en professionele installatie van fitnessapparatuur door ons eigen montageteam. Turnkey oplevering in heel Nederland en Belgie.')

@section('content')
    <section class="bg-secondary pt-32 lg:pt-40 pb-16 lg:pb-30" id="li-hero">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="ip-hero-el flex items-center gap-2 mb-6">
                <a href="{{ url('/diensten') }}" class="text-white/40 text-xs font-medium hover:text-white transition" style="font-family: 'Inter Tight'">Diensten</a>
                <i class="fa-solid fa-chevron-right text-white/20 text-[8px]"></i>
                <span class="text-white/70 text-xs font-medium" style="font-family: 'Inter Tight'">Levering & installatie</span>
            </div>
            <div class="max-w-3xl">
                <h1 class="ip-hero-el text-white text-4xl lg:text-6xl font-bold leading-[1]">Levering &<br><span class="text-primary">installatie</span></h1>
                <p class="ip-hero-el text-white/60 text-sm lg:text-base leading-relaxed max-w-xl my-8">Wij zorgen voor de complete levering en professionele installatie van jouw fitnessruimte. Van transport tot oplevering, alles uit een hand.</p>
                <div class="ip-hero-el flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                    <a href="{{ url('/gratis-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Gratis adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
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
                    <h2 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.05] mb-8">Professionele installatie <br class="hidden md:block"><span class="text-primary">uit eigen huis</span></h2>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-4">Ons ervaren montageteam verzorgt de complete installatie van jouw fitnessruimte. Van het leggen van professionele sportvloeren tot het plaatsen en kalibreren van alle apparatuur. Geen onderaannemers, geen miscommunicatie.</p>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-8">We werken volgens een strak draaiboek zodat alles op tijd en volgens plan wordt opgeleverd. Een aanspreekpunt, een planning, direct klaar voor gebruik.</p>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                        <a href="{{ url('/gratis-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Gratis adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
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
                <h2 class="ip-fade text-white text-4xl lg:text-5xl font-bold leading-[1.05]">Van bestelling tot<br><span class="text-primary">gebruiksklare gym</span></h2>
            </div>

            @php
            $stappen = [
                [
                    'nr' => '01',
                    'icon' => 'fa-clipboard-check',
                    'title' => 'Orderbevestiging & planning',
                    'desc' => 'Na akkoord op de offerte plannen we de levering en installatie in. Je krijgt een duidelijke planning met vaste data en een persoonlijke projectcoordinator als vast aanspreekpunt.',
                    'detail' => 'Vaste contactpersoon',
                    'video' => '/shorts/fitnessaannemer-short-2.mp4',
                ],
                [
                    'nr' => '02',
                    'icon' => 'fa-truck-fast',
                    'title' => 'Logistiek & transport',
                    'desc' => 'Wij coordineren het volledige transport. Alle apparatuur wordt veilig verpakt en geleverd op de afgesproken datum. Rechtstreeks van de fabrikant naar jouw locatie.',
                    'detail' => 'Gecoordineerd transport',
                    'images' => [
                        ['src' => '/assets/foto-assets/BluePrint-2024-photos-47-1024x683.jpg', 'alt' => 'Levering fitnessapparatuur'],
                        ['src' => '/assets/foto-assets/Snapinsta.app_370955197_18291839842131715_7907551785806304431_n_1080-819x1024.jpg', 'alt' => 'Transport coordinatie'],
                    ],
                ],
                [
                    'nr' => '03',
                    'icon' => 'fa-screwdriver-wrench',
                    'title' => 'Installatie & montage',
                    'desc' => 'Ons eigen team plaatst en installeert alle apparatuur, vloeren, spiegels en accessoires. Alles wordt professioneel gemonteerd en afgesteld voor direct gebruik.',
                    'detail' => 'Eigen montageteam',
                    'video' => '/shorts/fitnessaannemer-short-4.mp4',
                ],
                [
                    'nr' => '04',
                    'icon' => 'fa-circle-check',
                    'title' => 'Keuring & oplevering',
                    'desc' => 'Na installatie keuren we alle apparatuur, geven we een uitgebreide instructie en dragen het project officieel aan je over. Direct klaar voor gebruik.',
                    'detail' => 'Gebruiksklaar opgeleverd',
                    'image' => '/assets/foto-assets/SOCIAL-Farmfit-015-WF104887-1-1-1024x683.jpg',
                    'image_alt' => 'Opgeleverde fitnessruimte',
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

    <section class="bg-white py-16 lg:py-32 relative overflow-hidden" id="li-section2">
        <div class="horizontal-blob w-[600px] h-[600px]" style="background: radial-gradient(circle, rgba(82,171,226,0.18) 0%, rgba(82,171,226,0) 70%); top: -15%; right: -5%; animation: blob-float-3 15s ease-in-out infinite;"></div>
        <div class="horizontal-blob w-[500px] h-[500px]" style="background: radial-gradient(circle, rgba(82,171,226,0.15) 0%, rgba(82,171,226,0) 70%); bottom: -20%; left: -8%; animation: blob-float-1 20s ease-in-out infinite;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="ip-block-media rounded-3xl aspect-[4/3] overflow-hidden">
                    <img src="{{ asset('assets/3.jpg') }}" alt="Turnkey opgeleverde fitnessruimte" class="w-full h-full object-cover">
                </div>
                <div class="ip-block-text">
                    <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-6">Turnkey oplevering</span>
                    <h2 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.05] mb-8">Een partij voor <span class="text-primary">het complete traject</span></h2>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-4">Geen gedoe met meerdere leveranciers, transporteurs en monteurs. Wij regelen alles van A tot Z. Dat betekent minder stress, snellere oplevering en een gegarandeerd eindresultaat.</p>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-8">Of het nu gaat om een complete sportschool of een compacte hotelgym, wij leveren en installeren in heel Nederland en Belgie. Met een vaste opleverdatum die we nakomen.</p>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                        <a href="{{ url('/gratis-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Gratis adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                        <a href="{{ url('/projecten') }}" class="bg-secondary/10 border border-secondary/20 rounded-full px-6 py-3.5 text-secondary text-xs font-semibold hover:bg-secondary/20 transition">Bekijk onze projecten</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
