@extends('layouts.main')

@section('title', 'About Us - Paderteg')

@section('content')
    <!-- Hero Section with Retro Grid -->
    <section class="relative h-[60vh] min-h-[500px] bg-gradient-to-br from-blue-900 via-blue-800 to-blue-700 text-white overflow-hidden">
        <!-- Retro Sun -->
        <div class="retro-sun"></div>

        <!-- Retro Grid -->
        <div class="retro-grid"></div>

        <!-- Content -->
        <div class="relative z-10 flex flex-col items-center justify-center h-full w-full px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold mb-4 bg-gradient-to-r from-blue-300 via-blue-400 to-blue-200 bg-clip-text text-transparent">About Paderteg</h1>
            <p class="text-xl sm:text-2xl text-blue-100 max-w-full mx-auto">Precision, Quality, and Reliability in Every Cable Assembly</p>

            <!-- Scroll Indicator -->
            <a href="#company-overview" class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex flex-col items-center text-white hover:text-blue-300 transition-colors">
                <span class="text-sm mb-2">Scroll Down</span>
                <svg class="w-6 h-6 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </a>
        </div>
    </section>

    <!-- Company Overview -->
    <section id="company-overview" class="py-16 sm:py-24 bg-white">
        <div class="w-full px-4 sm:px-6 lg:px-8">
            <div class="max-w-full mx-auto">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-8 text-center">Our Company</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    <div>
                        <p class="text-lg text-gray-700 mb-6">
                            Founded in 2004, Paderteg has established itself as a leading manufacturer of high-quality cable assemblies and wiring harnesses. With our headquarters in Romania and operations in multiple European countries, we serve clients across various industries including automotive, medical, industrial, and renewable energy sectors.
                        </p>
                        <p class="text-lg text-gray-700">
                            Our commitment to precision engineering, rigorous quality control, and customer-focused solutions has earned us a reputation for excellence in the field of cable manufacturing. With state-of-the-art facilities and a team of skilled engineers and technicians, we deliver products that meet the highest international standards.
                        </p>
                    </div>
                    <div class="rounded-lg overflow-hidden shadow-lg">
                        <img src="{{ asset('images/since_20004.png') }}" alt="Paderteg Facility" class="w-full h-auto">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission and Vision -->
    <section class="py-16 sm:py-24 bg-gray-50">
        <div class="w-full px-4 sm:px-6 lg:px-8">
            <div class="max-w-full mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                    <!-- Mission -->
                    <div class="bg-white p-8 rounded-lg shadow-md">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">Our Mission</h3>
                        </div>
                        <p class="text-gray-700">
                            To deliver innovative, high-quality cable assembly solutions that exceed customer expectations, while maintaining the highest standards of service, integrity, and technical excellence. We strive to be the preferred partner for companies seeking reliable connection solutions across diverse industries.
                        </p>
                    </div>

                    <!-- Vision -->
                    <div class="bg-white p-8 rounded-lg shadow-md">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">Our Vision</h3>
                        </div>
                        <p class="text-gray-700">
                            To be recognized globally as a leader in cable assembly solutions, setting industry standards for quality, innovation, and customer satisfaction. We aim to continuously expand our capabilities and market presence while maintaining our commitment to sustainability and ethical business practices.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values -->
    <section class="py-16 sm:py-24 bg-white">
        <div class="w-full px-4 sm:px-6 lg:px-8">
            <div class="max-w-full mx-auto">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-12 text-center">Our Core Values</h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Quality -->
                    <div class="bg-gray-50 p-6 rounded-lg text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Quality</h3>
                        <p class="text-gray-700">
                            We are committed to excellence in everything we do, from product design and manufacturing to customer service and business operations.
                        </p>
                    </div>

                    <!-- Innovation -->
                    <div class="bg-gray-50 p-6 rounded-lg text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Innovation</h3>
                        <p class="text-gray-700">
                            We continuously seek new and better ways to serve our customers, embracing technological advancements and creative thinking.
                        </p>
                    </div>

                    <!-- Integrity -->
                    <div class="bg-gray-50 p-6 rounded-lg text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Integrity</h3>
                        <p class="text-gray-700">
                            We conduct our business with honesty, transparency, and ethical standards, building trust with our customers, employees, and partners.
                        </p>
                    </div>

                    <!-- Sustainability -->
                    <div class="bg-gray-50 p-6 rounded-lg text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Sustainability</h3>
                        <p class="text-gray-700">
                            We are dedicated to environmentally responsible practices and supporting sustainable development in our operations and products.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- What We Do -->
    <section class="py-16 sm:py-24 bg-gray-50">
        <div class="w-full px-4 sm:px-6 lg:px-8">
            <div class="max-w-full mx-auto">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-8 text-center">What We Do</h2>
                
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <div class="h-48 bg-blue-100">
                            <img src="{{ asset('images/custom_cable_assemblies.png') }}" alt="Custom Cable Assemblies" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Custom Cable Assemblies</h3>
                            <p class="text-gray-700 mb-4">
                                We design and manufacture custom cable assemblies tailored to meet specific customer requirements across various industries, including automotive, medical, industrial, and energy.
                            </p>
                            <a href="{{ route('products.index') }}" class="text-blue-600 hover:text-blue-800 font-medium inline-flex items-center">
                                Learn More
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <div class="h-48 bg-blue-100">
                            <img src="{{ asset('images/wire_harnesses.png') }}" alt="Wiring Harnesses" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Wiring Harnesses</h3>
                            <p class="text-gray-700 mb-4">
                                Our comprehensive wiring harness solutions include design, prototype development, and production of complex harnesses for automotive and industrial applications.
                            </p>
                            <a href="{{ route('products.automotive') }}" class="text-blue-600 hover:text-blue-800 font-medium inline-flex items-center">
                                Learn More
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <div class="h-48 bg-blue-100">
                            <img src="{{ asset('images/crafting_quality_connections_since_2004.png') }}" alt="Testing & Quality Assurance" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Testing & Quality Assurance</h3>
                            <p class="text-gray-700 mb-4">
                                We provide comprehensive testing services, including electrical testing, mechanical testing, and environmental testing to ensure the highest quality and reliability of our products.
                            </p>
                            <a href="{{ route('certificates') }}" class="text-blue-600 hover:text-blue-800 font-medium inline-flex items-center">
                                Learn More
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 sm:py-32 bg-blue-900 text-white">
        <div class="w-full px-4 sm:px-6 lg:px-8">
            <div class="max-w-full mx-auto text-center">
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">Ready to Work With Us?</h2>
                <p class="text-xl text-blue-100 mb-12 max-w-full mx-auto">
                    Partner with Paderteg for high-quality cable assembly solutions tailored to your specific requirements.
                </p>
                <div class="flex flex-col sm:flex-row justify-center items-center space-y-4 sm:space-y-0 sm:space-x-6">
                    <a href="{{ route('contact') }}" class="bg-white text-blue-900 hover:bg-blue-100 px-8 py-3 rounded-lg font-medium">
                        Contact Us
                    </a>
                    <a href="{{ route('products.index') }}" class="bg-transparent border border-white text-white hover:bg-white hover:text-blue-900 px-8 py-3 rounded-lg font-medium transition-colors">
                        Explore Our Products
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values -->
    <section class="py-24 bg-white scroll-mt-16" id="values-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in-section">
                <span class="inline-block px-3 py-1 text-sm font-semibold bg-blue-100 text-blue-800 rounded-full mb-6">Our Principles</span>
                <h2 class="text-4xl font-bold text-gray-900 mb-6">Core Values</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    The principles that guide our business and relationships with customers, partners, and employees.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Quality -->
                <div class="p-8 border border-gray-100 rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 fade-in-section">
                    <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Quality</h3>
                    <p class="text-gray-600">
                        We are committed to excellence in everything we do, ensuring our products meet or exceed the highest standards of performance and reliability.
                    </p>
                </div>

                <!-- Innovation -->
                <div class="p-8 border border-gray-100 rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 fade-in-section">
                    <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Innovation</h3>
                    <p class="text-gray-600">
                        We embrace new ideas and technologies to stay at the forefront of our industry and provide cutting-edge solutions for complex challenges.
                    </p>
                </div>

                <!-- Integrity -->
                <div class="p-8 border border-gray-100 rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 fade-in-section">
                    <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Integrity</h3>
                    <p class="text-gray-600">
                        We conduct our business with honesty, transparency, and ethical standards, building trust with our customers, partners, and employees.
                    </p>
                </div>

                <!-- Customer Focus -->
                <div class="p-8 border border-gray-100 rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 fade-in-section">
                    <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Customer Focus</h3>
                    <p class="text-gray-600">
                        We strive to understand and exceed our customers' expectations, building long-lasting relationships based on mutual success and satisfaction.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- What We Do -->
    <section class="py-24 bg-gray-50 scroll-mt-16" id="what-we-do-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in-section">
                <span class="inline-block px-3 py-1 text-sm font-semibold bg-blue-100 text-blue-800 rounded-full mb-6">Our Expertise</span>
                <h2 class="text-4xl font-bold text-gray-900 mb-6">What We Do</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    We specialize in creating high-quality cable assemblies and system technology solutions tailored to our clients' specific requirements.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group fade-in-section">
                    <div class="aspect-w-16 aspect-h-9 overflow-hidden">
                        <img
                            src="{{ asset('images/custom_cable_assemblies.png') }}"
                            alt="Custom Cable Assemblies"
                            class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500"
                        >
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Custom Cable Assemblies</h3>
                        <p class="text-gray-600 mb-4">
                            We design and manufacture bespoke cable assemblies tailored to meet the specific requirements of various applications and industries.
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group fade-in-section">
                    <div class="aspect-w-16 aspect-h-9 overflow-hidden">
                        <img
                            src="{{ asset('images/wire_harnesses.png') }}"
                            alt="Wire Harnesses"
                            class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500"
                        >
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Wire Harnesses</h3>
                        <p class="text-gray-600 mb-4">
                            Our wire harnesses are engineered to provide reliable connectivity and efficient organization of electrical systems for various applications.
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group fade-in-section">
                    <div class="aspect-w-16 aspect-h-9 overflow-hidden">
                        <img
                            src="{{ asset('images/system_integration.png') }}"
                            alt="System Integration"
                            class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500"
                        >
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">System Integration</h3>
                        <p class="text-gray-600 mb-4">
                            We provide comprehensive system integration solutions, ensuring seamless connectivity and optimal performance across your entire setup.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-24 bg-white scroll-mt-16" id="why-choose-us-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in-section">
                <span class="inline-block px-3 py-1 text-sm font-semibold bg-blue-100 text-blue-800 rounded-full mb-6">Our Advantages</span>
                <h2 class="text-4xl font-bold text-gray-900 mb-6">Why Choose Us</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Discover the key advantages that make Paderteg the trusted partner for cable assembly solutions.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <div class="p-8 border border-gray-100 rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 fade-in-section">
                    <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Certified Quality</h3>
                    <p class="text-gray-600">
                        Our ISO 9001:2015 and IATF 16949 certifications reflect our commitment to maintaining the highest quality standards in every product we deliver.
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
                        We specialize in creating tailored cable solutions designed to meet your specific requirements, ensuring optimal performance for your unique applications.
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

                <div class="p-8 border border-gray-100 rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 fade-in-section">
                    <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">State-of-the-Art Facilities</h3>
                    <p class="text-gray-600">
                        Our modern manufacturing facilities in Romania are equipped with the latest technology and machinery to ensure precision and efficiency in production.
                    </p>
                </div>

                <div class="p-8 border border-gray-100 rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 fade-in-section">
                    <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Expert Team</h3>
                    <p class="text-gray-600">
                        Our skilled engineers and technicians bring years of experience and expertise to every project, ensuring the highest quality in design and manufacturing.
                    </p>
                </div>

                <div class="p-8 border border-gray-100 rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 fade-in-section">
                    <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Global Partnership</h3>
                    <p class="text-gray-600">
                        As part of the CIS electronic Group, we leverage international resources and expertise to deliver world-class solutions to clients worldwide.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Certifications -->
    <section class="py-24 bg-gray-50 scroll-mt-16" id="certifications-section" x-data="{ activeTab: 'all', showModal: false, currentCertificate: null }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in-section">
                <span class="inline-block px-3 py-1 text-sm font-semibold bg-blue-100 text-blue-800 rounded-full mb-6">Quality Assurance</span>
                <h2 class="text-4xl font-bold text-gray-900 mb-6">Our Certifications</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Our commitment to quality is validated by industry-leading certifications that ensure we meet the highest standards.
                </p>
            </div>

            <!-- Location Filter Tabs -->
            <div class="flex justify-center mb-12">
                <div class="inline-flex rounded-lg border border-gray-200 bg-white p-1">
                    <button
                        @click="activeTab = 'all'"
                        :class="activeTab === 'all' ? 'bg-blue-600 text-white' : 'text-gray-500 hover:text-gray-700'"
                        class="px-4 py-2 text-sm font-medium rounded-md transition-colors duration-200"
                    >
                        All Locations
                    </button>
                    <button
                        @click="activeTab = 'axente'"
                        :class="activeTab === 'axente' ? 'bg-blue-600 text-white' : 'text-gray-500 hover:text-gray-700'"
                        class="px-4 py-2 text-sm font-medium rounded-md transition-colors duration-200"
                    >
                        Axente Sever
                    </button>
                    <button
                        @click="activeTab = 'copsa'"
                        :class="activeTab === 'copsa' ? 'bg-blue-600 text-white' : 'text-gray-500 hover:text-gray-700'"
                        class="px-4 py-2 text-sm font-medium rounded-md transition-colors duration-200"
                    >
                        Copșa Mică
                    </button>
                </div>
            </div>

            <div class="space-y-12 fade-in-section">
                <!-- Axente Sever Certificates -->
                <div x-show="activeTab === 'all' || activeTab === 'axente'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform translate-y-4">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-6 text-center">Axente Sever Location</h3>
                    <div class="flex flex-wrap justify-center items-center gap-12">
                        <div class="text-center p-6 bg-white rounded-xl shadow-sm hover:shadow-md transition-all duration-300 cursor-pointer"
                             @click="showModal = true; currentCertificate = {
                                title: 'ISO 9001:2015',
                                image: '{{ asset('images/axente_sever_9001.png') }}',
                                description: 'Quality Management System certification ensuring consistent quality in all our processes.',
                                validUntil: '31.12.2025'
                             }">
                            <img src="{{ asset('images/axente_sever_9001.png') }}" alt="ISO 9001" class="h-20 mx-auto mb-4 grayscale hover:grayscale-0 transition-all duration-300">
                            <p class="text-gray-700 font-medium">ISO 9001:2015</p>
                            <p class="text-gray-600 text-sm mt-2">Quality Management System</p>
                        </div>

                        <div class="text-center p-6 bg-white rounded-xl shadow-sm hover:shadow-md transition-all duration-300 cursor-pointer"
                             @click="showModal = true; currentCertificate = {
                                title: 'IATF 16949:2016',
                                image: '{{ asset('images/axente_sever_IATF_16949.png') }}',
                                description: 'Automotive Quality Management System certification for automotive production and service parts.',
                                validUntil: '15.09.2024'
                             }">
                            <img src="{{ asset('images/axente_sever_IATF_16949.png') }}" alt="IATF 16949" class="h-20 mx-auto mb-4 grayscale hover:grayscale-0 transition-all duration-300">
                            <p class="text-gray-700 font-medium">IATF 16949:2016</p>
                            <p class="text-gray-600 text-sm mt-2">Automotive Quality Management</p>
                        </div>
                    </div>
                </div>

                <!-- Copsa Mica Certificates -->
                <div x-show="activeTab === 'all' || activeTab === 'copsa'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform translate-y-4">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-6 text-center">Copșa Mică Location</h3>
                    <div class="flex flex-wrap justify-center items-center gap-8">
                        <div class="text-center p-6 bg-white rounded-xl shadow-sm hover:shadow-md transition-all duration-300 cursor-pointer"
                             @click="showModal = true; currentCertificate = {
                                title: 'IATF 16949:2016',
                                image: '{{ asset('images/copsa_mica_iatf_16949.png') }}',
                                description: 'Automotive Quality Management System certification for automotive production and service parts.',
                                validUntil: '20.06.2027'
                             }">
                            <img src="{{ asset('images/copsa_mica_iatf_16949.png') }}" alt="IATF 16949" class="h-20 mx-auto mb-4 grayscale hover:grayscale-0 transition-all duration-300">
                            <p class="text-gray-700 font-medium">IATF 16949:2016</p>
                            <p class="text-gray-600 text-sm mt-2">Automotive Quality Management</p>
                        </div>

                        <div class="text-center p-6 bg-white rounded-xl shadow-sm hover:shadow-md transition-all duration-300 cursor-pointer"
                             @click="showModal = true; currentCertificate = {
                                title: 'ISO 9001:2015',
                                image: '{{ asset('images/copsa_mica_iso_9001.png') }}',
                                description: 'Quality Management System certification ensuring consistent quality in all our processes.',
                                validUntil: '20.06.2027'
                             }">
                            <img src="{{ asset('images/copsa_mica_iso_9001.png') }}" alt="ISO 9001" class="h-20 mx-auto mb-4 grayscale hover:grayscale-0 transition-all duration-300">
                            <p class="text-gray-700 font-medium">ISO 9001:2015</p>
                            <p class="text-gray-600 text-sm mt-2">Quality Management System</p>
                        </div>

                        <div class="text-center p-6 bg-white rounded-xl shadow-sm hover:shadow-md transition-all duration-300 cursor-pointer"
                             @click="showModal = true; currentCertificate = {
                                title: 'ISO 14001:2015',
                                image: '{{ asset('images/copsa_mica_iso_14001.png') }}',
                                description: 'Environmental Management System certification demonstrating our commitment to environmental responsibility.',
                                validUntil: '18.08.2027'
                             }">
                            <img src="{{ asset('images/copsa_mica_iso_14001.png') }}" alt="ISO 14001" class="h-20 mx-auto mb-4 grayscale hover:grayscale-0 transition-all duration-300">
                            <p class="text-gray-700 font-medium">ISO 14001:2015</p>
                            <p class="text-gray-600 text-sm mt-2">Environmental Management</p>
                        </div>

                        <div class="text-center p-6 bg-white rounded-xl shadow-sm hover:shadow-md transition-all duration-300 cursor-pointer"
                             @click="showModal = true; currentCertificate = {
                                title: 'ISO 45001:2018',
                                image: '{{ asset('images/copsa_mica_iso_45001.png') }}',
                                description: 'Occupational Health and Safety Management System certification ensuring workplace safety.',
                                validUntil: '19.09.2025'
                             }">
                            <img src="{{ asset('images/copsa_mica_iso_45001.png') }}" alt="ISO 45001" class="h-20 mx-auto mb-4 grayscale hover:grayscale-0 transition-all duration-300">
                            <p class="text-gray-700 font-medium">ISO 45001:2018</p>
                            <p class="text-gray-600 text-sm mt-2">Occupational Health & Safety</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Certificate Modal -->
            <div x-show="showModal"
                 class="fixed inset-0 z-50 overflow-y-auto"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0">
                <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                    <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                        <div class="absolute inset-0 bg-gray-500 opacity-75" @click="showModal = false"></div>
                    </div>

                    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-5xl sm:w-full"
                         @click.away="showModal = false">
                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            <div class="sm:flex sm:items-start">
                                <div class="mt-3 text-center sm:mt-0 sm:text-left w-full">
                                    <h3 class="text-2xl leading-6 font-semibold text-gray-900 mb-4" x-text="currentCertificate?.title"></h3>
                                    <div class="mt-4 flex justify-center">
                                        <img :src="currentCertificate?.image" :alt="currentCertificate?.title" class="max-h-[600px] w-auto object-contain">
                                    </div>
                                    <p class="mt-4 text-gray-600" x-text="currentCertificate?.description"></p>
                                    <p class="mt-2 text-sm text-gray-500">Valid until: <span x-text="currentCertificate?.validUntil"></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <button type="button"
                                    class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm"
                                    @click="showModal = false">
                                Close
                            </button>
                            <a href="#"
                               class="mt-3 sm:mt-0 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
                                Download Certificate
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12 fade-in-section">
                <a href="{{ route('certificates') }}" class="inline-flex items-center text-blue-600 font-medium hover:text-blue-800 transition-colors">
                    View all certifications
                    <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Meet the Team -->
    <section class="py-24 bg-white scroll-mt-16" id="team-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in-section">
                <span class="inline-block px-3 py-1 text-sm font-semibold bg-blue-100 text-blue-800 rounded-full mb-6">Our People</span>
                <h2 class="text-4xl font-bold text-gray-900 mb-6">Meet the Team</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Our success is driven by a dedicated team of experts committed to excellence in every aspect of our business.
                </p>
            </div>

            <!-- Team Group Photo -->
            <div class="mb-16 fade-in-section">
                <div class="relative overflow-hidden rounded-3xl shadow-2xl">
                    <img
                        src="{{ asset('images/management_team.png') }}"
                        alt="Paderteg Management Team"
                        class="w-full h-auto object-cover"
                        onerror="this.src='https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80'"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                    <div class="absolute bottom-0 left-0 w-full p-8 text-white">
                        <h3 class="text-2xl font-bold mb-2">Management Team</h3>
                        <p class="text-white/80">The leadership driving Paderteg's innovation and growth</p>
                    </div>
                </div>
            </div>

            <!-- New Team Slider -->
            <div class="team-members-container fade-in-section">
                <!-- Tabs for team members -->
                <div class="relative" x-data="{ activeTab: 'management' }">
                    <!-- Tab navigation -->
                    <div class="flex justify-center mb-12 border-b border-gray-200">
                        <button
                            @click="activeTab = 'management'"
                            :class="activeTab === 'management' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-500 hover:text-gray-700'"
                            class="px-6 py-3 text-sm font-medium transition-colors duration-200 mx-2"
                        >
                            Leadership Team
                        </button>
                        <button
                            @click="activeTab = 'operations'"
                            :class="activeTab === 'operations' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-500 hover:text-gray-700'"
                            class="px-6 py-3 text-sm font-medium transition-colors duration-200 mx-2"
                        >
                            Operations Team
                        </button>
                        <button
                            @click="activeTab = 'support'"
                            :class="activeTab === 'support' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-500 hover:text-gray-700'"
                            class="px-6 py-3 text-sm font-medium transition-colors duration-200 mx-2"
                        >
                            Support Team
                        </button>
                    </div>

                    <!-- Management Team -->
                    <div x-show="activeTab === 'management'" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Team Member 1 -->
                        <div class="team-member-card group">
                            <div class="relative overflow-hidden rounded-2xl">
                                <img
                                    src="{{ asset('images/Ioan-Marius Milonean.jpeg') }}"
                                    alt="Ioan-Marius Milonean"
                                    class="w-full aspect-square object-cover object-center group-hover:scale-105 transition-transform duration-500"
                                >
                                <div class="absolute inset-0 bg-gradient-to-t from-blue-900/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                                    <div class="p-6">
                                        <p class="text-white text-sm leading-relaxed">
                                            With over 20 years of experience in the cable manufacturing industry, Marius leads our company with vision and expertise.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 text-center">
                                <h3 class="text-xl font-bold text-gray-900">Ioan-Marius Milonean</h3>
                                <p class="text-blue-600 font-medium">Administrator/Owner</p>
                            </div>
                        </div>

                        <!-- Team Member 2 -->
                        <div class="team-member-card group">
                            <div class="relative overflow-hidden rounded-2xl">
                                <img
                                    src="{{ asset('images/Anca Ganfalean.jpeg') }}"
                                    alt="Anca Ganfalean"
                                    class="w-full aspect-square object-cover object-center group-hover:scale-105 transition-transform duration-500"
                                >
                                <div class="absolute inset-0 bg-gradient-to-t from-blue-900/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                                    <div class="p-6">
                                        <p class="text-white text-sm leading-relaxed">
                                            Anca manages our financial operations and human resources, ensuring smooth business operations and employee satisfaction.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 text-center">
                                <h3 class="text-xl font-bold text-gray-900">Anca Ganfalean</h3>
                                <p class="text-blue-600 font-medium">Finance & HR</p>
                            </div>
                        </div>

                        <!-- Team Member 3 -->
                        <div class="team-member-card group">
                            <div class="relative overflow-hidden rounded-2xl">
                                <img
                                    src="{{ asset('images/Cristian Dura.jpeg') }}"
                                    alt="Cristian Dura"
                                    class="w-full aspect-square object-cover object-center group-hover:scale-105 transition-transform duration-500"
                                >
                                <div class="absolute inset-0 bg-gradient-to-t from-blue-900/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                                    <div class="p-6">
                                        <p class="text-white text-sm leading-relaxed">
                                            Cristian leads our sales and engineering teams, ensuring our solutions meet client needs and industry standards.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 text-center">
                                <h3 class="text-xl font-bold text-gray-900">Cristian Dura</h3>
                                <p class="text-blue-600 font-medium">Sales & Engineering</p>
                            </div>
                        </div>
                    </div>

                    <!-- Operations Team -->
                    <div x-show="activeTab === 'operations'" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Team Member 4 -->
                        <div class="team-member-card group">
                            <div class="relative overflow-hidden rounded-2xl">
                                <img
                                    src="{{ asset('images/Dana Stanciu.jpeg') }}"
                                    alt="Dana Stanciu"
                                    class="w-full aspect-square object-cover object-center group-hover:scale-105 transition-transform duration-500"
                                >
                                <div class="absolute inset-0 bg-gradient-to-t from-blue-900/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                                    <div class="p-6">
                                        <p class="text-white text-sm leading-relaxed">
                                            Dana oversees our quality management and environmental health & safety programs, ensuring compliance and excellence.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 text-center">
                                <h3 class="text-xl font-bold text-gray-900">Dana Stanciu</h3>
                                <p class="text-blue-600 font-medium">Quality & EHS</p>
                            </div>
                        </div>

                        <!-- Team Member 5 -->
                        <div class="team-member-card group">
                            <div class="relative overflow-hidden rounded-2xl">
                                <img
                                    src="{{ asset('images/Cosmin Necsuleu.jpeg') }}"
                                    alt="Cosmin Necsuleu"
                                    class="w-full aspect-square object-cover object-center group-hover:scale-105 transition-transform duration-500"
                                >
                                <div class="absolute inset-0 bg-gradient-to-t from-blue-900/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                                    <div class="p-6">
                                        <p class="text-white text-sm leading-relaxed">
                                            Cosmin manages our production processes and technical operations, ensuring efficient and high-quality manufacturing.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 text-center">
                                <h3 class="text-xl font-bold text-gray-900">Cosmin Necsuleu</h3>
                                <p class="text-blue-600 font-medium">Production & Technic</p>
                            </div>
                        </div>

                        <!-- Team Member 6 -->
                        <div class="team-member-card group">
                            <div class="relative overflow-hidden rounded-2xl">
                                <img
                                    src="{{ asset('images/Ramona Barac.jpeg') }}"
                                    alt="Ramona Barac"
                                    class="w-full aspect-square object-cover object-center group-hover:scale-105 transition-transform duration-500"
                                >
                                <div class="absolute inset-0 bg-gradient-to-t from-blue-900/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                                    <div class="p-6">
                                        <p class="text-white text-sm leading-relaxed">
                                            Ramona oversees our logistics operations, ensuring timely delivery and efficient supply chain management.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 text-center">
                                <h3 class="text-xl font-bold text-gray-900">Ramona Barac</h3>
                                <p class="text-blue-600 font-medium">Logistics</p>
                            </div>
                        </div>
                    </div>

                    <!-- Support Team -->
                    <div x-show="activeTab === 'support'" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Team Member 7 -->
                        <div class="team-member-card group">
                            <div class="relative overflow-hidden rounded-2xl">
                                <img
                                    src="{{ asset('images/Carmen Papara.jpeg') }}"
                                    alt="Carmen Papara"
                                    class="w-full aspect-square object-cover object-center group-hover:scale-105 transition-transform duration-500"
                                >
                                <div class="absolute inset-0 bg-gradient-to-t from-blue-900/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                                    <div class="p-6">
                                        <p class="text-white text-sm leading-relaxed">
                                            Carmen manages our purchasing operations, ensuring we source high-quality materials at competitive prices.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 text-center">
                                <h3 class="text-xl font-bold text-gray-900">Carmen Papara</h3>
                                <p class="text-blue-600 font-medium">Purchasing</p>
                            </div>
                        </div>

                        <!-- Team Member 8 -->
                        <div class="team-member-card group">
                            <div class="relative overflow-hidden rounded-2xl">
                                <img
                                    src="{{ asset('images/Gheorghe Oancea.jpeg') }}"
                                    alt="Gheorghe Oancea"
                                    class="w-full aspect-square object-cover object-center group-hover:scale-105 transition-transform duration-500"
                                >
                                <div class="absolute inset-0 bg-gradient-to-t from-blue-900/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                                    <div class="p-6">
                                        <p class="text-white text-sm leading-relaxed">
                                            Gheorghe manages our IT infrastructure and systems, ensuring smooth digital operations and security.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 text-center">
                                <h3 class="text-xl font-bold text-gray-900">Gheorghe Oancea</h3>
                                <p class="text-blue-600 font-medium">IT</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Location -->
    <section class="py-24 bg-gray-50 scroll-mt-16" id="locations-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in-section">
                <span class="inline-block px-3 py-1 text-sm font-semibold bg-blue-100 text-blue-800 rounded-full mb-6">Our Facilities</span>
                <h2 class="text-4xl font-bold text-gray-900 mb-6">Our Locations</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Strategically located manufacturing facilities to serve our clients efficiently.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-10 fade-in-section">
                <!-- Axente Sever -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300">
                    <div class="aspect-w-16 aspect-h-9 relative overflow-hidden">
                        <iframe
                            class="w-full h-full"
                            style="border:0"
                            loading="lazy"
                            allowfullscreen
                            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8&q=Axente+Sever,Romania">
                        </iframe>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-semibold text-gray-900 mb-4">Manufacturing site | Axente Sever</h3>
                        <div class="space-y-4 text-gray-600">
                            <div class="flex items-start">
                                <svg class="w-6 h-6 text-blue-600 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                                <p>Over 1,000 m² production area, warehouse & offices</p>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-6 h-6 text-blue-600 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>
                                <p>Expansion up to 30,000 m²</p>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-6 h-6 text-blue-600 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <p>Axente Sever, Romania</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Copsa Mica -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300">
                    <div class="aspect-w-16 aspect-h-9 relative overflow-hidden">
                        <iframe
                            class="w-full h-full"
                            style="border:0"
                            loading="lazy"
                            allowfullscreen
                            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8&q=Copsa+Mica,Romania">
                        </iframe>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-semibold text-gray-900 mb-4">Manufacturing site | Copșa Mică</h3>
                        <div class="space-y-4 text-gray-600">
                            <div class="flex items-start">
                                <svg class="w-6 h-6 text-blue-600 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                                <p>Over 3,000 m² production area, warehouse & offices</p>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-6 h-6 text-blue-600 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                                <p>IATF certified production location</p>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-6 h-6 text-blue-600 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <p>Copșa Mică, Romania</p>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-6 h-6 text-blue-600 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>
                                <p>Extended Manufacturing site: 1,200 m² production area</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 sm:py-32 bg-blue-900 text-white">
        <div class="w-full px-4 sm:px-6 lg:px-8">
            <div class="max-w-full mx-auto text-center">
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">Ready to Work With Us?</h2>
                <p class="text-xl text-blue-100 mb-12 max-w-full mx-auto">
                    Partner with Paderteg for high-quality cable assembly solutions tailored to your specific requirements.
                </p>
                <div class="flex flex-col sm:flex-row justify-center items-center space-y-4 sm:space-y-0 sm:space-x-6">
                    <a href="{{ route('contact') }}" class="bg-white text-blue-900 hover:bg-blue-100 px-8 py-3 rounded-lg font-medium">
                        Contact Us
                    </a>
                    <a href="{{ route('products.index') }}" class="bg-transparent border border-white text-white hover:bg-white hover:text-blue-900 px-8 py-3 rounded-lg font-medium transition-colors">
                        Explore Our Products
                    </a>
                </div>
            </div>
        </div>
    </section>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
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

        .team-member-card {
            transition: all 0.3s ease;
            transform: translateY(0);
        }

        .team-member-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        @media (max-width: 640px) {
            .team-members-container .grid {
                gap: 1rem !important;
            }
        }
    </style>
    @endpush

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Parallax effect for retro grid
            window.addEventListener('scroll', function() {
                const scrollY = window.scrollY;
                const grid = document.querySelector('.retro-grid');
                if (grid) {
                    grid.style.transform = `translateY(${scrollY * 0.1}px)`;
                }
            });
        });
    </script>
    @endpush
@endsection
