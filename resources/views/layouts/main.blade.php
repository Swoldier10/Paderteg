<!DOCTYPE html>
<html lang="ro" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- SEO Meta Tags -->
    <title>@yield('seo_title', 'Paderteg Kabeltechnik SRL - Asamblare Cabluri | Copșa Mică, Sibiu, România')</title>
    <meta name="description" content="@yield('seo_description', 'Paderteg Kabeltechnik SRL - Specializați în tehnologia cablurilor, asamblare cabluri și soluții industriale în Copșa Mică, Sibiu, România. Calitate superioară și servicii profesionale.')">
    <meta name="keywords" content="@yield('seo_keywords', 'paderteg, kabeltechnik, asamblare cabluri, tehnologia cablurilor, soluții industriale, copșa mică, sibiu, românia, cable assembly, industrial cabling, automotive cables')">
    <meta name="author" content="Paderteg Kabeltechnik SRL">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph Meta Tags -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('og_title', 'Paderteg Kabeltechnik SRL - Asamblare Cabluri | Copșa Mică, Sibiu')">
    <meta property="og:description" content="@yield('og_description', 'Paderteg Kabeltechnik SRL - Specializați în tehnologia cablurilor, asamblare cabluri și soluții industriale în România.')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="Paderteg Kabeltechnik SRL">
    <meta property="og:image" content="@yield('og_image', asset('images/logo.jpeg'))">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="ro_RO">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', 'Paderteg Kabeltechnik SRL - Asamblare Cabluri')">
    <meta name="twitter:description" content="@yield('twitter_description', 'Specializați în tehnologia cablurilor și soluții industriale în România.')">
    <meta name="twitter:image" content="@yield('twitter_image', asset('images/logo.jpeg'))">

    <!-- Structured Data - LocalBusiness Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "Paderteg Kabeltechnik SRL",
        "description": "Specializați în tehnologia cablurilor, asamblare cabluri și soluții industriale de înaltă calitate în România.",
        "url": "{{ config('app.url') }}",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Copșa Mică",
            "addressLocality": "Copșa Mică",
            "addressRegion": "Sibiu",
            "postalCode": "",
            "addressCountry": "RO"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "46.1017",
            "longitude": "24.2214"
        },
        "openingHours": "Mo-Fr 08:00-17:00",
        "priceRange": "$$",
        "image": "{{ asset('images/logo.jpeg') }}",
        "serviceArea": {
            "@type": "Place",
            "name": "România"
        },
        "makesOffer": [
            {
                "@type": "Offer",
                "name": "Asamblare Cabluri",
                "description": "Servicii profesionale de asamblare cabluri pentru industria automotive și industrială"
            },
            {
                "@type": "Offer", 
                "name": "Tehnologia Cablurilor",
                "description": "Soluții avansate în tehnologia cablurilor pentru aplicații industriale"
            }
        ]
    }
    </script>

    <!-- Organization Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Paderteg Kabeltechnik SRL",
        "url": "{{ config('app.url') }}",
        "logo": "{{ asset('images/logo.jpeg') }}",
        "description": "Companie românească specializată în tehnologia cablurilor, asamblare cabluri și soluții industriale de înaltă calitate.",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Copșa Mică",
            "addressRegion": "Sibiu", 
            "addressCountry": "RO"
        },
        "sameAs": [
            "@yield('social_facebook', '')",
            "@yield('social_linkedin', '')"
        ]
    }
    </script>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('favicon.ico') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Retro Grid CSS -->
    <style>
        .retro-grid {
            --grid-size: 30px;
            --grid-strength: 1px;
            --grid-color: rgba(255, 255, 255, 0.2);
            --dot-size: 1px;
            --dot-color: rgba(255, 255, 255, 0.3);

            position: absolute;
            inset: 0;
            z-index: 1;
            background-color: transparent;
            background-image:
                linear-gradient(var(--grid-color) var(--grid-strength), transparent var(--grid-strength)),
                linear-gradient(90deg, var(--grid-color) var(--grid-strength), transparent var(--grid-strength));
            background-size: var(--grid-size) var(--grid-size);

            mask-image: radial-gradient(ellipse at center,
                rgba(0, 0, 0, 1) 0%,
                rgba(0, 0, 0, 1) 70%,
                rgba(0, 0, 0, 0) 100%);
        }

        .retro-grid::after {
            content: "";
            position: absolute;
            inset: 0;
            background-image: radial-gradient(
                var(--dot-color) var(--dot-size),
                transparent var(--dot-size)
            );
            background-size: var(--grid-size) var(--grid-size);
            background-position: calc(var(--grid-size) / 2) calc(var(--grid-size) / 2);
            mask-image: radial-gradient(ellipse at center,
                rgba(0, 0, 0, 1) 0%,
                rgba(0, 0, 0, 1) 70%,
                rgba(0, 0, 0, 0) 100%);
        }

        .retro-sun {
            position: absolute;
            bottom: -30%;
            left: 50%;
            transform: translateX(-50%);
            width: 200%;
            height: 200%;
            background: linear-gradient(to top, #1E40AF, #3B82F6);
            border-radius: 50%;
            opacity: 0.5;
            z-index: 0;
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div class="min-h-full flex flex-col">
        @include('partials.navbar')

        <!-- Page Content -->
        <main class="flex-grow">
            <div class="w-full">
                @if (session('success'))
                    <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif

                @if (session('error'))
                    <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <span class="block sm:inline">{{ session('error') }}</span>
                    </div>
                @endif

                @yield('content')
            </div>
        </main>

        @include('partials.footer')
    </div>

    @stack('scripts')
</body>
</html>
