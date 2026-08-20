<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Even offline | Fitness Aannemer</title>
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
            <div class="w-16 h-16 rounded-full bg-primary/10 flex items-center justify-center mx-auto mb-8">
                <i class="fa-solid fa-wrench text-primary text-2xl"></i>
            </div>
            <h1 class="text-white text-2xl sm:text-3xl font-bold mb-4">Even offline voor onderhoud</h1>
            <p class="text-white/50 text-sm leading-relaxed mb-10">We zijn bezig met een update en zijn zo weer terug. Probeer het over een paar minuten opnieuw.</p>
            <a href="{{ url('/') }}" class="inline-flex bg-primary hover:bg-primary/90 rounded-full px-6 py-3.5 text-white text-xs font-semibold transition">
                Probeer opnieuw <i class="fa-solid fa-arrow-rotate-right text-xs ml-2"></i>
            </a>
        </div>
    </div>
</body>
</html>
