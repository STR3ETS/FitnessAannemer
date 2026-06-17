@extends('layouts.app')

@section('title', 'Offerte Aanvragen | Fitness Aannemer')
@section('meta_description', 'Vraag een vrijblijvende offerte aan voor jouw fitnessproject. Van sportscholen tot homegyms, wij maken een voorstel op maat.')

@section('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "WebPage",
    "name": "Offerte Aanvragen",
    "description": "Vraag een vrijblijvende offerte aan voor jouw fitnessproject.",
    "url": "{{ url('/offerte-aanvragen') }}"
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        { "@@type": "ListItem", "position": 1, "name": "Home", "item": "{{ url('/') }}" },
        { "@@type": "ListItem", "position": 2, "name": "Offerte Aanvragen", "item": "{{ url('/offerte-aanvragen') }}" }
    ]
}
</script>
@endsection

@section('content')
    <section class="bg-secondary pt-32 lg:pt-40 pb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="max-w-3xl">
                <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-4">Vrijblijvend</span>
                <h1 class="text-white text-4xl lg:text-5xl font-bold leading-[1.05] mb-6">Offerte <span class="text-primary">aanvragen</span></h1>
                <p class="text-white/60 text-sm lg:text-base leading-relaxed max-w-xl">Vertel ons over jouw project en ontvang een vrijblijvende offerte op maat. Wij reageren binnen 24 uur.</p>
            </div>
        </div>
    </section>

    <section class="bg-white py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-16">
                {{-- Form --}}
                <div class="lg:col-span-3">
                    @if(session('offerte_success'))
                    <div class="bg-primary/5 border border-primary/20 rounded-2xl p-12 text-center">
                        <div class="w-16 h-16 rounded-full bg-primary/15 flex items-center justify-center mx-auto mb-6">
                            <i class="fa-solid fa-check text-primary text-2xl"></i>
                        </div>
                        <h2 class="text-secondary text-2xl font-bold mb-3">Aanvraag ontvangen!</h2>
                        <p class="text-secondary/50 text-sm leading-relaxed mb-6 max-w-md mx-auto">Bedankt voor je offerte-aanvraag. Wij nemen binnen 24 uur contact met je op met een voorstel op maat.</p>
                        <a href="{{ url('/') }}" class="inline-flex items-center bg-primary rounded-full px-6 py-3.5 text-white text-xs font-semibold hover:bg-primary/90 transition">
                            Terug naar home <i class="fa-solid fa-arrow-right text-[10px] ml-2"></i>
                        </a>
                    </div>
                    @else
                    <form action="{{ url('/offerte-aanvragen') }}" method="POST" class="space-y-6">
                        @csrf

                        <div>
                            <h2 class="text-secondary text-xl font-bold mb-1" style="font-family: 'Inter Tight'">Jouw gegevens</h2>
                            <p class="text-secondary/40 text-sm mb-6">Velden met * zijn verplicht.</p>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="naam" class="block text-secondary text-xs font-semibold mb-2">Naam *</label>
                                <input type="text" id="naam" name="naam" required value="{{ old('naam') }}" class="w-full bg-secondary/[0.03] border border-secondary/[0.08] rounded-xl px-4 py-3.5 text-secondary text-sm placeholder:text-secondary/30 focus:border-primary/40 focus:outline-none transition" placeholder="Jouw naam">
                                @error('naam') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label for="bedrijf" class="block text-secondary text-xs font-semibold mb-2">Bedrijfsnaam</label>
                                <input type="text" id="bedrijf" name="bedrijf" value="{{ old('bedrijf') }}" class="w-full bg-secondary/[0.03] border border-secondary/[0.08] rounded-xl px-4 py-3.5 text-secondary text-sm placeholder:text-secondary/30 focus:border-primary/40 focus:outline-none transition" placeholder="Bedrijfsnaam (optioneel)">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="email" class="block text-secondary text-xs font-semibold mb-2">E-mail *</label>
                                <input type="email" id="email" name="email" required value="{{ old('email') }}" class="w-full bg-secondary/[0.03] border border-secondary/[0.08] rounded-xl px-4 py-3.5 text-secondary text-sm placeholder:text-secondary/30 focus:border-primary/40 focus:outline-none transition" placeholder="jouw@email.nl">
                                @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label for="telefoon" class="block text-secondary text-xs font-semibold mb-2">Telefoon *</label>
                                <input type="tel" id="telefoon" name="telefoon" required value="{{ old('telefoon') }}" class="w-full bg-secondary/[0.03] border border-secondary/[0.08] rounded-xl px-4 py-3.5 text-secondary text-sm placeholder:text-secondary/30 focus:border-primary/40 focus:outline-none transition" placeholder="06 - 1234 5678">
                                @error('telefoon') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        <hr class="border-secondary/[0.06] my-2">

                        <div>
                            <h2 class="text-secondary text-xl font-bold mb-1" style="font-family: 'Inter Tight'">Over jouw project</h2>
                            <p class="text-secondary/40 text-sm mb-6">Hoe meer je vertelt, hoe gerichter onze offerte.</p>
                        </div>

                        <div>
                            <label for="type_ruimte" class="block text-secondary text-xs font-semibold mb-2">Type ruimte *</label>
                            <select id="type_ruimte" name="type_ruimte" required class="w-full bg-secondary/[0.03] border border-secondary/[0.08] rounded-xl px-4 py-3.5 text-secondary text-sm focus:border-primary/40 focus:outline-none transition appearance-none">
                                <option value="">Selecteer type ruimte</option>
                                <option value="Sportschool" {{ old('type_ruimte') == 'Sportschool' ? 'selected' : '' }}>Sportschool</option>
                                <option value="PT-studio" {{ old('type_ruimte') == 'PT-studio' ? 'selected' : '' }}>PT-studio / boutique</option>
                                <option value="Bedrijfsfitness" {{ old('type_ruimte') == 'Bedrijfsfitness' ? 'selected' : '' }}>Bedrijfsfitness</option>
                                <option value="Homegym" {{ old('type_ruimte') == 'Homegym' ? 'selected' : '' }}>Homegym</option>
                                <option value="Hotel" {{ old('type_ruimte') == 'Hotel' ? 'selected' : '' }}>Hotel / hospitality</option>
                                <option value="Anders" {{ old('type_ruimte') == 'Anders' ? 'selected' : '' }}>Anders</option>
                            </select>
                            @error('type_ruimte') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="oppervlakte" class="block text-secondary text-xs font-semibold mb-2">Oppervlakte</label>
                                <select id="oppervlakte" name="oppervlakte" class="w-full bg-secondary/[0.03] border border-secondary/[0.08] rounded-xl px-4 py-3.5 text-secondary text-sm focus:border-primary/40 focus:outline-none transition appearance-none">
                                    <option value="">Selecteer oppervlakte</option>
                                    <option value="< 100 m2" {{ old('oppervlakte') == '< 100 m2' ? 'selected' : '' }}>< 100 m²</option>
                                    <option value="100-250 m2" {{ old('oppervlakte') == '100-250 m2' ? 'selected' : '' }}>100 - 250 m²</option>
                                    <option value="250-500 m2" {{ old('oppervlakte') == '250-500 m2' ? 'selected' : '' }}>250 - 500 m²</option>
                                    <option value="500-1000 m2" {{ old('oppervlakte') == '500-1000 m2' ? 'selected' : '' }}>500 - 1.000 m²</option>
                                    <option value="> 1000 m2" {{ old('oppervlakte') == '> 1000 m2' ? 'selected' : '' }}>> 1.000 m²</option>
                                </select>
                            </div>
                            <div>
                                <label for="budget" class="block text-secondary text-xs font-semibold mb-2">Budget indicatie</label>
                                <select id="budget" name="budget" class="w-full bg-secondary/[0.03] border border-secondary/[0.08] rounded-xl px-4 py-3.5 text-secondary text-sm focus:border-primary/40 focus:outline-none transition appearance-none">
                                    <option value="">Selecteer budget</option>
                                    <option value="< €25.000" {{ old('budget') == '< €25.000' ? 'selected' : '' }}>< €25.000</option>
                                    <option value="€25.000 - €50.000" {{ old('budget') == '€25.000 - €50.000' ? 'selected' : '' }}>€25.000 - €50.000</option>
                                    <option value="€50.000 - €100.000" {{ old('budget') == '€50.000 - €100.000' ? 'selected' : '' }}>€50.000 - €100.000</option>
                                    <option value="€100.000 - €250.000" {{ old('budget') == '€100.000 - €250.000' ? 'selected' : '' }}>€100.000 - €250.000</option>
                                    <option value="> €250.000" {{ old('budget') == '> €250.000' ? 'selected' : '' }}>> €250.000</option>
                                    <option value="Weet ik nog niet" {{ old('budget') == 'Weet ik nog niet' ? 'selected' : '' }}>Weet ik nog niet</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label for="diensten" class="block text-secondary text-xs font-semibold mb-3">Welke diensten heb je nodig?</label>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                                @php
                                $diensten = [
                                    'Inrichting & planning',
                                    'Levering & installatie',
                                    'Onderhoud & reparaties',
                                    'Leasing & financiering',
                                ];
                                @endphp
                                @foreach($diensten as $dienst)
                                <label class="flex items-center gap-3 bg-secondary/[0.03] border border-secondary/[0.08] rounded-xl px-4 py-3 cursor-pointer hover:border-primary/20 transition group">
                                    <input type="checkbox" name="diensten[]" value="{{ $dienst }}" class="w-4 h-4 rounded border-secondary/20 text-primary focus:ring-primary/30" {{ is_array(old('diensten')) && in_array($dienst, old('diensten')) ? 'checked' : '' }}>
                                    <span class="text-secondary/70 text-sm group-hover:text-secondary transition">{{ $dienst }}</span>
                                </label>
                                @endforeach
                            </div>
                        </div>

                        <div>
                            <label for="bericht" class="block text-secondary text-xs font-semibold mb-2">Omschrijf je project</label>
                            <textarea id="bericht" name="bericht" rows="5" class="w-full bg-secondary/[0.03] border border-secondary/[0.08] rounded-xl px-4 py-3.5 text-secondary text-sm placeholder:text-secondary/30 focus:border-primary/40 focus:outline-none transition resize-none" placeholder="Vertel ons meer over je plannen, wensen en eventuele specifieke eisen...">{{ old('bericht') }}</textarea>
                        </div>

                        <div>
                            <button type="submit" class="w-full bg-primary hover:bg-primary/90 rounded-full px-8 py-4 text-white text-sm font-semibold transition flex items-center justify-center gap-2">
                                Offerte aanvragen <i class="fa-solid fa-arrow-right text-xs"></i>
                            </button>
                            <p class="text-secondary/30 text-xs text-center mt-3">Vrijblijvend — wij nemen binnen 24 uur contact op</p>
                        </div>
                    </form>
                    @endif
                </div>

                {{-- Sidebar --}}
                <div class="lg:col-span-2">
                    <div class="sticky top-32 space-y-6">
                        <div class="bg-secondary/[0.03] border border-secondary/[0.06] rounded-2xl p-7">
                            <h3 class="text-secondary text-base font-bold mb-4" style="font-family: 'Inter Tight'">Wat kun je verwachten?</h3>
                            <div class="space-y-4">
                                <div class="flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0 mt-0.5">
                                        <span class="text-primary text-xs font-bold">1</span>
                                    </div>
                                    <div>
                                        <p class="text-secondary text-sm font-semibold mb-0.5">Aanvraag ontvangen</p>
                                        <p class="text-secondary/40 text-xs leading-relaxed">Wij bekijken je aanvraag en inventariseren de mogelijkheden.</p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0 mt-0.5">
                                        <span class="text-primary text-xs font-bold">2</span>
                                    </div>
                                    <div>
                                        <p class="text-secondary text-sm font-semibold mb-0.5">Telefonisch contact</p>
                                        <p class="text-secondary/40 text-xs leading-relaxed">Binnen 24 uur nemen we contact op om je wensen door te spreken.</p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0 mt-0.5">
                                        <span class="text-primary text-xs font-bold">3</span>
                                    </div>
                                    <div>
                                        <p class="text-secondary text-sm font-semibold mb-0.5">Offerte op maat</p>
                                        <p class="text-secondary/40 text-xs leading-relaxed">Je ontvangt een gedetailleerde offerte afgestemd op jouw project.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-secondary rounded-2xl p-7">
                            <h3 class="text-white text-base font-bold mb-3" style="font-family: 'Inter Tight'">Liever direct contact?</h3>
                            <p class="text-white/40 text-sm leading-relaxed mb-5">Neem telefonisch of per e-mail contact met ons op.</p>
                            <div class="space-y-3">
                                <a href="tel:0850609981" class="flex items-center gap-3 text-white/60 text-sm hover:text-primary transition">
                                    <i class="fa-solid fa-phone text-primary text-xs w-4"></i> (085) 060 - 9981
                                </a>
                                <a href="mailto:info@fitnessaannemer.nl" class="flex items-center gap-3 text-white/60 text-sm hover:text-primary transition">
                                    <i class="fa-solid fa-envelope text-primary text-xs w-4"></i> info@fitnessaannemer.nl
                                </a>
                            </div>
                        </div>

                        <div class="bg-secondary/[0.03] border border-secondary/[0.06] rounded-2xl p-7">
                            <div class="flex items-center gap-3 mb-3">
                                <i class="fa-solid fa-shield-check text-primary"></i>
                                <h3 class="text-secondary text-sm font-bold" style="font-family: 'Inter Tight'">100% vrijblijvend</h3>
                            </div>
                            <p class="text-secondary/40 text-xs leading-relaxed">Aan een offerte-aanvraag zijn geen verplichtingen verbonden. Wij geloven in transparantie en eerlijk advies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-secondary py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <p class="text-primary text-3xl lg:text-4xl font-bold mb-2">5+</p>
                    <p class="text-white/50 text-xs uppercase font-semibold tracking-wider">Projecten</p>
                </div>
                <div>
                    <p class="text-primary text-3xl lg:text-4xl font-bold mb-2">2400+</p>
                    <p class="text-white/50 text-xs uppercase font-semibold tracking-wider">M² gerealiseerd</p>
                </div>
                <div>
                    <p class="text-primary text-3xl lg:text-4xl font-bold mb-2">NL & BE</p>
                    <p class="text-white/50 text-xs uppercase font-semibold tracking-wider">Werkgebied</p>
                </div>
                <div>
                    <p class="text-primary text-3xl lg:text-4xl font-bold mb-2">A-Z</p>
                    <p class="text-white/50 text-xs uppercase font-semibold tracking-wider">Ontzorgd</p>
                </div>
            </div>
        </div>
    </section>
@endsection
