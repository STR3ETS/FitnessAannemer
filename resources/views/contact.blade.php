<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Gratis Adviesgesprek | Fitness Aannemer</title>

        <meta name="description" content="Plan een gratis adviesgesprek met Fitness Aannemer. Vertel ons over jouw project en wij nemen binnen 24 uur contact op.">
        <meta name="robots" content="index, follow">
        <link rel="canonical" href="{{ url('/gratis-adviesgesprek') }}">
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

        {{-- Open Graph --}}
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url('/gratis-adviesgesprek') }}">
        <meta property="og:title" content="Gratis Adviesgesprek | Fitness Aannemer">
        <meta property="og:description" content="Plan een gratis adviesgesprek met Fitness Aannemer. Vertel ons over jouw project en wij nemen binnen 24 uur contact op.">
        <meta property="og:image" content="{{ asset('fitnessaannemer-logo-fa-blauw.png') }}">
        <meta property="og:locale" content="nl_NL">
        <meta property="og:site_name" content="Fitness Aannemer">

        {{-- Twitter Card --}}
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Gratis Adviesgesprek | Fitness Aannemer">
        <meta name="twitter:description" content="Plan een gratis adviesgesprek met Fitness Aannemer. Vertel ons over jouw project en wij nemen binnen 24 uur contact op.">
        <meta name="twitter:image" content="{{ asset('fitnessaannemer-logo-fa-blauw.png') }}">

        <link rel="preload" href="{{ asset('fontawesome/css/all.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}"></noscript>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-secondary min-h-screen flex flex-col items-center justify-center">

        {{-- Centered form container --}}
        <div class="w-full max-w-2xl mx-auto px-6 py-16">
            {{-- Header --}}
            <div class="text-center mb-12">
                <a href="{{ url('/') }}" class="inline-block mb-8">
                    <img src="{{ asset('fitnessaannemer-logo-fa-blauw.png') }}" alt="Fitness Aannemer" class="h-8 mx-auto">
                </a>
                <h1 class="text-white text-3xl lg:text-4xl font-bold leading-[1.05] mb-3">Gratis <span class="text-primary">adviesgesprek</span></h1>
                <p class="text-white/40 text-sm leading-relaxed max-w-lg mx-auto">Vertel ons over jouw project. Wij nemen binnen 24 uur contact op.</p>
            </div>
            {{-- Success state --}}
            @if(session('success'))
            <div class="bg-white/[0.05] border border-primary/30 rounded-3xl p-12 text-center">
                <div class="w-20 h-20 rounded-full bg-primary/15 flex items-center justify-center mx-auto mb-6">
                    <i class="fa-solid fa-check text-primary text-3xl"></i>
                </div>
                <h2 class="text-white text-2xl font-bold mb-3">Aanvraag ontvangen!</h2>
                <p class="text-white/40 text-sm leading-relaxed mb-8 max-w-md mx-auto">Bedankt voor je aanvraag. Wij nemen binnen 24 uur contact met je op om een adviesgesprek in te plannen.</p>
                <a href="{{ url('/') }}" class="inline-flex items-center bg-primary rounded-full px-6 py-3.5 text-white text-xs font-semibold hover:bg-primary/80 transition-colors">
                    Terug naar home <i class="fa-solid fa-arrow-right text-[10px] ml-2"></i>
                </a>
            </div>
            @else
            {{-- Progress bar --}}
            <div class="flex items-center gap-3 mb-10">
                <div class="step-dot h-1 w-8 rounded-full bg-primary transition-colors duration-300" data-step="1"></div>
                <div class="step-line flex-1 h-px bg-white/10"><div class="step-line-fill h-full bg-primary/50 origin-left" style="transform:scaleX(0)"></div></div>
                <div class="step-dot h-1 w-8 rounded-full bg-white/20 transition-colors duration-300" data-step="2"></div>
                <div class="step-line flex-1 h-px bg-white/10"><div class="step-line-fill h-full bg-primary/50 origin-left" style="transform:scaleX(0)"></div></div>
                <div class="step-dot h-1 w-8 rounded-full bg-white/20 transition-colors duration-300" data-step="3"></div>
            </div>

            <form action="{{ route('contact.submit') }}" method="POST" id="advies-form">
                @csrf

                {{-- Hidden UTM fields --}}
                <input type="hidden" name="utm_source" value="">
                <input type="hidden" name="utm_medium" value="">
                <input type="hidden" name="utm_campaign" value="">
                <input type="hidden" name="utm_term" value="">
                <input type="hidden" name="utm_content" value="">

                {{-- Step 1: Type ruimte --}}
                <div class="form-step" data-form-step="1">
                    <h2 class="text-white text-xl font-bold mb-2">Wat voor ruimte wil je inrichten?</h2>
                    <p class="text-white/40 text-sm mb-8">Selecteer het type dat het beste past bij jouw project.</p>

                    <input type="hidden" name="ruimte_type" id="ruimte_type" value="">

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        @php
                        $types = [
                            ['value' => 'Sportschool', 'icon' => 'fa-dumbbell', 'label' => 'Sportschool'],
                            ['value' => 'PT-studio / boutique', 'icon' => 'fa-person-walking', 'label' => 'PT-studio'],
                            ['value' => 'Bedrijfsfitness', 'icon' => 'fa-building', 'label' => 'Bedrijfsfitness'],
                            ['value' => 'Homegym', 'icon' => 'fa-house-chimney', 'label' => 'Homegym'],
                            ['value' => 'Hotel / hospitality', 'icon' => 'fa-hotel', 'label' => 'Hotel'],
                            ['value' => 'Anders', 'icon' => 'fa-ellipsis', 'label' => 'Anders'],
                        ];
                        @endphp
                        @foreach($types as $type)
                        <button type="button" class="ruimte-option group relative bg-white/[0.04] border-2 border-white/[0.08] rounded-2xl p-6 text-center hover:border-primary/50 hover:bg-white/[0.07] transition-all duration-300 cursor-pointer" data-value="{{ $type['value'] }}">
                            <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center mx-auto mb-3 group-hover:bg-primary/20 transition-colors">
                                <i class="fa-solid {{ $type['icon'] }} text-primary text-lg"></i>
                            </div>
                            <span class="text-white text-sm font-semibold">{{ $type['label'] }}</span>
                        </button>
                        @endforeach
                    </div>

                    @error('ruimte_type')
                    <p class="text-red-400 text-xs mt-4">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Step 2: Details --}}
                <div class="form-step hidden" data-form-step="2">
                    <h2 class="text-white text-xl font-bold mb-2">Vertel ons meer over je project</h2>
                    <p class="text-white/40 text-sm mb-8">Geen zorgen, alles is nog vrijblijvend.</p>

                    <div class="space-y-5">
                        <div>
                            <label class="text-white text-xs font-semibold mb-2 block">Geschatte oppervlakte</label>
                            <input type="hidden" name="oppervlakte" required>
                            <div class="custom-select relative" data-name="oppervlakte">
                                <button type="button" class="custom-select-trigger w-full bg-white/[0.05] border border-white/[0.1] rounded-xl px-4 py-3.5 text-sm text-left flex items-center justify-between transition-colors hover:border-white/20">
                                    <span class="custom-select-label text-white/40">Selecteer oppervlakte</span>
                                    <i class="fa-solid fa-chevron-down text-white/30 text-[10px] transition-transform duration-200"></i>
                                </button>
                                <div class="custom-select-dropdown absolute left-0 right-0 top-full mt-2 bg-[#0d1117] border border-white/[0.1] rounded-xl overflow-hidden z-50 opacity-0 invisible translate-y-1 transition-all duration-200">
                                    <div class="custom-select-option px-4 py-3 text-white/70 text-sm cursor-pointer hover:bg-white/[0.06] hover:text-white transition-colors" data-value="< 100 m2">Kleiner dan 100 m&sup2;</div>
                                    <div class="custom-select-option px-4 py-3 text-white/70 text-sm cursor-pointer hover:bg-white/[0.06] hover:text-white transition-colors" data-value="100 - 250 m2">100 - 250 m&sup2;</div>
                                    <div class="custom-select-option px-4 py-3 text-white/70 text-sm cursor-pointer hover:bg-white/[0.06] hover:text-white transition-colors" data-value="250 - 500 m2">250 - 500 m&sup2;</div>
                                    <div class="custom-select-option px-4 py-3 text-white/70 text-sm cursor-pointer hover:bg-white/[0.06] hover:text-white transition-colors" data-value="500 - 1000 m2">500 - 1.000 m&sup2;</div>
                                    <div class="custom-select-option px-4 py-3 text-white/70 text-sm cursor-pointer hover:bg-white/[0.06] hover:text-white transition-colors" data-value="> 1000 m2">Groter dan 1.000 m&sup2;</div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label class="text-white text-xs font-semibold mb-2 block">Budget indicatie</label>
                            <input type="hidden" name="budget" id="budget-value" value="">
                            <div class="bg-white/[0.05] border border-white/[0.1] rounded-xl px-5 py-4">
                                <div class="flex items-center justify-between mb-4">
                                    <span class="text-white text-sm font-semibold" id="budget-display">Selecteer budget</span>
                                </div>
                                <div class="relative budget-slider-wrap">
                                    <input type="range" min="0" max="5" step="1" value="0" id="budget-slider" class="budget-slider w-full">
                                </div>
                            </div>
                        </div>

                        <div>
                            <label class="text-white text-xs font-semibold mb-2 block">Gewenste startdatum</label>
                            <input type="hidden" name="startdatum" required>
                            <div class="custom-select relative" data-name="startdatum">
                                <button type="button" class="custom-select-trigger w-full bg-white/[0.05] border border-white/[0.1] rounded-xl px-4 py-3.5 text-sm text-left flex items-center justify-between transition-colors hover:border-white/20">
                                    <span class="custom-select-label text-white/40">Selecteer periode</span>
                                    <i class="fa-solid fa-chevron-down text-white/30 text-[10px] transition-transform duration-200"></i>
                                </button>
                                <div class="custom-select-dropdown absolute left-0 right-0 top-full mt-2 bg-[#0d1117] border border-white/[0.1] rounded-xl overflow-hidden z-50 opacity-0 invisible translate-y-1 transition-all duration-200">
                                    <div class="custom-select-option px-4 py-3 text-white/70 text-sm cursor-pointer hover:bg-white/[0.06] hover:text-white transition-colors" data-value="Zo snel mogelijk">Zo snel mogelijk</div>
                                    <div class="custom-select-option px-4 py-3 text-white/70 text-sm cursor-pointer hover:bg-white/[0.06] hover:text-white transition-colors" data-value="Binnen 3 maanden">Binnen 3 maanden</div>
                                    <div class="custom-select-option px-4 py-3 text-white/70 text-sm cursor-pointer hover:bg-white/[0.06] hover:text-white transition-colors" data-value="3 - 6 maanden">3 - 6 maanden</div>
                                    <div class="custom-select-option px-4 py-3 text-white/70 text-sm cursor-pointer hover:bg-white/[0.06] hover:text-white transition-colors" data-value="6 - 12 maanden">6 - 12 maanden</div>
                                    <div class="custom-select-option px-4 py-3 text-white/70 text-sm cursor-pointer hover:bg-white/[0.06] hover:text-white transition-colors" data-value="Geen haast">Geen haast</div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label class="text-white text-xs font-semibold mb-2 block">Bericht <span class="text-white/30 font-normal">(optioneel)</span></label>
                            <textarea name="bericht" rows="4" placeholder="Vertel ons meer over jouw wensen, situatie of vragen..." class="w-full bg-white/[0.05] border border-white/[0.1] rounded-xl px-4 py-3.5 text-white text-sm focus:outline-none focus:border-primary/50 transition-colors placeholder:text-white/20 resize-none"></textarea>
                        </div>
                    </div>

                    <div class="flex items-center justify-between mt-8">
                        <button type="button" class="btn-prev text-white/40 text-sm font-medium hover:text-white transition-colors">
                            <i class="fa-solid fa-arrow-left text-xs mr-2"></i> Vorige
                        </button>
                        <button type="button" class="btn-next bg-primary rounded-full px-8 py-3.5 text-white text-xs font-semibold hover:bg-primary/80 transition-colors">
                            Volgende <i class="fa-solid fa-arrow-right text-[10px] ml-2"></i>
                        </button>
                    </div>
                </div>

                {{-- Step 3: Gegevens --}}
                <div class="form-step hidden" data-form-step="3">
                    <h2 class="text-white text-xl font-bold mb-2">Jouw contactgegevens</h2>
                    <p class="text-white/40 text-sm mb-8">Wij nemen binnen 24 uur contact met je op.</p>

                    <div class="space-y-5">
                        <div>
                            <label class="text-white text-xs font-semibold mb-2 block">Volledige naam</label>
                            <input type="text" name="naam" required placeholder="Jan de Vries" class="w-full bg-white/[0.05] border border-white/[0.1] rounded-xl px-4 py-3.5 text-white text-sm focus:outline-none focus:border-primary/50 transition-colors placeholder:text-white/20">
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label class="text-white text-xs font-semibold mb-2 block">E-mailadres</label>
                                <input type="email" name="email" required placeholder="jan@bedrijf.nl" class="w-full bg-white/[0.05] border border-white/[0.1] rounded-xl px-4 py-3.5 text-white text-sm focus:outline-none focus:border-primary/50 transition-colors placeholder:text-white/20">
                            </div>
                            <div>
                                <label class="text-white text-xs font-semibold mb-2 block">Telefoonnummer</label>
                                <input type="tel" name="telefoon" required placeholder="06 12345678" class="w-full bg-white/[0.05] border border-white/[0.1] rounded-xl px-4 py-3.5 text-white text-sm focus:outline-none focus:border-primary/50 transition-colors placeholder:text-white/20">
                            </div>
                        </div>

                        <div>
                            <label class="text-white text-xs font-semibold mb-2 block">Bedrijfsnaam <span class="text-white/30 font-normal">(optioneel)</span></label>
                            <input type="text" name="bedrijfsnaam" placeholder="Bedrijfsnaam B.V." class="w-full bg-white/[0.05] border border-white/[0.1] rounded-xl px-4 py-3.5 text-white text-sm focus:outline-none focus:border-primary/50 transition-colors placeholder:text-white/20">
                        </div>
                    </div>

                    <div class="flex items-center justify-between mt-8">
                        <button type="button" class="btn-prev text-white/40 text-sm font-medium hover:text-white transition-colors">
                            <i class="fa-solid fa-arrow-left text-xs mr-2"></i> Vorige
                        </button>
                        <button type="submit" class="bg-primary rounded-full px-8 py-3.5 text-white text-xs font-semibold hover:bg-primary/80 transition-colors">
                            Verstuur aanvraag <i class="fa-solid fa-paper-plane text-[10px] ml-2"></i>
                        </button>
                    </div>
                </div>
            </form>
            @endif
        </div>

        <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('advies-form');
            if (!form) return;

            const steps = form.querySelectorAll('.form-step');
            const dots = document.querySelectorAll('.step-dot');
            const lines = document.querySelectorAll('.step-line-fill');
            let current = 1;

            function goToStep(step) {
                // Hide all steps
                steps.forEach(s => {
                    s.classList.add('hidden');
                    s.style.opacity = '0';
                });

                // Show target step
                const target = form.querySelector(`[data-form-step="${step}"]`);
                target.classList.remove('hidden');

                // Animate in
                requestAnimationFrame(() => {
                    target.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
                    target.style.transform = 'translateY(20px)';
                    target.style.opacity = '0';
                    requestAnimationFrame(() => {
                        target.style.opacity = '1';
                        target.style.transform = 'translateY(0)';
                    });
                });

                // Update progress dashes
                dots.forEach(dot => {
                    const s = parseInt(dot.dataset.step);
                    if (s <= step) {
                        dot.classList.remove('bg-white/20');
                        dot.classList.add('bg-primary');
                    } else {
                        dot.classList.add('bg-white/20');
                        dot.classList.remove('bg-primary');
                    }
                });

                // Update progress lines
                lines.forEach((line, i) => {
                    if (i < step - 1) {
                        line.style.transition = 'transform 0.5s ease';
                        line.style.transform = 'scaleX(1)';
                    } else {
                        line.style.transition = 'transform 0.5s ease';
                        line.style.transform = 'scaleX(0)';
                    }
                });

                current = step;
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }

            // Step 1: Ruimte type selection
            const ruimteOptions = form.querySelectorAll('.ruimte-option');
            const ruimteInput = form.querySelector('#ruimte_type');

            ruimteOptions.forEach(option => {
                option.addEventListener('click', () => {
                    // Deselect all
                    ruimteOptions.forEach(o => {
                        o.classList.remove('border-primary', 'bg-white/[0.07]');
                        o.classList.add('border-white/[0.08]');
                    });
                    // Select clicked
                    option.classList.add('border-primary', 'bg-white/[0.07]');
                    option.classList.remove('border-white/[0.08]');
                    ruimteInput.value = option.dataset.value;

                    // Auto-advance after short delay
                    setTimeout(() => goToStep(2), 400);
                });
            });

            // Custom selects
            document.querySelectorAll('.custom-select').forEach(select => {
                const trigger = select.querySelector('.custom-select-trigger');
                const dropdown = select.querySelector('.custom-select-dropdown');
                const label = select.querySelector('.custom-select-label');
                const chevron = trigger.querySelector('i');
                const hiddenInput = select.parentElement.querySelector('input[type="hidden"]');

                trigger.addEventListener('click', (e) => {
                    e.stopPropagation();
                    // Close all others
                    document.querySelectorAll('.custom-select').forEach(other => {
                        if (other !== select) {
                            other.querySelector('.custom-select-dropdown').classList.add('opacity-0', 'invisible', 'translate-y-1');
                            other.querySelector('.custom-select-trigger i').style.transform = '';
                        }
                    });
                    const isOpen = !dropdown.classList.contains('invisible');
                    if (isOpen) {
                        dropdown.classList.add('opacity-0', 'invisible', 'translate-y-1');
                        chevron.style.transform = '';
                    } else {
                        dropdown.classList.remove('opacity-0', 'invisible', 'translate-y-1');
                        chevron.style.transform = 'rotate(180deg)';
                    }
                });

                select.querySelectorAll('.custom-select-option').forEach(option => {
                    option.addEventListener('click', () => {
                        label.textContent = option.textContent;
                        label.classList.remove('text-white/40');
                        label.classList.add('text-white');
                        hiddenInput.value = option.dataset.value;
                        trigger.classList.add('border-primary/50');
                        dropdown.classList.add('opacity-0', 'invisible', 'translate-y-1');
                        chevron.style.transform = '';
                        // Mark active
                        select.querySelectorAll('.custom-select-option').forEach(o => o.classList.remove('bg-primary/10', 'text-primary'));
                        option.classList.add('bg-primary/10', 'text-primary');
                    });
                });
            });

            // Close selects on outside click
            document.addEventListener('click', () => {
                document.querySelectorAll('.custom-select-dropdown').forEach(d => d.classList.add('opacity-0', 'invisible', 'translate-y-1'));
                document.querySelectorAll('.custom-select-trigger i').forEach(i => i.style.transform = '');
            });

            // Next/prev buttons
            form.querySelectorAll('.btn-next').forEach(btn => {
                btn.addEventListener('click', () => {
                    if (current < 3) goToStep(current + 1);
                });
            });

            form.querySelectorAll('.btn-prev').forEach(btn => {
                btn.addEventListener('click', () => {
                    if (current > 1) goToStep(current - 1);
                });
            });

            // Budget slider
            const budgetSlider = document.getElementById('budget-slider');
            const budgetDisplay = document.getElementById('budget-display');
            const budgetValue = document.getElementById('budget-value');
            const budgetSteps = [
                { label: '\u20AC10.000 - \u20AC25.000', value: '10.000 - 25.000' },
                { label: '\u20AC25.000 - \u20AC50.000', value: '25.000 - 50.000' },
                { label: '\u20AC50.000 - \u20AC100.000', value: '50.000 - 100.000' },
                { label: '\u20AC100.000 - \u20AC250.000', value: '100.000 - 250.000' },
                { label: '\u20AC250.000 - \u20AC500.000', value: '250.000 - 500.000' },
                { label: '\u20AC500.000+', value: '> 500.000' },
            ];

            if (budgetSlider) {
                budgetSlider.addEventListener('input', () => {
                    const i = parseInt(budgetSlider.value);
                    budgetDisplay.textContent = budgetSteps[i].label;
                    budgetValue.value = budgetSteps[i].value;
                    // Update track fill
                    const pct = (i / 5) * 100;
                    budgetSlider.style.setProperty('--fill', pct + '%');
                });
                // Set initial
                budgetSlider.dispatchEvent(new Event('input'));
            }

            // Initialize step 1
            goToStep(1);
        });
        </script>
    </body>
</html>
