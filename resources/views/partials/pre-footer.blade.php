{{-- CTA Section --}}
<div class="bg-secondary text-center pt-16 lg:pt-32 px-4 sm:px-6 relative z-10">
    <h2 class="brands-fade text-white text-3xl md:text-5xl lg:text-6xl font-bold leading-[1.05] mb-6">Klaar om jouw gym<br><span class="text-primary">te realiseren?</span></h2>
    <p class="brands-fade text-white/35 text-sm leading-relaxed max-w-lg mx-auto">Van ontwerp tot oplevering, wij regelen alles. Neem contact op voor een vrijblijvend adviesgesprek en ontdek wat wij voor jouw gym kunnen betekenen.</p>
    <div class="flex flex-col sm:flex-row items-center justify-center gap-3 sm:gap-4 mt-8">
        <a href="{{ url('/vrijblijvend-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Vrijblijvend adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
        <a href="{{ url('/projecten') }}" class="bg-white/10 border border-white/20 rounded-full px-6 py-3.5 text-white text-xs font-semibold hover:bg-white/20 transition">Bekijk onze projecten</a>
    </div>
</div>

{{-- Video Arc Carousel --}}
<div class="project-arc bg-secondary relative z-10">
    @php
    $arcShorts = [22, 20, 21, 1, 3, 5, 7, 9, 10];
    @endphp
    @foreach($arcShorts as $idx => $num)
    <div class="project-arc-card rounded-2xl" data-arc-index="{{ $idx }}">
        <video data-src="{{ asset('shorts/fitnessaannemer-short-' . $num . '.mp4') }}" class="lazy-video absolute inset-0 w-full h-full object-cover rounded-2xl" preload="none" muted loop playsinline></video>
        <div class="project-arc-overlay absolute inset-0 bg-secondary rounded-2xl pointer-events-none"></div>
    </div>
    @endforeach
</div>
