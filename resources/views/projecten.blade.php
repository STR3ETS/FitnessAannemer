@extends('layouts.app')

@section('title', 'Projecten | Fitness Aannemer')
@section('meta_description', 'Bekijk onze gerealiseerde projecten. Van PT studio\'s tot commerciele sportscholen. Ontdek wat Fitness Aannemer heeft gerealiseerd.')

@section('content')
    <section class="bg-secondary pt-32 lg:pt-40 pb-16 lg:pb-30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="ip-hero-el flex items-center gap-2 mb-6">
                <a href="{{ url('/') }}" class="text-white/40 text-xs font-medium hover:text-white transition" style="font-family: 'Inter Tight'">Home</a>
                <i class="fa-solid fa-chevron-right text-white/20 text-[8px]"></i>
                <span class="text-white/70 text-xs font-medium" style="font-family: 'Inter Tight'">Projecten</span>
            </div>
            <div class="max-w-3xl">
                <h1 class="ip-hero-el text-white text-4xl lg:text-6xl font-bold leading-[1]">Onze <span class="text-primary">projecten</span></h1>
                <p class="ip-hero-el text-white/60 text-sm lg:text-base leading-relaxed max-w-xl my-6 lg:my-8">Van luxe PT studio's tot grote functionele gyms. Bekijk een selectie van gerealiseerde projecten en ontdek wat wij voor jou kunnen betekenen.</p>
                <div class="ip-hero-el flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                    <a href="{{ url('/gratis-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Gratis adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                    <a href="{{ url('/diensten') }}" class="bg-white/10 border border-white/20 rounded-full px-6 py-3.5 text-white text-xs font-semibold hover:bg-white/20 transition">Bekijk onze diensten</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-16 lg:py-32 relative overflow-hidden" id="pj-section1">
        <div class="horizontal-blob w-[700px] h-[700px]" style="background: radial-gradient(circle, rgba(82,171,226,0.2) 0%, rgba(82,171,226,0) 70%); top: -20%; left: -10%; animation: blob-float-1 18s ease-in-out infinite;"></div>
        <div class="horizontal-blob w-[500px] h-[500px]" style="background: radial-gradient(circle, rgba(82,171,226,0.15) 0%, rgba(82,171,226,0) 70%); top: 40%; right: -10%; animation: blob-float-2 22s ease-in-out infinite;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="ip-block-text">
                    <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-6">Portfolio</span>
                    <h2 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.05] mb-6 lg:mb-8">Van eerste schets tot <span class="text-primary">sleuteloverdracht</span></h2>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-4">Elk project begint met een gesprek. Over jouw visie, doelgroep en ambities. Samen vertalen we dat naar een fitnessruimte die er niet alleen goed uitziet, maar ook goed werkt.</p>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-8">Van compacte PT studio's tot grote commerciele sportscholen. Wij verzorgen het complete traject: ontwerp, apparatuurselectie, levering, installatie en nazorg.</p>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                        <a href="{{ url('/gratis-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Gratis adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                        <a href="{{ url('/diensten') }}" class="bg-secondary/10 border border-secondary/20 rounded-full px-6 py-3.5 text-secondary text-xs font-semibold hover:bg-secondary/20 transition">Bekijk onze diensten</a>
                    </div>
                </div>
                <div class="ip-block-media rounded-3xl aspect-[4/3] overflow-hidden">
                    <video src="{{ asset('shorts/fitnessaannemer-short-2.mp4') }}" class="w-full h-full object-cover" autoplay muted loop playsinline></video>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-secondary py-16 lg:py-32 overflow-hidden" id="pj-section2">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="ip-fade text-center mb-10 lg:mb-16">
                <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-4">Gerealiseerd</span>
                <h2 class="text-white text-3xl lg:text-5xl font-bold leading-[1.05]">Een selectie van onze <span class="text-primary">projecten</span></h2>
            </div>

            <div class="ip-fade grid grid-cols-1 md:grid-cols-2 gap-6 mb-12 lg:mb-20">
                @foreach($projecten as $slug => $project)
                <a href="{{ url('/projecten/' . $slug) }}" class="group bg-white/[0.03] border border-white/[0.06] rounded-2xl overflow-hidden hover:border-primary/30 transition-all duration-300 {{ $loop->first ? 'md:col-span-2' : '' }}">
                    <div class="aspect-[16/9] {{ $loop->first ? 'md:aspect-[21/9]' : '' }} relative overflow-hidden">
                        <img src="{{ $project['cardImage'] }}" alt="{{ $project['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-secondary via-secondary/70 to-secondary/20"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 sm:p-8">
                            <div class="flex items-center gap-3 mb-3">
                                <span class="inline-block bg-primary/20 text-primary text-[10px] font-semibold px-2.5 py-1 rounded-full border border-primary/30">{{ $project['type'] }}</span>
                                <span class="text-white/70 text-xs font-semibold" style="font-family: 'Inter Tight'">{{ $project['size'] }}</span>
                                <span class="text-white/30 text-xs">&#8226;</span>
                                <span class="text-white/70 text-xs font-semibold" style="font-family: 'Inter Tight'">{{ $project['location'] }}</span>
                            </div>
                            <h3 class="text-white text-2xl {{ $loop->first ? 'lg:text-3xl' : '' }} font-bold mb-2" style="font-family: 'Inter Tight'">{{ $project['title'] }}</h3>
                            <p class="text-white/70 text-sm leading-relaxed max-w-lg">{{ $project['cardDesc'] }}</p>
                            <span class="inline-flex items-center text-primary text-xs font-semibold mt-4" style="font-family: 'Inter Tight'">
                                Bekijk project <i class="fa-solid fa-arrow-right text-[10px] ml-1.5 group-hover:translate-x-1 transition-transform"></i>
                            </span>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>

            <div class="ip-fade grid grid-cols-2 md:grid-cols-4 gap-6 sm:gap-8 text-center pt-12 lg:pt-16 border-t border-white/[0.06]">
                <div>
                    <p class="text-primary text-3xl lg:text-5xl font-bold mb-2">5+</p>
                    <p class="text-white/40 text-xs uppercase font-semibold tracking-wider">Projecten</p>
                </div>
                <div>
                    <p class="text-primary text-3xl lg:text-5xl font-bold mb-2">2400+</p>
                    <p class="text-white/40 text-xs uppercase font-semibold tracking-wider">M² gerealiseerd</p>
                </div>
                <div>
                    <p class="text-primary text-3xl lg:text-5xl font-bold mb-2">NL & BE</p>
                    <p class="text-white/40 text-xs uppercase font-semibold tracking-wider">Werkgebied</p>
                </div>
                <div>
                    <p class="text-primary text-3xl lg:text-5xl font-bold mb-2">A-Z</p>
                    <p class="text-white/40 text-xs uppercase font-semibold tracking-wider">Ontzorgd</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-16 lg:py-32 relative overflow-hidden" id="pj-section3">
        <div class="horizontal-blob w-[600px] h-[600px]" style="background: radial-gradient(circle, rgba(82,171,226,0.18) 0%, rgba(82,171,226,0) 70%); top: -15%; right: -5%; animation: blob-float-3 15s ease-in-out infinite;"></div>
        <div class="horizontal-blob w-[500px] h-[500px]" style="background: radial-gradient(circle, rgba(82,171,226,0.15) 0%, rgba(82,171,226,0) 70%); bottom: -20%; left: -8%; animation: blob-float-1 20s ease-in-out infinite;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="ip-block-text">
                    <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-6">Jouw project</span>
                    <h2 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.05] mb-6 lg:mb-8">Word de volgende op <span class="text-primary">deze pagina</span></h2>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-4">Elk project op deze pagina begon met hetzelfde: een ondernemer met een visie en de behoefte aan een betrouwbare partner. Wij vertalen jouw idee naar een fitnessruimte die past bij jouw concept en doelgroep.</p>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-8">Plan een vrijblijvend adviesgesprek en ontdek hoe wij jouw gymproject tot een succes maken. Van eerste concept tot complete realisatie.</p>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                        <a href="{{ url('/gratis-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Gratis adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                        <a href="{{ url('/diensten') }}" class="bg-secondary/10 border border-secondary/20 rounded-full px-6 py-3.5 text-secondary text-xs font-semibold hover:bg-secondary/20 transition">Bekijk onze diensten</a>
                    </div>
                </div>
                <div class="ip-block-media rounded-3xl aspect-[4/3] overflow-hidden">
                    <img src="{{ asset('assets/foto-assets/MCJO3851_FA-1-1024x683.jpg') }}" alt="Gerealiseerd gymproject" class="w-full h-full object-cover" loading="lazy">
                </div>
            </div>
        </div>
    </section>

@endsection
