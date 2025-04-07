@extends('layouts.main')

@section('title', 'Our Products')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-64 flex items-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-900/90 to-blue-800/80 mix-blend-multiply"></div>
            <div class="absolute inset-0 bg-[url('/images/cable-manufacturing.jpg')] bg-cover bg-center"></div>
        </div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 text-white">
            <div class="hero-content">
                <h1 class="text-4xl md:text-5xl font-bold mb-6 tracking-tight">
                    Our Products
                </h1>
                <p class="text-xl text-blue-100 mb-6 max-w-3xl">
                    Discover our comprehensive range of high-quality cable solutions.
                </p>
            </div>
        </div>
    </section>

    <!-- Products Grid -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Products Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Product Card 1 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 group">
                    <div class="aspect-w-16 aspect-h-9 overflow-hidden">
                        <img src="{{ asset('images/products/product-1.jpg') }}" alt="Automotive Wiring Harness" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4 group-hover:text-blue-600 transition-colors duration-200">Automotive Wiring Harness</h3>
                        <p class="text-gray-600 leading-relaxed">Custom wiring harnesses designed for automotive applications, featuring high durability and reliable connectivity.</p>
                    </div>
                </div>

                <!-- Product Card 2 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 group">
                    <div class="aspect-w-16 aspect-h-9 overflow-hidden">
                        <img src="{{ asset('images/products/product-2.jpg') }}" alt="Industrial Cable Assembly" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4 group-hover:text-blue-600 transition-colors duration-200">Industrial Cable Assembly</h3>
                        <p class="text-gray-600 leading-relaxed">Heavy-duty cable assemblies engineered for industrial machinery and manufacturing equipment.</p>
                    </div>
                </div>

                <!-- Product Card 3 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 group">
                    <div class="aspect-w-16 aspect-h-9 overflow-hidden">
                        <img src="{{ asset('images/products/product-3.jpg') }}" alt="Medical Device Cable" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4 group-hover:text-blue-600 transition-colors duration-200">Medical Device Cable</h3>
                        <p class="text-gray-600 leading-relaxed">Medical-grade cable solutions designed for healthcare equipment and devices.</p>
                    </div>
                </div>

                <!-- Product Card 4 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 group">
                    <div class="aspect-w-16 aspect-h-9 overflow-hidden">
                        <img src="{{ asset('images/products/product-4.jpg') }}" alt="Sensor Cable" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4 group-hover:text-blue-600 transition-colors duration-200">Sensor Cable</h3>
                        <p class="text-gray-600 leading-relaxed">High-precision sensor cables for industrial automation and control systems.</p>
                    </div>
                </div>

                <!-- Product Card 5 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 group">
                    <div class="aspect-w-16 aspect-h-9 overflow-hidden">
                        <img src="{{ asset('images/products/product-5.jpg') }}" alt="Power Cable" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4 group-hover:text-blue-600 transition-colors duration-200">Power Cable</h3>
                        <p class="text-gray-600 leading-relaxed">Heavy-duty power cables for industrial and commercial applications.</p>
                    </div>
                </div>

                <!-- Product Card 6 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 group">
                    <div class="aspect-w-16 aspect-h-9 overflow-hidden">
                        <img src="{{ asset('images/products/product-6.jpg') }}" alt="Data Cable" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4 group-hover:text-blue-600 transition-colors duration-200">Data Cable</h3>
                        <p class="text-gray-600 leading-relaxed">High-speed data transmission cables for networking and communications.</p>
                    </div>
                </div>

                <!-- Product Card 7 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 group">
                    <div class="aspect-w-16 aspect-h-9 overflow-hidden">
                        <img src="{{ asset('images/products/product-7.jpg') }}" alt="Control Cable" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4 group-hover:text-blue-600 transition-colors duration-200">Control Cable</h3>
                        <p class="text-gray-600 leading-relaxed">Precision control cables for automation and industrial control systems.</p>
                    </div>
                </div>

                <!-- Product Card 8 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 group">
                    <div class="aspect-w-16 aspect-h-9 overflow-hidden">
                        <img src="{{ asset('images/products/product-8.jpg') }}" alt="Fiber Optic Cable" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4 group-hover:text-blue-600 transition-colors duration-200">Fiber Optic Cable</h3>
                        <p class="text-gray-600 leading-relaxed">High-speed fiber optic cables for data transmission and telecommunications.</p>
                    </div>
                </div>

                <!-- Product Card 9 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 group">
                    <div class="aspect-w-16 aspect-h-9 overflow-hidden">
                        <img src="{{ asset('images/products/product-9.jpg') }}" alt="Custom Cable Assembly" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4 group-hover:text-blue-600 transition-colors duration-200">Custom Cable Assembly</h3>
                        <p class="text-gray-600 leading-relaxed">Customized cable assemblies tailored to your specific requirements.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-blue-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="md:flex md:items-center md:justify-between">
                <div class="md:w-2/3 mb-8 md:mb-0">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Need a Custom Solution?</h2>
                    <p class="text-xl text-blue-100">
                        Contact our team to discuss your specific requirements and get a personalized quote.
                    </p>
                </div>
                <div class="md:w-1/3 text-center md:text-right">
                    <a href="{{ route('contact') }}?subject=custom-quote" class="inline-block px-8 py-4 bg-white text-blue-900 rounded-full font-medium transition-all hover:bg-blue-50 hover:shadow-lg">
                        Request Custom Quote
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
