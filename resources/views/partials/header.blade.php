<header id="main-header" class="w-full fixed top-0 left-0 z-50 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 py-4 sm:py-5 flex items-center justify-between">
        <a href="{{ url('/') }}" class="relative z-[60]"><img src="{{ asset('fitnessaannemer-logo-fa-blauw.png') }}" alt="FitnessAannemer" class="max-h-8 sm:max-h-10"></a>

        <nav class="hidden lg:flex items-center gap-1">
            {{-- Diensten --}}
            <div class="nav-dropdown relative">
                <a href="{{ url('/diensten') }}" class="nav-link px-4 py-2 rounded-md font-semibold text-xs text-white/80 hover:text-white hover:bg-white/5 transition inline-flex items-center gap-1.5">
                    Diensten
                    <svg class="w-3 h-3 opacity-50 transition-transform duration-200 nav-chevron" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </a>
                <div class="nav-dropdown-menu absolute top-full left-0 pt-2 opacity-0 invisible translate-y-1 transition-all duration-200">
                    <div class="bg-secondary/95 backdrop-blur-xl border border-white/10 rounded-xl p-2 shadow-2xl">
                        <a href="{{ url('/diensten/turnkey-sportschool-bouwen') }}" class="nav-dropdown-item block whitespace-nowrap px-4 py-2.5 text-xs text-white/70 hover:text-white hover:bg-white/5 rounded-lg transition">Turnkey sportschool bouwen</a>
                        <a href="{{ url('/diensten/inrichting-en-planning') }}" class="nav-dropdown-item block whitespace-nowrap px-4 py-2.5 text-xs text-white/70 hover:text-white hover:bg-white/5 rounded-lg transition">Interieurontwerp & 3D-visualisatie</a>
                        <a href="{{ url('/diensten/levering-en-installatie') }}" class="nav-dropdown-item block whitespace-nowrap px-4 py-2.5 text-xs text-white/70 hover:text-white hover:bg-white/5 rounded-lg transition">Levering & installatie</a>
                        <a href="{{ url('/diensten/leasing-en-financiering') }}" class="nav-dropdown-item block whitespace-nowrap px-4 py-2.5 text-xs text-white/70 hover:text-white hover:bg-white/5 rounded-lg transition">Leasing & financiering</a>
                    </div>
                </div>
            </div>

            {{-- Oplossingen --}}
            <div class="nav-dropdown relative">
                <a href="{{ url('/oplossingen') }}" class="nav-link px-4 py-2 rounded-md font-semibold text-xs text-white/80 hover:text-white hover:bg-white/5 transition inline-flex items-center gap-1.5">
                    Oplossingen
                    <svg class="w-3 h-3 opacity-50 transition-transform duration-200 nav-chevron" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </a>
                <div class="nav-dropdown-menu absolute top-full left-0 pt-2 opacity-0 invisible translate-y-1 transition-all duration-200">
                    <div class="bg-secondary/95 backdrop-blur-xl border border-white/10 rounded-xl p-2 shadow-2xl flex gap-2">
                        <div class="flex flex-col">
                            <a href="{{ url('/sportschool-inrichten') }}" class="nav-dropdown-item block whitespace-nowrap px-4 py-2.5 text-xs text-white/70 hover:text-white hover:bg-white/5 rounded-lg transition">Sportscholen</a>
                            <a href="{{ url('/pilates-studio-inrichten') }}" class="nav-dropdown-item block whitespace-nowrap px-4 py-2.5 text-xs text-white/70 hover:text-white hover:bg-white/5 rounded-lg transition">Pilates studio's</a>
                            <a href="{{ url('/pt-studio-inrichten') }}" class="nav-dropdown-item block whitespace-nowrap px-4 py-2.5 text-xs text-white/70 hover:text-white hover:bg-white/5 rounded-lg transition">PT studio's</a>
                            <a href="{{ url('/hotel-gym-inrichten') }}" class="nav-dropdown-item block whitespace-nowrap px-4 py-2.5 text-xs text-white/70 hover:text-white hover:bg-white/5 rounded-lg transition">Hotel gyms</a>
                        </div>
                        <div class="flex flex-col">
                            <a href="{{ url('/homegyms-inrichten') }}" class="nav-dropdown-item block whitespace-nowrap px-4 py-2.5 text-xs text-white/70 hover:text-white hover:bg-white/5 rounded-lg transition">Homegyms</a>
                            <a href="{{ url('/bedrijfsfitness-inrichten') }}" class="nav-dropdown-item block whitespace-nowrap px-4 py-2.5 text-xs text-white/70 hover:text-white hover:bg-white/5 rounded-lg transition">Bedrijfsfitness</a>
                            <a href="{{ url('/hyrox-box-inrichten') }}" class="nav-dropdown-item block whitespace-nowrap px-4 py-2.5 text-xs text-white/70 hover:text-white hover:bg-white/5 rounded-lg transition">Hyrox boxen</a>
                            <a href="{{ url('/wellnessruimte-inrichten') }}" class="nav-dropdown-item block whitespace-nowrap px-4 py-2.5 text-xs text-white/70 hover:text-white hover:bg-white/5 rounded-lg transition">Wellness & recovery</a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Apparatuur & materiaal --}}
            <div class="nav-dropdown relative">
                <a href="{{ url('/apparatuur') }}" class="nav-link px-4 py-2 rounded-md font-semibold text-xs text-white/80 hover:text-white hover:bg-white/5 transition inline-flex items-center gap-1.5">
                    Apparatuur & materiaal
                    <svg class="w-3 h-3 opacity-50 transition-transform duration-200 nav-chevron" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </a>
                <div class="nav-dropdown-menu absolute top-full left-0 pt-2 opacity-0 invisible translate-y-1 transition-all duration-200">
                    <div class="bg-secondary/95 backdrop-blur-xl border border-white/10 rounded-xl p-2 shadow-2xl flex gap-2">
                        <div class="flex flex-col">
                            <a href="{{ url('/apparatuur/krachtapparatuur') }}" class="nav-dropdown-item block whitespace-nowrap px-4 py-2.5 text-xs text-white/70 hover:text-white hover:bg-white/5 rounded-lg transition">Krachtapparatuur</a>
                            <a href="{{ url('/apparatuur/cardio') }}" class="nav-dropdown-item block whitespace-nowrap px-4 py-2.5 text-xs text-white/70 hover:text-white hover:bg-white/5 rounded-lg transition">Cardio apparatuur</a>
                            <a href="{{ url('/apparatuur/apparatuur-functioneel') }}" class="nav-dropdown-item block whitespace-nowrap px-4 py-2.5 text-xs text-white/70 hover:text-white hover:bg-white/5 rounded-lg transition">Functionele apparatuur</a>
                            <a href="{{ url('/apparatuur/gewichten') }}" class="nav-dropdown-item block whitespace-nowrap px-4 py-2.5 text-xs text-white/70 hover:text-white hover:bg-white/5 rounded-lg transition">Losse gewichten</a>
                            <a href="{{ url('/apparatuur/herstel') }}" class="nav-dropdown-item block whitespace-nowrap px-4 py-2.5 text-xs text-white/70 hover:text-white hover:bg-white/5 rounded-lg transition">Herstel & Recovery</a>
                            <a href="{{ url('/apparatuur/sportvloeren') }}" class="nav-dropdown-item block whitespace-nowrap px-4 py-2.5 text-xs text-white/70 hover:text-white hover:bg-white/5 rounded-lg transition">Sportvloeren</a>
                        </div>
                        <div class="flex flex-col">
                            <a href="{{ url('/apparatuur/pvc-laminaat-vloeren') }}" class="nav-dropdown-item block whitespace-nowrap px-4 py-2.5 text-xs text-white/70 hover:text-white hover:bg-white/5 rounded-lg transition">PVC & laminaat vloeren</a>
                            <a href="{{ url('/apparatuur/verlichting') }}" class="nav-dropdown-item block whitespace-nowrap px-4 py-2.5 text-xs text-white/70 hover:text-white hover:bg-white/5 rounded-lg transition">Verlichting</a>
                            <a href="{{ url('/apparatuur/audio') }}" class="nav-dropdown-item block whitespace-nowrap px-4 py-2.5 text-xs text-white/70 hover:text-white hover:bg-white/5 rounded-lg transition">Audio</a>
                            <a href="{{ url('/apparatuur/spiegels') }}" class="nav-dropdown-item block whitespace-nowrap px-4 py-2.5 text-xs text-white/70 hover:text-white hover:bg-white/5 rounded-lg transition">Spiegels</a>
                            <a href="{{ url('/apparatuur/kluisjes') }}" class="nav-dropdown-item block whitespace-nowrap px-4 py-2.5 text-xs text-white/70 hover:text-white hover:bg-white/5 rounded-lg transition">Kluisjes</a>
                            <a href="{{ url('/apparatuur/meubels') }}" class="nav-dropdown-item block whitespace-nowrap px-4 py-2.5 text-xs text-white/70 hover:text-white hover:bg-white/5 rounded-lg transition">Meubels</a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Onze merken --}}
            <a href="{{ url('/onze-merken') }}" class="nav-link px-4 py-2 rounded-md font-semibold text-xs text-white/80 hover:text-white hover:bg-white/5 transition">Onze merken</a>

            {{-- Projecten --}}
            <a href="{{ url('/projecten') }}" class="nav-link px-4 py-2 rounded-md font-semibold text-xs text-white/80 hover:text-white hover:bg-white/5 transition">Projecten</a>

            {{-- Fitnesswijzer --}}
            <div class="nav-dropdown relative">
                <a href="{{ url('/fitnesswijzer') }}" class="nav-link px-4 py-2 rounded-md font-semibold text-xs text-white/80 hover:text-white hover:bg-white/5 transition inline-flex items-center gap-1.5">
                    Fitnesswijzer
                    <svg class="w-3 h-3 opacity-50 transition-transform duration-200 nav-chevron" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </a>
                <div class="nav-dropdown-menu absolute top-full left-0 pt-2 opacity-0 invisible translate-y-1 transition-all duration-200">
                    <div class="bg-secondary/95 backdrop-blur-xl border border-white/10 rounded-xl p-2 shadow-2xl">
                        <a href="{{ url('/fitnesswijzer/gym-verdienmodellen') }}" class="nav-dropdown-item block whitespace-nowrap px-4 py-2.5 text-xs text-white/70 hover:text-white hover:bg-white/5 rounded-lg transition">Gym verdienmodellen</a>
                        <a href="{{ url('/fitnesswijzer/tips-en-inspiratie') }}" class="nav-dropdown-item block whitespace-nowrap px-4 py-2.5 text-xs text-white/70 hover:text-white hover:bg-white/5 rounded-lg transition">Tips & inspiratie</a>
                        <a href="{{ url('/fitnesswijzer/gymreviews') }}" class="nav-dropdown-item block whitespace-nowrap px-4 py-2.5 text-xs text-white/70 hover:text-white hover:bg-white/5 rounded-lg transition">Gymreviews</a>
                    </div>
                </div>
            </div>

            {{-- Over ons --}}
            <a href="{{ url('/over-ons') }}" class="nav-link px-4 py-2 rounded-md font-semibold text-xs text-white/80 hover:text-white hover:bg-white/5 transition">Over ons</a>
        </nav>

        <div class="flex items-center gap-3">
            <a href="{{ url('/vrijblijvend-adviesgesprek') }}" class="hidden lg:inline-flex bg-primary rounded-full px-6 py-3.5 text-white text-xs font-semibold hover:bg-primary/90 transition">
                Vrijblijvend adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i>
            </a>

            {{-- Mobile menu toggle --}}
            <button id="mobile-menu-toggle" class="lg:hidden relative z-[60] text-white p-2" aria-label="Menu">
                <svg id="menu-icon-open" class="w-6 h-6 transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                <svg id="menu-icon-close" class="w-6 h-6 absolute inset-0 m-auto transition-all duration-300 opacity-0 scale-75" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>
    </div>

    {{-- Fullscreen mobile menu --}}
    <div id="mobile-menu" class="lg:hidden fixed inset-0 bg-secondary z-50 flex flex-col opacity-0 invisible transition-all duration-400 pointer-events-none">
        <div class="flex-1 flex flex-col justify-center px-8 py-24 overflow-y-auto">
            <nav class="flex flex-col gap-1 mb-8">
                <a href="{{ url('/diensten') }}" class="mobile-nav-link text-white text-2xl font-bold py-3 border-b border-white/[0.06] transition" style="font-family: 'DM Serif Display'">Diensten</a>
                <a href="{{ url('/oplossingen') }}" class="mobile-nav-link text-white text-2xl font-bold py-3 border-b border-white/[0.06] transition" style="font-family: 'DM Serif Display'">Oplossingen</a>
                <a href="{{ url('/apparatuur') }}" class="mobile-nav-link text-white text-2xl font-bold py-3 border-b border-white/[0.06] transition" style="font-family: 'DM Serif Display'">Apparatuur</a>
                <a href="{{ url('/onze-merken') }}" class="mobile-nav-link text-white text-2xl font-bold py-3 border-b border-white/[0.06] transition" style="font-family: 'DM Serif Display'">Onze merken</a>
                <a href="{{ url('/projecten') }}" class="mobile-nav-link text-white text-2xl font-bold py-3 border-b border-white/[0.06] transition" style="font-family: 'DM Serif Display'">Projecten</a>
                <a href="{{ url('/fitnesswijzer') }}" class="mobile-nav-link text-white text-2xl font-bold py-3 border-b border-white/[0.06] transition" style="font-family: 'DM Serif Display'">Fitnesswijzer</a>
                <a href="{{ url('/over-ons') }}" class="mobile-nav-link text-white text-2xl font-bold py-3 border-b border-white/[0.06] transition" style="font-family: 'DM Serif Display'">Over ons</a>
                <a href="{{ url('/vrijblijvend-adviesgesprek') }}" class="mobile-nav-link text-white text-2xl font-bold py-3 transition" style="font-family: 'DM Serif Display'">Contact</a>
            </nav>

            <a href="{{ url('/vrijblijvend-adviesgesprek') }}" class="mobile-nav-link block text-center bg-primary rounded-full px-6 py-4 text-white text-sm font-semibold hover:bg-primary/90 transition">
                Vrijblijvend adviesgesprek <i class="fa-solid fa-arrow-right text-xs ml-2"></i>
            </a>

            <div class="flex items-center justify-center gap-4 mt-8">
                <a href="https://www.instagram.com/fitnessaannemer.nl/" target="_blank" rel="noopener" class="mobile-nav-link w-10 h-10 rounded-full border border-white/10 flex items-center justify-center text-white/40 hover:text-primary hover:border-primary/30 transition">
                    <i class="fa-brands fa-instagram text-sm"></i>
                </a>
                <a href="https://www.tiktok.com/@fitnessaannemer" target="_blank" rel="noopener" class="mobile-nav-link w-10 h-10 rounded-full border border-white/10 flex items-center justify-center text-white/40 hover:text-primary hover:border-primary/30 transition">
                    <i class="fa-brands fa-tiktok text-sm"></i>
                </a>
                <a href="https://www.youtube.com/@FitnessAannemer" target="_blank" rel="noopener" class="mobile-nav-link w-10 h-10 rounded-full border border-white/10 flex items-center justify-center text-white/40 hover:text-primary hover:border-primary/30 transition">
                    <i class="fa-brands fa-youtube text-sm"></i>
                </a>
                <a href="https://www.facebook.com/profile.php?id=61557754181423" target="_blank" rel="noopener" class="mobile-nav-link w-10 h-10 rounded-full border border-white/10 flex items-center justify-center text-white/40 hover:text-primary hover:border-primary/30 transition">
                    <i class="fa-brands fa-facebook-f text-sm"></i>
                </a>
                <a href="https://pin.it/7jMdHylyE" target="_blank" rel="noopener" class="mobile-nav-link w-10 h-10 rounded-full border border-white/10 flex items-center justify-center text-white/40 hover:text-primary hover:border-primary/30 transition">
                    <i class="fa-brands fa-pinterest-p text-sm"></i>
                </a>
            </div>
        </div>
    </div>
</header>
