@extends('layouts.main')

@section('content')
    <!-- 1. Hero Section -->
    <section class="relative bg-gray-900 text-white overflow-hidden">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1507608616759-54f48f0af0ee?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80" 
                 alt="Energy & Environmental Background" 
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gray-900/70 mix-blend-multiply"></div>
        </div>
        
        <div class="container mx-auto px-4 py-32 relative z-10">
            <div class="max-w-2xl" data-aos="fade-up" data-aos-delay="100">
                <h1 class="text-5xl font-bold mb-6">Sustainable Cable Solutions for Energy & Environmental Applications</h1>
                <p class="text-xl mb-8">Innovative, high-performance cable assemblies engineered for renewable energy systems and environmental monitoring equipment.</p>
                <a href="#products" class="btn bg-green-600 hover:bg-green-700 text-white px-8 py-3 rounded-lg font-medium inline-flex items-center transition-colors duration-300">
                    Explore Energy & Environmental Solutions
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- 2. About the Niche -->
    <section class="py-20 bg-white" data-aos="fade-up">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center mb-16">
                <h2 class="text-3xl font-bold mb-6">Powering a Sustainable Future</h2>
                <p class="text-lg text-gray-600 mb-8">
                    At PaderTeG, we're committed to accelerating the transition to clean energy through innovative cable solutions designed specifically for renewable energy systems and environmental monitoring equipment. Our specialized cables help maximize efficiency and reliability in solar arrays, wind turbines, hydroelectric systems, and critical environmental monitoring infrastructure.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
                    <div class="p-6 border border-gray-100 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Solar-Optimized Cables</h3>
                        <p class="text-gray-600">UV-resistant, weather-sealed cables designed for maximum performance in photovoltaic systems.</p>
                    </div>
                    <div class="p-6 border border-gray-100 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Environmental Sensing</h3>
                        <p class="text-gray-600">Specialized cables for environmental monitoring stations and data collection equipment in harsh conditions.</p>
                    </div>
                    <div class="p-6 border border-gray-100 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Global Compliance</h3>
                        <p class="text-gray-600">Our cables meet international standards for renewable energy and environmental applications worldwide.</p>
                    </div>
                </div>
                <a href="{{ route('about') }}" class="inline-flex items-center text-green-600 font-medium mt-8 hover:text-green-800 transition-colors duration-300">
                    Learn More About Our Sustainability Commitment
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- 3. Product Showcase -->
    <section id="products" class="py-20 bg-gray-50" data-aos="fade-up">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-16">Energy & Environmental Solutions</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Product 1 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1509391366360-2e959784a276?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" 
                             alt="Solar PV Cables" 
                             class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Solar PV Cables</h3>
                        <p class="text-gray-600 mb-4">Specialized cables for photovoltaic arrays with UV resistance, extended temperature range, and excellent durability.</p>
                        <a href="#" class="inline-flex items-center text-green-600 font-medium hover:text-green-800 transition-colors duration-300">
                            View Details
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Product 2 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1466611653911-95081537e5b7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" 
                             alt="Wind Turbine Cables" 
                             class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Wind Turbine Cables</h3>
                        <p class="text-gray-600 mb-4">Torsion-resistant cables specifically designed for the dynamic movement and harsh conditions of wind energy systems.</p>
                        <a href="#" class="inline-flex items-center text-green-600 font-medium hover:text-green-800 transition-colors duration-300">
                            View Details
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Product 3 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1521913626786-fe3bd4b2c9ca?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" 
                             alt="Environmental Monitoring Cables" 
                             class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Environmental Monitoring Cables</h3>
                        <p class="text-gray-600 mb-4">Weatherproof cables for remote environmental sensing stations, offering reliable data transmission in extreme conditions.</p>
                        <a href="#" class="inline-flex items-center text-green-600 font-medium hover:text-green-800 transition-colors duration-300">
                            View Details
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="{{ route('products.energy-environmental') }}" class="btn bg-green-600 hover:bg-green-700 text-white px-8 py-3 rounded-lg font-medium transition-colors duration-300">
                    View All Energy & Environmental Products
                </a>
            </div>
        </div>
    </section>

    <!-- 4. Benefits & Features Section -->
    <section class="py-20 bg-white" data-aos="fade-up">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-16">Benefits & Features</h2>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                <div>
                    <h3 class="text-2xl font-semibold mb-6">Why Our Energy & Environmental Solutions Matter</h3>
                    <p class="text-gray-600 mb-6">
                        Renewable energy systems and environmental monitoring equipment operate in some of the world's most challenging locations and conditions. From solar farms in scorching deserts to wind turbines in coastal areas and monitoring stations in remote wilderness, these applications demand cable solutions that can withstand extreme environments while maintaining optimal performance.
                    </p>
                    <p class="text-gray-600 mb-6">
                        Our specialized cable assemblies are engineered with enhanced weather resistance, UV protection, and chemical resistance to ensure longevity and reliability in outdoor installations. We understand that downtime in renewable energy systems means lost power generation, which is why our products are built to maximize system uptime and efficiency.
                    </p>
                    <p class="text-gray-600">
                        By partnering with PaderTeG for your energy and environmental cabling needs, you're not only getting superior technical performance but also supporting a company committed to sustainability in both our products and manufacturing processes.
                    </p>
                </div>
                
                <div class="bg-gray-50 p-8 rounded-xl">
                    <h3 class="text-2xl font-semibold mb-6">Key Features</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-green-500 mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <div>
                                <span class="font-medium">UV & Weather Resistance:</span> 
                                <p class="text-gray-600">Special jacketing materials providing 25+ years of outdoor durability in harsh sun exposure and varied weather conditions.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-green-500 mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <div>
                                <span class="font-medium">Extreme Temperature Performance:</span> 
                                <p class="text-gray-600">Cables designed to operate reliably in temperatures from -40°C to +120°C, suitable for diverse global climates.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-green-500 mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <div>
                                <span class="font-medium">Torsion Resistance:</span> 
                                <p class="text-gray-600">Special construction that allows for repeated twisting and movement in dynamic applications like wind turbines.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-green-500 mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <div>
                                <span class="font-medium">Low Environmental Impact:</span> 
                                <p class="text-gray-600">Halogen-free, RoHS compliant materials with reduced environmental footprint and recyclable components.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-green-500 mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <div>
                                <span class="font-medium">Long-Distance Signal Integrity:</span> 
                                <p class="text-gray-600">Enhanced data transmission capabilities for remote monitoring stations and large-scale renewable installations.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Call to Action -->
    <section class="py-20 bg-green-800 text-white" data-aos="fade-up">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">Power the Future with PaderTeG</h2>
            <p class="text-xl mb-10 max-w-3xl mx-auto">Join the clean energy revolution with cable solutions that optimize performance, maximize durability, and support sustainable practices in renewable energy systems and environmental monitoring.</p>
            
            <div class="flex flex-col sm:flex-row justify-center items-center space-y-4 sm:space-y-0 sm:space-x-6">
                <a href="{{ route('contact') }}?inquiry=energy-environmental" class="btn bg-white text-green-800 hover:bg-gray-100 px-8 py-3 rounded-lg font-medium inline-flex items-center transition-colors duration-300">
                    Request a Sustainability Solution
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="tel:+40123456789" class="text-white hover:text-gray-200 font-medium inline-flex items-center transition-colors duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                    </svg>
                    +40 123 456 789
                </a>
            </div>
        </div>
    </section>
@endsection 