@extends('layouts.app')

@section('title', 'Contact | Fitness Aannemer')
@section('meta_description', 'Neem contact op met Fitness Aannemer. Bel, mail of bezoek ons voor advies over jouw fitnessruimte.')

@section('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "ContactPage",
    "name": "Contact",
    "description": "Neem contact op met Fitness Aannemer voor advies over jouw fitnessruimte.",
    "url": "{{ url('/contact') }}",
    "mainEntity": {
        "@@type": "Organization",
        "name": "Fitness Aannemer",
        "url": "{{ url('/') }}",
        "email": "info@fitnessaannemer.nl",
        "telephone": "+31850609981"
    }
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        { "@@type": "ListItem", "position": 1, "name": "Home", "item": "{{ url('/') }}" },
        { "@@type": "ListItem", "position": 2, "name": "Contact", "item": "{{ url('/contact') }}" }
    ]
}
</script>
@endsection

@section('content')
    {{-- Hero --}}
    <section class="bg-secondary pt-32 lg:pt-40 pb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="max-w-3xl">
                <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-4">Contact</span>
                <h1 class="text-white text-4xl lg:text-5xl font-bold leading-[1.05] mb-6">Wil jij jouw ideale fitnessruimte realiseren?</h1>
                <p class="text-white/60 text-sm lg:text-base leading-relaxed max-w-xl">Heb je een vraag over onze diensten of wil je vrijblijvend sparren over jouw project? Neem contact met ons op — we reageren binnen 24 uur.</p>
            </div>
        </div>
    </section>

    {{-- Contact info + kaart --}}
    <section class="bg-white py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                {{-- Contactgegevens --}}
                <div>
                    <h2 class="text-secondary text-2xl lg:text-3xl font-bold leading-[1.1] mb-8">Neem direct contact op</h2>

                    <div class="space-y-6">
                        <a href="tel:0850609981" class="flex items-start gap-4 group">
                            <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center flex-shrink-0 group-hover:bg-primary/20 transition-colors">
                                <i class="fa-solid fa-phone text-primary"></i>
                            </div>
                            <div>
                                <p class="text-secondary text-sm font-semibold mb-0.5" style="font-family: 'Inter Tight'">(085) 060 - 9981</p>
                                <p class="text-secondary/40 text-xs">Ma - Za: 9:00 - 18:00</p>
                            </div>
                        </a>

                        <a href="mailto:info@fitnessaannemer.nl" class="flex items-start gap-4 group">
                            <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center flex-shrink-0 group-hover:bg-primary/20 transition-colors">
                                <i class="fa-solid fa-envelope text-primary"></i>
                            </div>
                            <div>
                                <p class="text-secondary text-sm font-semibold mb-0.5" style="font-family: 'Inter Tight'">info@fitnessaannemer.nl</p>
                                <p class="text-secondary/40 text-xs">Reactie binnen 24 uur</p>
                            </div>
                        </a>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-location-dot text-primary"></i>
                            </div>
                            <div>
                                <p class="text-secondary text-sm font-semibold mb-0.5" style="font-family: 'Inter Tight'">Soerense Zand Zuid 13</p>
                                <p class="text-secondary/40 text-xs">6961 RA Eerbeek</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-clock text-primary"></i>
                            </div>
                            <div>
                                <p class="text-secondary text-sm font-semibold mb-0.5" style="font-family: 'Inter Tight'">Openingstijden</p>
                                <p class="text-secondary/40 text-xs">Maandag - Zaterdag: 9:00 - 18:00</p>
                            </div>
                        </div>
                    </div>

                    {{-- Social media --}}
                    <div class="mt-10">
                        <p class="text-secondary text-sm font-semibold mb-4" style="font-family: 'Inter Tight'">Volg ons</p>
                        <div class="flex items-center gap-3">
                            <a href="https://instagram.com/fitnessaannemer.nl" target="_blank" rel="noopener" class="w-10 h-10 rounded-full border border-secondary/10 flex items-center justify-center text-secondary/40 hover:text-primary hover:border-primary/30 transition">
                                <i class="fa-brands fa-instagram text-sm"></i>
                            </a>
                            <a href="https://tiktok.com/@fitnessaannemer" target="_blank" rel="noopener" class="w-10 h-10 rounded-full border border-secondary/10 flex items-center justify-center text-secondary/40 hover:text-primary hover:border-primary/30 transition">
                                <i class="fa-brands fa-tiktok text-sm"></i>
                            </a>
                            <a href="https://youtube.com/@fitnessaannemer" target="_blank" rel="noopener" class="w-10 h-10 rounded-full border border-secondary/10 flex items-center justify-center text-secondary/40 hover:text-primary hover:border-primary/30 transition">
                                <i class="fa-brands fa-youtube text-sm"></i>
                            </a>
                            <a href="https://linkedin.com/company/fitnessaannemer" target="_blank" rel="noopener" class="w-10 h-10 rounded-full border border-secondary/10 flex items-center justify-center text-secondary/40 hover:text-primary hover:border-primary/30 transition">
                                <i class="fa-brands fa-linkedin-in text-sm"></i>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Google Maps --}}
                <div class="rounded-3xl overflow-hidden border border-secondary/10 h-[480px]">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2460.0!2d6.0573!3d52.0987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c7a0b0b0b0b0b0%3A0x0!2sSoerense+Zand+Zuid+13%2C+6961+RA+Eerbeek!5e0!3m2!1snl!2snl!4v1700000000000!5m2!1snl!2snl"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

@endsection
