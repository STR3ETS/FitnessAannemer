{{-- CTA Section --}}
<div class="bg-secondary text-center pt-16 lg:pt-32 px-4 sm:px-6 relative z-10">
    <h2 class="brands-fade text-white text-3xl md:text-5xl lg:text-6xl font-bold leading-[1.05] mb-6">Klaar om jouw gym<br><span class="text-primary">te realiseren?</span></h2>
    <p class="brands-fade text-white/35 text-sm leading-relaxed max-w-lg mx-auto">Van concept tot oplevering, wij regelen alles. Neem contact op voor een vrijblijvend adviesgesprek en ontdek wat wij voor jouw fitnessruimte kunnen betekenen.</p>
    <div class="flex flex-col sm:flex-row items-center justify-center gap-3 sm:gap-4 mt-8">
        <a href="{{ url('/gratis-adviesgesprek') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">Gratis adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i></a>
        <a href="{{ url('/offerte-aanvragen') }}" class="bg-white/10 border border-white/20 rounded-full px-6 py-3.5 text-white text-xs font-semibold hover:bg-white/20 transition">Offerte aanvragen</a>
    </div>
</div>

{{-- Video Arc Carousel --}}
<div class="project-arc bg-secondary relative z-10">
    @for ($i = 1; $i <= 9; $i++)
    <div class="project-arc-card rounded-2xl" data-arc-index="{{ $i - 1 }}">
        <video src="/shorts/fitnessaannemer-short-{{ $i }}.mp4" class="absolute inset-0 w-full h-full object-cover rounded-2xl" muted loop playsinline></video>
        <div class="project-arc-overlay absolute inset-0 bg-secondary rounded-2xl pointer-events-none"></div>
    </div>
    @endfor
</div>

{{-- Reviews Marquee Strip --}}
<div class="bg-secondary py-16 overflow-hidden relative">
    <div class="reviews-marquee-track flex gap-6" style="width: max-content">
        @php
        $marqueeReviews = [
            ['quote' => 'Vanaf het eerste adviesgesprek voelde het professioneel en persoonlijk. Het resultaat is boven verwachting.', 'name' => 'Jordi Vermeer', 'role' => 'FarmFit Culemborg', 'initials' => 'JV'],
            ['quote' => 'Fitness Aannemer leverde niet alleen de apparatuur, maar dacht ook mee over de indeling en sfeer. Top service.', 'name' => 'Mike Bakker', 'role' => 'Ballin Fit Amsterdam', 'initials' => 'MB'],
            ['quote' => 'De snelheid en kwaliteit waarmee alles geregeld werd was indrukwekkend. Leden zijn super enthousiast.', 'name' => 'Sophie Klein', 'role' => 'Upshape Den Haag', 'initials' => 'SK'],
            ['quote' => 'Fitness Aannemer begreep direct wat we nodig hadden en leverde een strak, premium resultaat af.', 'name' => 'Rob Hendriks', 'role' => 'Van der Valk', 'initials' => 'RH'],
            ['quote' => 'Van rig tot vloer, alles is top. De nazorg is ook uitstekend, ze staan altijd klaar.', 'name' => 'Dennis de Wit', 'role' => 'Vitality Sports Duiven', 'initials' => 'DW'],
            ['quote' => 'Echt een team dat snapt wat een gym nodig heeft. Alles werd tot in detail verzorgd.', 'name' => 'Laura Jansen', 'role' => 'PowerZone Rotterdam', 'initials' => 'LJ'],
        ];
        @endphp
        @for($set = 0; $set < 2; $set++)
            @foreach($marqueeReviews as $mr)
            <div class="review-marquee-card flex-shrink-0 w-[300px] sm:w-[400px] bg-white/[0.04] border border-white/[0.08] rounded-2xl p-6">
                <div class="flex gap-0.5 mb-4">
                    @for($s = 0; $s < 5; $s++)
                    <svg class="w-3.5 h-3.5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    @endfor
                </div>
                <p class="text-white/70 text-sm leading-relaxed mb-5">"{{ $mr['quote'] }}"</p>
                <div class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-full bg-primary/15 border border-primary/25 flex items-center justify-center">
                        <span class="text-primary text-[10px] font-bold">{{ $mr['initials'] }}</span>
                    </div>
                    <div>
                        <p class="text-white text-xs font-semibold">{{ $mr['name'] }}</p>
                        <p class="text-white/30 text-[11px]">{{ $mr['role'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        @endfor
    </div>
</div>
