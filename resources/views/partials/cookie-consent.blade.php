<div id="cookie-consent" class="fixed bottom-6 left-6 right-6 md:left-auto md:right-6 md:max-w-sm bg-secondary border border-white/10 rounded-2xl p-6 z-50 shadow-2xl transition-transform duration-500 translate-y-[calc(100%+3rem)]">
    <p class="text-white text-sm font-semibold mb-1">Cookies</p>
    <p class="text-white/60 text-xs leading-relaxed mb-4">Wij gebruiken cookies om je ervaring te verbeteren en onze website te analyseren. Lees meer in ons <a href="{{ url('/cookies') }}" class="text-primary hover:underline">cookiebeleid</a>.</p>
    <div class="flex items-center gap-3">
        <button id="cookie-accept" class="bg-primary rounded-full px-5 py-2.5 text-white text-xs font-semibold hover:bg-primary/80 transition-colors">Accepteren</button>
        <button id="cookie-decline" class="bg-white/10 border border-white/20 rounded-full px-5 py-2.5 text-white text-xs font-semibold hover:bg-white/20 transition-colors">Weigeren</button>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const banner = document.getElementById('cookie-consent');
        if (!banner) return;

        if (localStorage.getItem('cookie-consent')) {
            banner.remove();
            return;
        }

        setTimeout(() => {
            banner.classList.remove('translate-y-[calc(100%+3rem)]');
            banner.classList.add('translate-y-0');
        }, 1500);

        document.getElementById('cookie-accept').addEventListener('click', () => {
            localStorage.setItem('cookie-consent', 'accepted');
            closeBanner();
        });

        document.getElementById('cookie-decline').addEventListener('click', () => {
            localStorage.setItem('cookie-consent', 'declined');
            closeBanner();
        });

        function closeBanner() {
            banner.classList.remove('translate-y-0');
            banner.classList.add('translate-y-[calc(100%+3rem)]');
            setTimeout(() => banner.remove(), 500);
        }
    });
</script>
