<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Geen toegang | Fitness Aannemer</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="preload" href="{{ asset('fontawesome/css/all.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}"></noscript>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-secondary min-h-screen flex flex-col">
    <div class="flex-1 flex items-center justify-center px-4">
        <div class="text-center max-w-lg">
            <a href="{{ url('/') }}" class="inline-block mb-12">
                <img src="{{ asset('fitnessaannemer-logo-fa-blauw.png') }}" alt="Fitness Aannemer" class="h-10 mx-auto">
            </a>
            <p class="text-primary text-8xl sm:text-9xl font-bold mb-4" style="font-family: 'Inter'">403</p>
            <h1 class="text-white text-2xl sm:text-3xl font-bold mb-4">Geen toegang</h1>
            <p class="text-white/50 text-sm leading-relaxed mb-10">Je hebt geen toegang tot deze pagina. Ga terug naar de homepagina of neem contact met ons op.</p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-3">
                <a href="{{ url('/') }}" class="bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">
                    Terug naar home <i class="fa-solid fa-arrow-right text-xs ml-2"></i>
                </a>
                <a href="{{ url('/vrijblijvend-adviesgesprek') }}" class="bg-white/10 border border-white/20 rounded-full px-6 py-3.5 text-white text-xs font-semibold hover:bg-white/20 transition">
                    Neem contact op
                </a>
            </div>
        </div>
    </div>
</body>
</html>
