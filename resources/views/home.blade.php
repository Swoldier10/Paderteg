@extends('layouts.main')

@section('title', 'Home')

@section('content')
<!-- Hero Section -->
<section class="relative h-[600px] flex items-center overflow-hidden" id="hero-section">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-900/90 to-blue-800/80 mix-blend-multiply w-full">
            <div style="position:relative; width:100%; height:100%;"><iframe allow="fullscreen;autoplay" allowfullscreen height="100%" src="https://streamable.com/e/vxxoc6?autoplay=1" width="100%" style="border:none; width:100%; height:100%; position:absolute; left:0px; top:0px; overflow:hidden;"></iframe></div>
        </div>
        <div class="absolute inset-0 bg-blue-800 bg-cover bg-center bg-opacity-35"></div>
    </div>
    <div class="relative z-10 max-w-full mx-auto px-4 sm:px-6 lg:px-8 py-24 text-white">
        <div class="hero-content opacity-0 transform translate-y-8 transition-all duration-1000 ease-out">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 tracking-tight">
                Custom Cable Assemblies Built for Reliability & Performance
            </h1>
            <p class="text-xl md:text-2xl text-blue-100 mb-10 max-w-3xl">
                Providing high-quality, precision-engineered cable solutions for automotive, aerospace, medical, and industrial applications.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="{{ route('contact') }}" class="px-8 py-4 bg-white text-blue-900 rounded-full font-medium transition-all hover:bg-blue-50 hover:shadow-lg">
                    Request a Quote
                </a>
                <a href="{{ route('products.index') }}" class="px-8 py-4 bg-transparent border-2 border-white text-white rounded-full font-medium transition-all hover:bg-white/10">
                    View Products
                </a>
            </div>
        </div>
    </div>
    <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </div>
</section>

<!-- About Us Section -->
<section class="py-24 bg-white scroll-mt-16" id="about-section">
    <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-16 items-center">
            <div class="fade-in-section">
                <span class="inline-block px-3 py-1 text-sm font-semibold bg-blue-100 text-blue-800 rounded-full mb-6">About Paderteg</span>
                <h2 class="text-4xl font-bold text-gray-900 mb-6">Crafting Quality Connections Since 2004</h2>
                <p class="text-lg text-gray-600 mb-6">
                    At Paderteg, we've built our reputation on delivering exceptional quality cable assemblies and wiring harnesses. With over 19 years of experience, we've become a trusted partner for companies requiring precision-engineered connection solutions.
                </p>
                <p class="text-lg text-gray-600 mb-8">
                    Our ISO 9001:2015 and IATF16949:2016 certified manufacturing facilities are equipped with advanced technologies and staffed by experienced professionals committed to excellence which ensure that every product leaving our lines reflects superior quality, traceability, and consistency.
                </p>
                <a href="{{ route('about') }}" class="inline-flex items-center text-blue-600 font-medium hover:text-blue-800 transition-colors">
                    Learn more about our story
                    <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
            <div class="relative fade-in-section">
                <img src="{{ asset('images/crafting_quality_connections_since_2004.png') }}" alt="Cable Manufacturing" class="w-full h-auto rounded-2xl shadow-xl">
                <div class="absolute -bottom-6 -right-6 bg-blue-600 text-white p-6 rounded-xl shadow-lg">
                    <div class="text-4xl font-bold">19+</div>
                    <div class="text-blue-100">Years Experience</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Products & Services -->
<section class="py-24 bg-gray-50 scroll-mt-16" id="products-section">
    <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in-section">
            <span class="inline-block px-3 py-1 text-sm font-semibold bg-blue-100 text-blue-800 rounded-full mb-6">Our Products</span>
            <h2 class="text-4xl font-bold text-gray-900 mb-6">High-Performance Cable Solutions</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                We design and manufacture a wide range of custom cable assemblies tailored to meet the specific requirements of our clients across various industries.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($featuredProducts as $product)
            <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group fade-in-section">
                <div class="aspect-w-16 aspect-h-9 overflow-hidden">
                    <img
                        src="{{ $product->image ? asset('storage/' . $product->image) : 'https://images.unsplash.com/photo-1581093577421-f561a654a353?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80' }}"
                        alt="{{ $product->name }}"
                        class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500"
                        onerror="this.src='https://images.unsplash.com/photo-1581093577421-f561a654a353?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80'"
                    >
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $product->name }}</h3>
                    @if($product->description)
                    <p class="text-gray-600 mb-4 line-clamp-2">{{ $product->description }}</p>
                    @endif
                    <a href="{{ route('products.show', ['category' => $product->category->slug, 'product' => $product->id]) }}"
                       class="text-blue-600 hover:text-blue-800 font-medium flex items-center transition-colors">
                        Learn More
                        <svg class="ml-2 w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 max-w-5xl mx-auto">
            <a href="{{ route('products.automotive') }}" class="inline-flex items-center justify-center px-6 py-3 bg-blue-600 text-white rounded-lg font-medium hover:bg-blue-700 transition-colors">
                Automotive
                <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </a>
            <a href="{{ route('products.industrial') }}" class="inline-flex items-center justify-center px-6 py-3 bg-blue-600 text-white rounded-lg font-medium hover:bg-blue-700 transition-colors">
                Industrial
                <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </a>
            <a href="{{ route('products.healthcare') }}" class="inline-flex items-center justify-center px-6 py-3 bg-blue-600 text-white rounded-lg font-medium hover:bg-blue-700 transition-colors">
                Health Care
                <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </a>
            <a href="{{ route('products.energy-environmental') }}" class="inline-flex items-center justify-center px-6 py-3 bg-blue-600 text-white rounded-lg font-medium hover:bg-blue-700 transition-colors">
                Energy & Environmental
                <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-24 bg-white scroll-mt-16" id="why-choose-us">
    <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in-section">
            <span class="inline-block px-3 py-1 text-sm font-semibold bg-blue-100 text-blue-800 rounded-full mb-6">Why Choose Us</span>
            <h2 class="text-4xl font-bold text-gray-900 mb-6">Our Commitment to Excellence</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                We stand apart through our unwavering commitment to quality, innovation, and customer satisfaction.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <div class="p-8 border border-gray-100 rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 fade-in-section">
                <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Premium Quality</h3>
                <p class="text-gray-600">
                    We use only the highest-grade materials and rigorous testing procedures to ensure our products meet the most demanding specifications and performance standards.
                </p>
            </div>

            <div class="p-8 border border-gray-100 rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 fade-in-section">
                <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Custom Solutions</h3>
                <p class="text-gray-600">
                    We specialize in creating bespoke cable assemblies tailored to your specific requirements, ensuring optimal performance for your unique application.
                </p>
            </div>

            <div class="p-8 border border-gray-100 rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 fade-in-section">
                <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Fast Turnaround</h3>
                <p class="text-gray-600">
                    Our efficient production processes and dedicated team enable us to deliver your orders promptly without compromising on quality.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Industries Served -->
<section class="py-24 bg-gray-50 scroll-mt-16" id="industries-section">
    <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in-section">
            <span class="inline-block px-3 py-1 text-sm font-semibold bg-blue-100 text-blue-800 rounded-full mb-6">Industries</span>
            <h2 class="text-4xl font-bold text-gray-900 mb-6">Sectors We Serve</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Our versatile cable solutions cater to the diverse needs of multiple industries, providing reliable connectivity for critical applications.
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="p-8 bg-white rounded-2xl text-center hover:shadow-lg transition-all duration-300 fade-in-section">
                <div class="w-20 h-20 bg-blue-50 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Automotive</h3>
            </div>

            <div class="p-8 bg-white rounded-2xl text-center hover:shadow-lg transition-all duration-300 fade-in-section">
                <div class="w-20 h-20 bg-blue-50 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Medical</h3>
            </div>

            <div class="p-8 bg-white rounded-2xl text-center hover:shadow-lg transition-all duration-300 fade-in-section">
                <div class="w-20 h-20 bg-blue-50 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Industrial</h3>
            </div>

            <div class="p-8 bg-white rounded-2xl text-center hover:shadow-lg transition-all duration-300 fade-in-section">
                <div class="w-20 h-20 bg-blue-50 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Aerospace</h3>
            </div>
        </div>
    </div>
</section>

<!-- Certifications -->
<section class="py-24 bg-white scroll-mt-16" id="certifications-section">
    <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in-section">
            <span class="inline-block px-3 py-1 text-sm font-semibold bg-blue-100 text-blue-800 rounded-full mb-6">Certifications</span>
            <h2 class="text-4xl font-bold text-gray-900 mb-6">Quality Assurance & Compliance</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Our operations comply with the highest industry standards, ensuring consistent quality, safety, and reliability across our facilities.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-12 mb-12 fade-in-section">
            <!-- Axente Sever Location -->
            <div class="bg-gray-50 rounded-xl p-6">
                <h3 class="text-xl font-semibold text-center mb-6 pb-2 border-b border-gray-200">Axente Sever Location</h3>
                <div class="flex flex-wrap justify-center gap-8">
                    <div class="text-center p-4">
                        <img src="{{ asset('images/axente_sever_9001.png') }}" alt="ISO 9001" class="h-16 mx-auto mb-3 grayscale hover:grayscale-0 transition-all duration-300">
                        <p class="text-gray-700 font-medium text-sm">ISO 9001:2015</p>
                    </div>

                    <div class="text-center p-4">
                        <img src="{{ asset('images/axente_sever_IATF_16949.png') }}" alt="IATF 16949" class="h-16 mx-auto mb-3 grayscale hover:grayscale-0 transition-all duration-300">
                        <p class="text-gray-700 font-medium text-sm">IATF 16949:2016</p>
                    </div>

                    <div class="text-center p-4">
                        <img src="{{ asset('images/copsa_mica_iso_45001.png') }}" alt="ISO 45001" class="h-16 mx-auto mb-3 grayscale hover:grayscale-0 transition-all duration-300">
                        <p class="text-gray-700 font-medium text-sm">ISO 45001:2018</p>
                    </div>

                    <div class="text-center p-4">
                        <img src="{{ asset('images/copsa_mica_iso_14001.png') }}" alt="ISO 14001" class="h-16 mx-auto mb-3 grayscale hover:grayscale-0 transition-all duration-300">
                        <p class="text-gray-700 font-medium text-sm">ISO 14001:2015</p>
                    </div>
                </div>
            </div>

            <!-- Copsa Mica Location -->
            <div class="bg-gray-50 rounded-xl p-6">
                <h3 class="text-xl font-semibold text-center mb-6 pb-2 border-b border-gray-200">Copșa Mică Location</h3>
                <div class="flex flex-wrap justify-center gap-6">
                    <div class="text-center p-3">
                        <img src="{{ asset('images/copsa_mica_iso_9001.png') }}" alt="ISO 9001" class="h-14 mx-auto mb-2 grayscale hover:grayscale-0 transition-all duration-300">
                        <p class="text-gray-700 font-medium text-xs">ISO 9001:2015</p>
                    </div>

                    <div class="text-center p-3">
                        <img src="{{ asset('images/copsa_mica_iatf_16949.png') }}" alt="IATF 16949" class="h-14 mx-auto mb-2 grayscale hover:grayscale-0 transition-all duration-300">
                        <p class="text-gray-700 font-medium text-xs">IATF 16949:2016</p>
                    </div>

                    <div class="text-center p-3">
                        <img src="{{ asset('images/copsa_mica_iso_45001.png') }}" alt="ISO 45001" class="h-14 mx-auto mb-2 grayscale hover:grayscale-0 transition-all duration-300">
                        <p class="text-gray-700 font-medium text-xs">ISO 45001:2018</p>
                    </div>

                    <div class="text-center p-3">
                        <img src="{{ asset('images/copsa_mica_iso_14001.png') }}" alt="ISO 14001" class="h-14 mx-auto mb-2 grayscale hover:grayscale-0 transition-all duration-300">
                        <p class="text-gray-700 font-medium text-xs">ISO 14001:2015</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-12 fade-in-section">
            <a href="{{ route('certificates') }}" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700">
                View Detailed Certifications
                <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-blue-900 text-white scroll-mt-16" id="contact-section">
    <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-8">
        <div class="md:flex md:items-center md:justify-between fade-in-section">
            <div class="md:w-2/3 mb-8 md:mb-0">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to discuss your cable requirements?</h2>
                <p class="text-xl text-blue-100">
                    Our team of experts is ready to help you find the perfect solution for your specific needs.
                </p>
            </div>
            <div class="md:w-1/3 text-center md:text-right">
                <a href="{{ route('contact') }}" class="inline-block px-8 py-4 bg-white text-blue-900 rounded-full font-medium transition-all hover:bg-blue-50 hover:shadow-lg">
                    Contact Us Today
                </a>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Hero animation on page load
        setTimeout(() => {
            document.querySelector('.hero-content').classList.remove('opacity-0', 'translate-y-8');
        }, 300);

        // Fade-in animations on scroll
        const fadeElements = document.querySelectorAll('.fade-in-section');

        const fadeInOnScroll = function() {
            fadeElements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const windowHeight = window.innerHeight;

                if (elementTop < windowHeight * 0.9) {
                    element.classList.add('fade-in');
                }
            });
        };

        // Initial check
        fadeInOnScroll();

        // Check on scroll
        window.addEventListener('scroll', fadeInOnScroll);
    });
</script>
@endpush

@push('styles')
<style>
    .fade-in-section {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 1s ease-out, transform 1s ease-out;
    }

    .fade-in-section.fade-in {
        opacity: 1;
        transform: translateY(0);
    }
</style>
@endpush
@endsection
