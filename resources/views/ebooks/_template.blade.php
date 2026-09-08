@extends('layouts.app')

@section('title', $title . ' | Fitness Aannemer')
@section('meta_description', $metaDesc)

@section('content')
    <section class="bg-secondary pt-32 lg:pt-40 pb-16 lg:pb-32 relative overflow-hidden">
        <div class="hidden lg:block absolute inset-y-0 right-0 w-1/2">
            <img src="{{ asset($heroImage) }}" alt="{{ $title }}" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-secondary via-secondary/80 to-transparent"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="max-w-2xl">
                <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-6">Gratis e-book</span>
                <h1 class="text-white text-4xl lg:text-6xl font-bold leading-[1]">{!! $heroTitle !!}</h1>
                <p class="text-white/60 text-sm lg:text-base leading-relaxed max-w-xl my-8">{{ $heroDesc }}</p>
            </div>
        </div>
    </section>

    <section class="bg-white py-16 lg:py-32 overflow-hidden" data-header-light>
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="flex flex-col lg:flex-row rounded-3xl overflow-hidden border border-secondary/[0.06]">

                <div class="lg:w-[45%] aspect-square">
                    <img src="{{ asset($coverImage) }}" alt="{{ $title }}" class="w-full h-full object-cover">
                </div>

                <div class="lg:w-[55%] bg-white p-8 sm:p-12 lg:p-16 flex flex-col justify-center">
                    <span class="text-primary text-xs font-semibold uppercase tracking-widest mb-4 block">Gratis e-book</span>
                    <h2 class="text-secondary text-2xl sm:text-3xl lg:text-4xl font-bold leading-[1.1] mb-4">{!! $formTitle !!}</h2>
                    <p class="text-secondary/50 text-sm leading-relaxed mb-8">{{ $formDesc }}</p>

                    <div class="flex flex-col gap-3 mb-8">
                        @foreach($usps as $usp)
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 rounded-full bg-primary/10 flex items-center justify-center shrink-0">
                                <i class="fa-solid fa-check text-primary text-[10px]"></i>
                            </div>
                            <span class="text-secondary text-sm font-medium">{{ $usp }}</span>
                        </div>
                        @endforeach
                    </div>

                    <form class="ebook-download-form space-y-3" data-ebook-slug="{{ $slug }}" data-pdf="{{ asset($pdfFile) }}" novalidate>
                        <div class="relative">
                            <i class="fa-solid fa-user absolute left-4 top-1/2 -translate-y-1/2 text-secondary/20 text-xs"></i>
                            <input type="text" name="naam" placeholder="Jouw naam" required class="w-full bg-secondary/[0.03] border border-secondary/10 rounded-xl pl-11 pr-4 py-3.5 text-sm text-secondary placeholder:text-secondary/30 focus:outline-none focus:border-primary/40 transition">
                        </div>
                        <div class="relative">
                            <i class="fa-solid fa-envelope absolute left-4 top-1/2 -translate-y-1/2 text-secondary/20 text-xs"></i>
                            <input type="email" name="email" placeholder="jouw@email.nl" required class="w-full bg-secondary/[0.03] border border-secondary/10 rounded-xl pl-11 pr-4 py-3.5 text-sm text-secondary placeholder:text-secondary/30 focus:outline-none focus:border-primary/40 transition">
                        </div>
                        <div class="relative">
                            <i class="fa-solid fa-phone absolute left-4 top-1/2 -translate-y-1/2 text-secondary/20 text-xs"></i>
                            <input type="tel" name="telefoon" placeholder="06 12345678" required class="w-full bg-secondary/[0.03] border border-secondary/10 rounded-xl pl-11 pr-4 py-3.5 text-sm text-secondary placeholder:text-secondary/30 focus:outline-none focus:border-primary/40 transition">
                        </div>
                        <p class="ebook-error text-red-500 text-xs hidden"></p>
                        <button type="submit" class="ebook-btn w-full bg-secondary hover:bg-secondary/90 text-white text-sm font-semibold rounded-xl px-6 py-3.5 flex items-center justify-center gap-2 transition">
                            <i class="fa-solid fa-download text-xs"></i>
                            Download gratis e-book
                        </button>
                    </form>
                    <div class="ebook-success hidden text-center py-6">
                        <div class="w-14 h-14 rounded-full bg-green-100 flex items-center justify-center mx-auto mb-4">
                            <i class="fa-solid fa-check text-green-600 text-xl"></i>
                        </div>
                        <h3 class="text-secondary text-lg font-bold mb-2">Je download start automatisch</h3>
                        <p class="text-secondary/50 text-sm mb-4">Het e-book wordt nu gedownload. Niet ontvangen?</p>
                        <a href="{{ asset($pdfFile) }}" download class="text-primary text-sm font-semibold hover:underline">Klik hier om opnieuw te downloaden</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    @if(!empty($extraSections))
    <section class="bg-secondary py-16 lg:py-32 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span class="inline-block text-primary text-xs font-semibold uppercase tracking-widest mb-6">Wat je leert</span>
                <h2 class="text-white text-3xl lg:text-5xl font-bold leading-[1.05]">{!! $contentTitle !!}</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($extraSections as $section)
                <div class="bg-white/[0.03] border border-white/[0.06] rounded-2xl p-8">
                    <div class="w-12 h-12 rounded-xl bg-primary/15 flex items-center justify-center mb-5">
                        <i class="fa-solid fa-{{ $section['icon'] }} text-primary"></i>
                    </div>
                    <h3 class="text-white text-lg font-bold mb-3">{{ $section['title'] }}</h3>
                    <p class="text-white/40 text-sm leading-relaxed">{{ $section['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif
@endsection
