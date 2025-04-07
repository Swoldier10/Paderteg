@extends('layouts.main')

@section('title', __('Our Machinery'))

@section('content')
    <!-- Hero Section -->
    <div class="relative h-[500px] flex items-center">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-900/90 to-blue-800/80 mix-blend-multiply"></div>
            <img src="https://images.unsplash.com/photo-1590254527463-5d4cc4b2b656?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
                 alt="Advanced Manufacturing Equipment"
                 class="h-full w-full object-cover"
                 onerror="this.src='https://images.unsplash.com/photo-1586864387789-628af9feed72?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80'">
        </div>

        <!-- Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 tracking-tight">
                    Our Advanced Machinery & Equipment
                </h1>
                <p class="text-xl text-blue-100 mb-10">
                    Explore the state-of-the-art machines we use to ensure high-quality production and precision across all operations.
                </p>
                <div class="flex items-center text-white animate-bounce">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                    <span class="font-medium">Scroll Down to Learn More</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Machines Categories Section -->
    <section class="py-16 bg-white" x-data="{ activeCategory: 'wiring', showVideoModal: false, currentVideo: '' }">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="mb-12 text-center">
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto mb-8">
                        {{ __('At PaderTeG, we invest in advanced machinery and equipment to ensure the highest quality in our manufacturing processes. Our state-of-the-art facilities enable us to deliver precision-engineered cable solutions that meet the most demanding requirements.') }}
                    </p>
                </div>

                <div class="flex flex-wrap justify-center gap-4 mb-16">
                    <button
                        @click="activeCategory = 'wiring'"
                        :class="activeCategory === 'wiring' ? 'bg-blue-600 text-white' : 'bg-white text-gray-700 hover:bg-gray-100'"
                        class="px-6 py-3 rounded-lg font-medium text-lg shadow-sm transition-all">
                        Wiring & Assembly Machines
                    </button>
                    <button
                        @click="activeCategory = 'molding'"
                        :class="activeCategory === 'molding' ? 'bg-blue-600 text-white' : 'bg-white text-gray-700 hover:bg-gray-100'"
                        class="px-6 py-3 rounded-lg font-medium text-lg shadow-sm transition-all">
                        Molding & Printing Machines
                    </button>
                    <button
                        @click="activeCategory = 'testing'"
                        :class="activeCategory === 'testing' ? 'bg-blue-600 text-white' : 'bg-white text-gray-700 hover:bg-gray-100'"
                        class="px-6 py-3 rounded-lg font-medium text-lg shadow-sm transition-all">
                        Testing & Quality Control
                    </button>
                </div>

                <!-- Dynamic Content for Machine Categories -->
                <!-- Wiring & Assembly Machines -->
                <div x-show="activeCategory === 'wiring'" class="space-y-16">
                    <div class="text-center mb-10">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Wiring & Assembly Machines</h2>
                        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                            Machines dedicated to cutting, crimping, welding, and assembling wires and cables with precision.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Komax Machines -->
                        <div class="bg-white rounded-xl overflow-hidden shadow-md border border-gray-200 transition-all duration-300 hover:shadow-lg">
                            <div class="h-64 overflow-hidden">
                                <img
                                    src="{{ asset('images/komax_machines.avif') }}"
                                    alt="Komax Machine"
                                    class="w-full h-full object-cover"
                                    onerror="this.src='https://images.unsplash.com/photo-1590254527463-5d4cc4b2b656?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80'"
                                >
                            </div>
                            <div class="p-6">
                                <h3 class="text-2xl font-bold text-gray-900 mb-2">Komax Machines</h3>
                                <p class="text-gray-600 mb-4">
                                    Automated wiring and cable processing machines known for high precision cutting, stripping, and crimping. Ideal for mass production with efficiency and accuracy.
                                </p>
                                <div class="mt-6 space-y-3">
                                    <div class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-600 mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>High precision wire cutting and stripping</span>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-600 mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Automated crimping process</span>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-600 mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>High throughput for mass production</span>
                                    </div>
                                </div>
                                <button @click="showVideoModal = true; currentVideo = 'https://www.youtube.com/embed/example1'" class="mt-6 w-full px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-200 flex items-center justify-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    View Video
                                </button>
                            </div>
                        </div>

                        <!-- Semiautomatic IDC Pressing Machines -->
                        <div class="bg-white rounded-xl overflow-hidden shadow-md border border-gray-200 transition-all duration-300 hover:shadow-lg">
                            <div class="h-64 overflow-hidden">
                                <img
                                    src="{{ asset('images/idc.avif') }}"
                                    alt="IDC Pressing Machine"
                                    class="w-full h-full object-cover"
                                >
                            </div>
                            <div class="p-6">
                                <h3 class="text-2xl font-bold text-gray-900 mb-2">Semiautomatic IDC Pressing Machines</h3>
                                <p class="text-gray-600 mb-4">
                                    Machines designed for inserting insulation-displacement connectors (IDC) to wires with precision, enhancing assembly speed and consistency.
                                </p>
                                <div class="mt-6 space-y-3">
                                    <div class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-600 mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Precise insulation displacement</span>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-600 mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Consistent connection quality</span>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-600 mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Semi-automated for operator control</span>
                                    </div>
                                </div>
                                <button @click="showVideoModal = true; currentVideo = 'https://www.youtube.com/embed/example2'" class="mt-6 w-full px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-200 flex items-center justify-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    View Video
                                </button>
                            </div>
                        </div>

                        <!-- Semiautomatic Crimping Machines -->
                        <div class="bg-white rounded-xl overflow-hidden shadow-md border border-gray-200 transition-all duration-300 hover:shadow-lg">
                            <div class="h-64 overflow-hidden">
                                <img
                                    src="{{ asset('images/crimping.png') }}"
                                    alt="Crimping Machine"
                                    class="w-full h-full object-cover"
                                >
                            </div>
                            <div class="p-6">
                                <h3 class="text-2xl font-bold text-gray-900 mb-2">Semiautomatic Crimping Machines</h3>
                                <p class="text-gray-600 mb-4">
                                    Machines for applying crimps to wire ends, ensuring secure electrical connections with consistency and precision.
                                </p>
                                <div class="mt-6 space-y-3">
                                    <div class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-600 mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Precise terminal crimping</span>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-600 mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Adjustable crimping pressure</span>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-600 mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Multiple terminal type compatibility</span>
                                    </div>
                                </div>
                                <button @click="showVideoModal = true; currentVideo = 'https://www.youtube.com/embed/example3'" class="mt-6 w-full px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-200 flex items-center justify-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    View Video
                                </button>
                            </div>
                        </div>

                        <!-- Cable Processing Equipment -->
                        <div class="bg-white rounded-xl overflow-hidden shadow-md border border-gray-200 transition-all duration-300 hover:shadow-lg">
                            <div class="h-64 overflow-hidden">
                                <img
                                    src="{{ asset('images/processing.jpg') }}"
                                    alt="Cable Processing Equipment"
                                    class="w-full h-full object-cover"
                                >
                            </div>
                            <div class="p-6">
                                <h3 class="text-2xl font-bold text-gray-900 mb-2">Cable Processing Equipment</h3>
                                <p class="text-gray-600 mb-4">
                                    Various machines specialized in cutting, stripping, twisting, and terminating cables for a range of applications.
                                </p>
                                <div class="mt-6 space-y-3">
                                    <div class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-600 mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Multi-core cable processing</span>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-600 mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Cable harness assembly</span>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-600 mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Specialized connectorization</span>
                                    </div>
                                </div>
                                <button @click="showVideoModal = true; currentVideo = 'https://www.youtube.com/embed/example4'" class="mt-6 w-full px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-200 flex items-center justify-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    View Video
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Molding & Printing Machines -->
                <div x-show="activeCategory === 'molding'" class="space-y-16">
                    <div class="text-center mb-10">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Molding & Printing Machines</h2>
                        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                            Equipment focused on producing components through molding and labeling with precision and durability.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Molding Machines -->
                        <div class="bg-white rounded-xl overflow-hidden shadow-md border border-gray-200 transition-all duration-300 hover:shadow-lg">
                            <div class="h-64 overflow-hidden">
                                <img
                                    src="{{ asset('images/molding.jpg') }}"
                                    alt="Molding Machine"
                                    class="w-full h-full object-cover"
                                >
                            </div>
                            <div class="p-6">
                                <h3 class="text-2xl font-bold text-gray-900 mb-2">Injection Molding Machines</h3>
                                <p class="text-gray-600 mb-4">
                                    Machines used for shaping materials into various parts through injection molding. Essential for producing custom parts with accuracy.
                                </p>
                                <div class="mt-6 space-y-3">
                                    <div class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-600 mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Precision component molding</span>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-600 mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Multiple material capabilities</span>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-600 mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Custom mold design and fabrication</span>
                                    </div>
                                </div>
                                <button @click="showVideoModal = true; currentVideo = 'https://www.youtube.com/embed/example5'" class="mt-6 w-full px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-200 flex items-center justify-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    View Video
                                </button>
                            </div>
                        </div>

                        <!-- Laser Printing Machines -->
                        <div class="bg-white rounded-xl overflow-hidden shadow-md border border-gray-200 transition-all duration-300 hover:shadow-lg">
                            <div class="h-64 overflow-hidden">
                                <img
                                    src="{{ asset('images/laser.webp') }}"
                                    alt="Laser Marking Machine"
                                    class="w-full h-full object-cover"
                                >
                            </div>
                            <div class="p-6">
                                <h3 class="text-2xl font-bold text-gray-900 mb-2">Laser Marking Machines</h3>
                                <p class="text-gray-600 mb-4">
                                    High-precision machines that etch or print labels, barcodes, or other markings on parts and components with permanent accuracy.
                                </p>
                                <div class="mt-6 space-y-3">
                                    <div class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-600 mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>High-resolution permanent marking</span>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-600 mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Multiple surface compatibility</span>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-600 mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Barcode and serial number traceability</span>
                                    </div>
                                </div>
                                <button @click="showVideoModal = true; currentVideo = 'https://www.youtube.com/embed/example6'" class="mt-6 w-full px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-200 flex items-center justify-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    View Video
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testing & Quality Control Machines -->
                <div x-show="activeCategory === 'testing'" class="space-y-16">
                    <div class="text-center mb-10">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Testing & Quality Control Machines</h2>
                        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                            Machines ensuring product quality and reliability before reaching the end user.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Ultrasonic Welding Machines -->
                        <div class="bg-white rounded-xl overflow-hidden shadow-md border border-gray-200 transition-all duration-300 hover:shadow-lg">
                            <div class="h-64 overflow-hidden">
                                <img
                                    src="{{ asset('images/welding.jpg') }}"
                                    alt="Ultrasonic Welding Machine"
                                    class="w-full h-full object-cover"
                                >
                            </div>
                            <div class="p-6">
                                <h3 class="text-2xl font-bold text-gray-900 mb-2">Ultrasonic Welding Machines</h3>
                                <p class="text-gray-600 mb-4">
                                    Non-contact welding technology used to join materials through high-frequency sound waves, providing clean and precise welds without adhesives.
                                </p>
                                <div class="mt-6 space-y-3">
                                    <div class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-600 mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Clean, adhesive-free joining</span>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-600 mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>High-frequency precision control</span>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-600 mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Multiple material compatibility</span>
                                    </div>
                                </div>
                                <button @click="showVideoModal = true; currentVideo = 'https://www.youtube.com/embed/example7'" class="mt-6 w-full px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-200 flex items-center justify-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    View Video
                                </button>
                            </div>
                        </div>

                        <!-- Taping Machines -->
                        <div class="bg-white rounded-xl overflow-hidden shadow-md border border-gray-200 transition-all duration-300 hover:shadow-lg">
                            <div class="h-64 overflow-hidden">
                                <img
                                    src="{{ asset('images/taping.webp') }}"
                                    alt="Taping Machine"
                                    class="w-full h-full object-cover"
                                >
                            </div>
                            <div class="p-6">
                                <h3 class="text-2xl font-bold text-gray-900 mb-2">Taping Machines</h3>
                                <p class="text-gray-600 mb-4">
                                    Automated or semi-automated machines that apply protective or insulating tape to cables, ensuring durability and safety.
                                </p>
                                <div class="mt-6 space-y-3">
                                    <div class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-600 mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Precise tape application</span>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-600 mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Various tape width compatibility</span>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-600 mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>High-speed processing capability</span>
                                    </div>
                                </div>
                                <button @click="showVideoModal = true; currentVideo = 'https://www.youtube.com/embed/example8'" class="mt-6 w-full px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-200 flex items-center justify-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    View Video
                                </button>
                            </div>
                        </div>

                        <!-- EOL Testing Machines -->
                        <div class="bg-white rounded-xl overflow-hidden shadow-md border border-gray-200 transition-all duration-300 hover:shadow-lg">
                            <div class="h-64 overflow-hidden">
                                <img
                                    src="{{ asset('images/eol.jpg') }}"
                                    alt="EOL Testing Machine"
                                    class="w-full h-full object-cover"
                                >
                            </div>
                            <div class="p-6">
                                <h3 class="text-2xl font-bold text-gray-900 mb-2">End Of Line Testing Machines</h3>
                                <p class="text-gray-600 mb-4">
                                    Machines designed for final testing of assembled components, ensuring they meet all required standards before delivery.
                                </p>
                                <div class="mt-6 space-y-3">
                                    <div class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-600 mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Comprehensive electrical testing</span>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-600 mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Automated quality assurance</span>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-600 mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Real-time test result reporting</span>
                                    </div>
                                </div>
                                <button @click="showVideoModal = true; currentVideo = 'https://www.youtube.com/embed/example9'" class="mt-6 w-full px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-200 flex items-center justify-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    View Video
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Video Modal -->
                <div x-show="showVideoModal" 
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0"
                     x-transition:enter-end="opacity-100"
                     x-transition:leave="transition ease-in duration-200"
                     x-transition:leave-start="opacity-100"
                     x-transition:leave-end="opacity-0"
                     class="fixed inset-0 z-50 overflow-y-auto" 
                     aria-labelledby="modal-title" 
                     role="dialog" 
                     aria-modal="true">
                    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                        <div x-show="showVideoModal" 
                             x-transition:enter="transition ease-out duration-300"
                             x-transition:enter-start="opacity-0"
                             x-transition:enter-end="opacity-100"
                             x-transition:leave="transition ease-in duration-200"
                             x-transition:leave-start="opacity-100"
                             x-transition:leave-end="opacity-0"
                             class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" 
                             aria-hidden="true"
                             @click="showVideoModal = false">
                        </div>

                        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                        <div x-show="showVideoModal"
                             x-transition:enter="transition ease-out duration-300"
                             x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                             x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                             x-transition:leave="transition ease-in duration-200"
                             x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                             x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                             class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-4xl sm:w-full">
                            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                <div class="sm:flex sm:items-start">
                                    <div class="mt-3 text-center sm:mt-0 sm:text-left w-full">
                                        <div class="aspect-w-16 aspect-h-9">
                                            <iframe class="w-full h-full" :src="currentVideo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                <button type="button" @click="showVideoModal = false" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="bg-blue-700 py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Ready to Elevate Your Production Capabilities?</h2>
                <p class="text-xl text-blue-100 mb-8">Contact our manufacturing team to discuss how our advanced machinery can meet your specific production needs.</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="{{ route('contact') }}" class="inline-flex items-center px-6 py-3 border-2 border-white text-white hover:bg-white hover:text-blue-700 text-lg font-medium rounded-md transition-all duration-300">
                        <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        Contact Us
                    </a>
                    <a href="tel:+123456789" class="inline-flex items-center px-6 py-3 bg-white text-blue-700 hover:bg-blue-50 text-lg font-medium rounded-md transition-all duration-300">
                        <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        Call Us
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
