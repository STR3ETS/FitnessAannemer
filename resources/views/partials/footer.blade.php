<footer class="w-full bg-secondary border-t border-white/5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 py-10 lg:py-16 grid grid-cols-1 md:grid-cols-12 gap-8 lg:gap-10">
        {{-- Brand --}}
        <div class="md:col-span-3">
            <a href="{{ url('/') }}">
                <img src="{{ asset('fitnessaannemer-logo-fa-blauw.png') }}" alt="Fitness Aannemer" class="max-h-10">
            </a>
            <p class="text-white/50 text-xs mt-4 leading-relaxed">Van eerste schets tot sleuteloverdracht. Wij ontwerpen, leveren en installeren complete fitnessruimtes op maat.</p>
            {{-- Social icons --}}
            <div class="flex items-center gap-3 mt-6">
                <a href="https://instagram.com/fitnessaannemer.nl" target="_blank" rel="noopener" class="w-9 h-9 rounded-full border border-white/10 flex items-center justify-center text-white/40 hover:text-white hover:border-primary/50 hover:bg-primary/10 transition">
                    <i class="fa-brands fa-instagram text-sm"></i>
                </a>
                <a href="https://tiktok.com/@fitnessaannemer" target="_blank" rel="noopener" class="w-9 h-9 rounded-full border border-white/10 flex items-center justify-center text-white/40 hover:text-white hover:border-primary/50 hover:bg-primary/10 transition">
                    <i class="fa-brands fa-tiktok text-sm"></i>
                </a>
                <a href="https://youtube.com/@fitnessaannemer" target="_blank" rel="noopener" class="w-9 h-9 rounded-full border border-white/10 flex items-center justify-center text-white/40 hover:text-white hover:border-primary/50 hover:bg-primary/10 transition">
                    <i class="fa-brands fa-youtube text-sm"></i>
                </a>
                <a href="https://linkedin.com/company/fitnessaannemer" target="_blank" rel="noopener" class="w-9 h-9 rounded-full border border-white/10 flex items-center justify-center text-white/40 hover:text-white hover:border-primary/50 hover:bg-primary/10 transition">
                    <i class="fa-brands fa-linkedin-in text-sm"></i>
                </a>
                <a href="https://snapchat.com/add/fitnessaannemer" target="_blank" rel="noopener" class="w-9 h-9 rounded-full border border-white/10 flex items-center justify-center text-white/40 hover:text-white hover:border-primary/50 hover:bg-primary/10 transition">
                    <i class="fa-brands fa-snapchat text-sm"></i>
                </a>
            </div>
        </div>

        {{-- Diensten --}}
        <div class="md:col-span-2">
            <h6 class="text-white font-semibold text-sm mb-4">Diensten</h6>
            <div class="flex flex-col gap-2.5">
                <a href="{{ url('/diensten/inrichting-en-planning') }}" class="text-white/50 text-xs hover:text-white transition">Ontwerp & 3D-visualisatie</a>
                <a href="{{ url('/diensten/inrichting-en-planning') }}" class="text-white/50 text-xs hover:text-white transition">Inrichting & planning</a>
                <a href="{{ url('/diensten/levering-en-installatie') }}" class="text-white/50 text-xs hover:text-white transition">Levering & installatie</a>
                <a href="{{ url('/diensten/onderhoud-en-reparaties') }}" class="text-white/50 text-xs hover:text-white transition">Onderhoud & reparaties</a>
                <a href="{{ url('/diensten/leasing-en-financiering') }}" class="text-white/50 text-xs hover:text-white transition">Leasing & financiering</a>
            </div>
        </div>

        {{-- Oplossingen --}}
        <div class="md:col-span-2">
            <h6 class="text-white font-semibold text-sm mb-4">Oplossingen</h6>
            <div class="flex flex-col gap-2.5">
                <a href="{{ url('/sportschool-inrichten') }}" class="text-white/50 text-xs hover:text-white transition">Sportscholen</a>
                <a href="{{ url('/homegyms-inrichten') }}" class="text-white/50 text-xs hover:text-white transition">Homegyms</a>
                <a href="{{ url('/pilates-studio-inrichten') }}" class="text-white/50 text-xs hover:text-white transition">Pilates studio's</a>
                <a href="{{ url('/crossfit-box-inrichten') }}" class="text-white/50 text-xs hover:text-white transition">Crossfit boxen</a>
                <a href="{{ url('/pt-studio-inrichten') }}" class="text-white/50 text-xs hover:text-white transition">PT studio's</a>
                <a href="{{ url('/bedrijfsfitness-inrichten') }}" class="text-white/50 text-xs hover:text-white transition">Bedrijfsfitness</a>
                <a href="{{ url('/hotel-gym-inrichten') }}" class="text-white/50 text-xs hover:text-white transition">Hotel gyms</a>
                <a href="{{ url('/hyrox-box-inrichten') }}" class="text-white/50 text-xs hover:text-white transition">Hyrox boxen</a>
            </div>
        </div>

        {{-- Navigatie --}}
        <div class="md:col-span-2">
            <h6 class="text-white font-semibold text-sm mb-4">Navigatie</h6>
            <div class="flex flex-col gap-2.5">
                <a href="{{ url('/') }}" class="text-white/50 text-xs hover:text-white transition">Home</a>
                <a href="{{ url('/over-ons') }}" class="text-white/50 text-xs hover:text-white transition">Over ons</a>
                <a href="{{ url('/apparatuur') }}" class="text-white/50 text-xs hover:text-white transition">Apparatuur</a>
                <a href="{{ url('/onze-merken') }}" class="text-white/50 text-xs hover:text-white transition">Onze merken</a>
                <a href="{{ url('/projecten') }}" class="text-white/50 text-xs hover:text-white transition">Projecten</a>
                <a href="{{ url('/fitnesswijzer') }}" class="text-white/50 text-xs hover:text-white transition">Fitnesswijzer</a>
                <a href="{{ url('/offerte-aanvragen') }}" class="text-white/50 text-xs hover:text-white transition">Offerte aanvragen</a>
                <a href="{{ url('/contact') }}" class="text-white/50 text-xs hover:text-white transition">Contact</a>
            </div>
        </div>

        {{-- Contact --}}
        <div class="md:col-span-3">
            <h6 class="text-white font-semibold text-sm mb-4">Contact</h6>
            <div class="flex flex-col gap-3">
                <div class="flex items-start gap-3">
                    <i class="fa-solid fa-location-dot text-primary text-xs mt-0.5"></i>
                    <p class="text-white/50 text-xs leading-relaxed">Soerense Zand Zuid 13<br>6961 RA Eerbeek</p>
                </div>
                <div class="flex items-center gap-3">
                    <i class="fa-solid fa-phone text-primary text-xs"></i>
                    <a href="tel:0850609981" class="text-white/50 text-xs hover:text-white transition">(085) 060 - 9981</a>
                </div>
                <div class="flex items-center gap-3">
                    <i class="fa-solid fa-envelope text-primary text-xs"></i>
                    <a href="mailto:info@fitnessaannemer.nl" class="text-white/50 text-xs hover:text-white transition">info@fitnessaannemer.nl</a>
                </div>
                <div class="flex items-center gap-3">
                    <i class="fa-solid fa-clock text-primary text-xs"></i>
                    <p class="text-white/50 text-xs">Ma - Za: 9:00 - 18:00</p>
                </div>
            </div>

            {{-- Newsletter --}}
            <div class="mt-6">
                <p class="text-white text-xs font-semibold mb-3">Blijf op de hoogte</p>
                <form class="flex gap-1">
                    <input type="email" placeholder="E-mailadres" class="flex-1 bg-white/5 border border-white/10 rounded-lg px-4 py-2.5 text-xs text-white placeholder-white/30 focus:outline-none focus:border-primary/50 transition">
                    <button type="submit" class="bg-primary hover:bg-primary/90 text-white text-xs font-semibold w-[37.59px] h-[37.59px] rounded-lg transition">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>

    {{-- Bottom bar --}}
    <div class="border-t border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 py-4 flex flex-col md:flex-row items-center justify-between gap-3">
            <p class="text-white/30 text-[11px]">&copy; {{ date('Y') }} Fitness Aannemer. Alle rechten voorbehouden.</p>
            <div class="flex items-center gap-5">
                <a href="{{ url('/privacybeleid') }}" class="text-white/30 hover:text-white text-[11px] transition">Privacybeleid</a>
                <a href="{{ url('/algemene-voorwaarden') }}" class="text-white/30 hover:text-white text-[11px] transition">Algemene voorwaarden</a>
                <a href="{{ url('/cookies') }}" class="text-white/30 hover:text-white text-[11px] transition">Cookies</a>
            </div>
            <a href="https://eazyonline.nl" target="_blank" rel="noopener" class="flex items-center gap-2 text-white/30 hover:text-white/50 transition">
                <span class="text-[11px]">Website door</span>
                <span class="text-[#fff] text-[11px] font-bold">eazyonline</span>
            </a>
        </div>
    </div>
</footer>
