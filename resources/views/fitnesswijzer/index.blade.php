@extends('layouts.app')

@section('title', 'Fitnesswijzer | Fitness Aannemer')
@section('meta_description', 'De Fitnesswijzer van Fitness Aannemer. Tips, inspiratie, verdienmodellen en gymreviews voor iedereen die een fitnessruimte wil starten of verbeteren.')

@section('content')
    <section class="bg-secondary pt-32 lg:pt-40 pb-16 lg:pb-30" id="fw-hero">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="ip-hero-el flex items-center gap-2 mb-6">
                <a href="{{ url('/') }}" class="text-white/40 text-xs font-medium hover:text-white transition" style="font-family: 'Inter Tight'">Home</a>
                <i class="fa-solid fa-chevron-right text-white/20 text-[8px]"></i>
                <span class="text-white/70 text-xs font-medium" style="font-family: 'Inter Tight'">Fitnesswijzer</span>
            </div>
            <div class="max-w-3xl">
                <h1 class="ip-hero-el text-white text-4xl lg:text-6xl font-bold leading-[1]">Fitness<span class="text-primary">wijzer</span></h1>
                <p class="ip-hero-el text-white/60 text-sm lg:text-base leading-relaxed max-w-xl my-8">Kennis, inspiratie en inzichten voor iedereen die een fitnessruimte wil starten, uitbreiden of verbeteren. Van verdienmodellen tot praktische tips.</p>
                <div class="ip-hero-el flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                    <a href="{{ url('/gratis-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Gratis adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                    <a href="{{ url('/projecten') }}" class="bg-white/10 border border-white/20 rounded-full px-6 py-3.5 text-white text-xs font-semibold hover:bg-white/20 transition">Bekijk onze projecten</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-16 lg:py-32 relative overflow-hidden" id="fw-section1">
        <div class="horizontal-blob w-[700px] h-[700px]" style="background: radial-gradient(circle, rgba(82,171,226,0.2) 0%, rgba(82,171,226,0) 70%); top: -20%; left: -10%; animation: blob-float-1 18s ease-in-out infinite;"></div>
        <div class="horizontal-blob w-[500px] h-[500px]" style="background: radial-gradient(circle, rgba(82,171,226,0.15) 0%, rgba(82,171,226,0) 70%); top: 40%; right: -10%; animation: blob-float-2 22s ease-in-out infinite;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="ip-block-text">
                    <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-6">Kennisbank</span>
                    <h2 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.05] mb-8">Alles wat je moet weten over <span class="text-primary">fitness inrichting</span></h2>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-4">Of je nu een sportschool start, een PT studio opent of een bestaande gym wilt vernieuwen. De juiste kennis maakt het verschil tussen een goede en een geweldige fitnessruimte.</p>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-8">In onze Fitnesswijzer delen we praktische inzichten, bewezen verdienmodellen en eerlijke ervaringen van gymeigenaren. Zodat jij weloverwogen keuzes maakt.</p>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                        <a href="{{ url('/gratis-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Gratis adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                        <a href="{{ url('/projecten') }}" class="bg-secondary/10 border border-secondary/20 rounded-full px-6 py-3.5 text-secondary text-xs font-semibold hover:bg-secondary/20 transition">Bekijk onze projecten</a>
                    </div>
                </div>
                <div class="ip-block-media rounded-3xl aspect-[4/3] overflow-hidden">
                    <video src="{{ asset('shorts/fitnessaannemer-short-1.mp4') }}" class="w-full h-full object-cover" autoplay muted loop playsinline></video>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-secondary py-16 lg:py-32 overflow-hidden" id="fw-section2">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="ip-fade text-center mb-16">
                <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-4">Ontdek</span>
                <h2 class="text-white text-3xl lg:text-5xl font-bold leading-[1.05]">Kies jouw <span class="text-primary">onderwerp</span></h2>
            </div>

            <div class="ip-fade grid grid-cols-1 md:grid-cols-3 gap-6">
                <a href="{{ url('/fitnesswijzer/gym-verdienmodellen') }}" class="group bg-white/[0.03] border border-white/[0.06] rounded-2xl p-8 lg:p-10 hover:border-primary/30 hover:bg-primary/[0.04] transition-all duration-300">
                    <div class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center mb-6 group-hover:bg-primary/20 transition-colors">
                        <i class="fa-solid fa-chart-pie text-primary text-xl"></i>
                    </div>
                    <h3 class="text-white text-xl font-bold mb-3">Gym verdienmodellen</h3>
                    <p class="text-white/40 text-sm leading-relaxed mb-6">Ontdek de verschillende verdienmodellen voor sportscholen, PT studio's en boutique gyms. Van abonnementen tot personal training.</p>
                    <span class="inline-flex items-center text-primary text-xs font-semibold" style="font-family: 'Inter Tight'">
                        Lees meer <i class="fa-solid fa-arrow-right text-[10px] ml-1.5"></i>
                    </span>
                </a>

                <a href="{{ url('/fitnesswijzer/tips-en-inspiratie') }}" class="group bg-white/[0.03] border border-white/[0.06] rounded-2xl p-8 lg:p-10 hover:border-primary/30 hover:bg-primary/[0.04] transition-all duration-300">
                    <div class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center mb-6 group-hover:bg-primary/20 transition-colors">
                        <i class="fa-solid fa-lightbulb text-primary text-xl"></i>
                    </div>
                    <h3 class="text-white text-xl font-bold mb-3">Tips & inspiratie</h3>
                    <p class="text-white/40 text-sm leading-relaxed mb-6">Praktische tips voor het inrichten, runnen en groeien van jouw fitnessruimte. Van apparatuurkeuze tot sfeer en branding.</p>
                    <span class="inline-flex items-center text-primary text-xs font-semibold" style="font-family: 'Inter Tight'">
                        Lees meer <i class="fa-solid fa-arrow-right text-[10px] ml-1.5"></i>
                    </span>
                </a>

                <a href="{{ url('/fitnesswijzer/gymreviews') }}" class="group bg-white/[0.03] border border-white/[0.06] rounded-2xl p-8 lg:p-10 hover:border-primary/30 hover:bg-primary/[0.04] transition-all duration-300">
                    <div class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center mb-6 group-hover:bg-primary/20 transition-colors">
                        <i class="fa-solid fa-star text-primary text-xl"></i>
                    </div>
                    <h3 class="text-white text-xl font-bold mb-3">Gymreviews</h3>
                    <p class="text-white/40 text-sm leading-relaxed mb-6">Eerlijke ervaringen van gymeigenaren over hun inrichtingstraject. Ontdek wat anderen vinden van het proces en resultaat.</p>
                    <span class="inline-flex items-center text-primary text-xs font-semibold" style="font-family: 'Inter Tight'">
                        Lees meer <i class="fa-solid fa-arrow-right text-[10px] ml-1.5"></i>
                    </span>
                </a>
            </div>
        </div>
    </section>

    <section class="bg-white py-16 lg:py-32 relative overflow-hidden" id="fw-section3">
        <div class="horizontal-blob w-[600px] h-[600px]" style="background: radial-gradient(circle, rgba(82,171,226,0.18) 0%, rgba(82,171,226,0) 70%); top: -15%; right: -5%; animation: blob-float-3 15s ease-in-out infinite;"></div>
        <div class="horizontal-blob w-[500px] h-[500px]" style="background: radial-gradient(circle, rgba(82,171,226,0.15) 0%, rgba(82,171,226,0) 70%); bottom: -20%; left: -8%; animation: blob-float-1 20s ease-in-out infinite;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="ip-block-text">
                    <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-6">Direct starten</span>
                    <h2 class="text-secondary text-3xl lg:text-5xl font-bold leading-[1.05] mb-8">Klaar om jouw gym te <span class="text-primary">realiseren</span>?</h2>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-4">Heb je al een idee maar weet je niet waar te beginnen? Of zoek je een partner die het complete traject verzorgt? Wij helpen je graag verder met een vrijblijvend adviesgesprek.</p>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-8">Van eerste concept tot sleuteloverdracht. Wij ontzorgen het complete traject: ontwerp, apparatuurselectie, levering, installatie en nazorg. Alles uit een hand.</p>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                        <a href="{{ url('/gratis-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Gratis adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
                        <a href="{{ url('/projecten') }}" class="bg-secondary/10 border border-secondary/20 rounded-full px-6 py-3.5 text-secondary text-xs font-semibold hover:bg-secondary/20 transition">Bekijk onze projecten</a>
                    </div>
                </div>
                <div class="ip-block-media rounded-3xl aspect-[4/3] overflow-hidden">
                    <img src="{{ asset('assets/foto-assets/MCJO3851_FA-1-1024x683.jpg') }}" alt="Fitnessruimte ontwerp" class="w-full h-full object-cover" loading="lazy">
                </div>
            </div>
        </div>
    </section>

@endsection
