<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@seoTitle('Fitness Aannemer')</title>

        <meta name="description" content="@seoDescription('Fitness Aannemer ontwerpt, levert en installeert complete fitnessoplossingen op maat.')">
        <meta name="robots" content="{{ $seo?->robots ?? 'index, follow' }}">
        <link rel="canonical" href="{{ $seo?->canonical_url ?? url()->current() }}">
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

        {{-- Open Graph --}}
        <meta property="og:type" content="{{ $seo?->og_type ?? 'website' }}">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:title" content="@seoOgTitle('Fitness Aannemer')">
        <meta property="og:description" content="@seoOgDescription('Fitness Aannemer ontwerpt, levert en installeert complete fitnessoplossingen op maat.')">
        <meta property="og:image" content="@seoOgImage(asset('fitnessaannemer-logo-fa-blauw.png'))">
        <meta property="og:locale" content="nl_NL">
        <meta property="og:site_name" content="Fitness Aannemer">

        {{-- Twitter Card --}}
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="@seoOgTitle('Fitness Aannemer')">
        <meta name="twitter:description" content="@seoOgDescription('Fitness Aannemer ontwerpt, levert en installeert complete fitnessoplossingen op maat.')">
        <meta name="twitter:image" content="@seoOgImage(asset('fitnessaannemer-logo-fa-blauw.png'))">

        @seoSchema

        <link rel="preload" href="{{ asset('fontawesome/css/all.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}"></noscript>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-white">
        @include('partials.header')

        @yield('content')

        @include('partials.pre-footer')
        @include('partials.footer')
        @include('partials.cookie-consent')
    </body>
</html>
