<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bedankt voor je download | Fitness Aannemer</title>
        <meta name="robots" content="noindex, nofollow">
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

        <link rel="preload" href="{{ asset('fontawesome/css/all.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}"></noscript>

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WP74DW6');</script>
        <!-- End Google Tag Manager -->

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <script>
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({
            'event': 'generate_lead',
            'conversion_value': 5,
            'conversion_currency': 'EUR',
            'dienst': 'ebook'
        });
        </script>

        {{-- Meta Pixel Lead event --}}
        <script>
        (function fireFbq() {
            if (typeof fbq !== 'undefined') {
                fbq('track', 'Lead', {value: 5.00, currency: 'EUR'});
            } else {
                setTimeout(fireFbq, 200);
            }
        })();
        </script>
    </head>
    <body class="bg-secondary min-h-screen flex flex-col items-center justify-center">
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WP74DW6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <div class="w-full max-w-2xl mx-auto px-6 py-16">
            <div class="text-center">
                <a href="{{ url('/') }}" class="inline-block mb-12">
                    <img src="{{ asset('fitnessaannemer-logo-fa-blauw.png') }}" alt="Fitness Aannemer" class="h-8 mx-auto">
                </a>

                <div class="bg-white/[0.05] border border-primary/30 rounded-3xl p-12">
                    <div class="w-20 h-20 rounded-full bg-primary/15 flex items-center justify-center mx-auto mb-6">
                        <i class="fa-solid fa-book-open text-primary text-3xl"></i>
                    </div>
                    <h1 class="text-white text-2xl font-bold mb-3">Bedankt voor je download!</h1>
                    <p class="text-white/40 text-sm leading-relaxed mb-8 max-w-md mx-auto">Je e-book wordt direct gedownload. Veel leesplezier! Heb je vragen of wil je vrijblijvend sparren over jouw plannen? Neem gerust contact met ons op.</p>
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-3">
                        <a href="{{ url('/') }}" class="inline-flex items-center bg-primary rounded-full px-6 py-3.5 text-white text-xs font-semibold hover:bg-primary/80 transition-colors">
                            Terug naar home <i class="fa-solid fa-arrow-right text-[10px] ml-2"></i>
                        </a>
                        <a href="{{ url('/vrijblijvend-adviesgesprek') }}" class="inline-flex items-center bg-white/10 border border-white/20 rounded-full px-6 py-3.5 text-white text-xs font-semibold hover:bg-white/20 transition-colors">
                            Vrijblijvend adviesgesprek
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
