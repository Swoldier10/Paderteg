<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Paderteg</title>
    <meta name="description" content="Custom Cable Assemblies Built for Reliability & Performance">
    <meta name="keywords" content="cable, assembly, automotive, medical, quality, innovation, integrity, sustainability, industry, energy">
    <meta name="author" content="Paderteg">

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
