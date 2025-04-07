@extends('layouts.main')

@section('content')
    <!-- 1. Hero Section -->
    <section class="relative bg-gray-900 text-white overflow-hidden">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1517672651691-24622a91b550?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80" 
                 alt="Automotive Background" 
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gray-900/70 mix-blend-multiply"></div>
        </div>
        
        <div class="container mx-auto px-4 py-32 relative z-10">
            <div class="max-w-2xl" data-aos="fade-up" data-aos-delay="100">
                <h1 class="text-5xl font-bold mb-6">Precision Cable Solutions for Automotive Applications</h1>
                <p class="text-xl mb-8">High-performance, reliable cable assemblies engineered for the demanding requirements of modern vehicles and automotive systems.</p>
                <a href="#products" class="btn bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-medium inline-flex items-center transition-colors duration-300">
                    Explore Automotive Solutions
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
                <h2 class="text-3xl font-bold mb-6">Why Choose Our Automotive Cable Solutions</h2>
                <p class="text-lg text-gray-600 mb-8">
                    PaderTeG specializes in high-performance cable assemblies designed specifically for automotive applications. Our solutions are built to withstand the extreme conditions found in modern vehicles, from high temperatures in engine compartments to constant vibration and movement. With decades of experience serving leading automotive manufacturers, we deliver reliable connectivity solutions that meet the strictest industry standards.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
                    <div class="p-6 border border-gray-100 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Durability Focused</h3>
                        <p class="text-gray-600">Engineered to withstand extreme temperatures, vibration, fluids, and long-term wear in vehicle environments.</p>
                    </div>
                    <div class="p-6 border border-gray-100 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Industry Certified</h3>
                        <p class="text-gray-600">IATF 16949 certified manufacturing with full compliance to automotive industry standards including ISO 10605.</p>
                    </div>
                    <div class="p-6 border border-gray-100 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Future-Ready</h3>
                        <p class="text-gray-600">Solutions designed for emerging automotive technologies including electric vehicles, ADAS, and autonomous driving systems.</p>
                    </div>
                </div>
                <a href="{{ route('about') }}" class="inline-flex items-center text-blue-600 font-medium mt-8 hover:text-blue-800 transition-colors duration-300">
                    Learn More About Our Automotive Expertise
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
            <h2 class="text-3xl font-bold text-center mb-16">Automotive Cable Solutions</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Product 1 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1504215680853-026ed2a45def?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" 
                             alt="Battery Management Cables" 
                             class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Battery Management Cables</h3>
                        <p class="text-gray-600 mb-4">High-performance cable assemblies for EV battery systems with enhanced shielding and temperature resistance.</p>
                        <a href="#" class="inline-flex items-center text-blue-600 font-medium hover:text-blue-800 transition-colors duration-300">
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
                        <img src="https://images.unsplash.com/photo-1547038577-da80abbc4f19?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" 
                             alt="Sensor & ADAS Cables" 
                             class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Sensor & ADAS Cables</h3>
                        <p class="text-gray-600 mb-4">Precision cable assemblies for advanced driver assistance systems and sensor networks with high-speed data transmission.</p>
                        <a href="#" class="inline-flex items-center text-blue-600 font-medium hover:text-blue-800 transition-colors duration-300">
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
                        <img src="https://images.unsplash.com/photo-1566055909643-a51b4271d7df?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" 
                             alt="Infotainment & Data Cables" 
                             class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Infotainment & Data Cables</h3>
                        <p class="text-gray-600 mb-4">High-speed data transfer cables for vehicle infotainment systems, digital dashboards, and connectivity solutions.</p>
                        <a href="#" class="inline-flex items-center text-blue-600 font-medium hover:text-blue-800 transition-colors duration-300">
                            View Details
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="{{ route('products.automotive') }}" class="btn bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-medium transition-colors duration-300">
                    View All Automotive Products
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
                    <h3 class="text-2xl font-semibold mb-6">Why Our Automotive Cable Solutions Excel</h3>
                    <p class="text-gray-600 mb-6">
                        Modern vehicles are increasingly complex, integrating advanced electronics, high-speed data networks, and sophisticated sensor systems. Our automotive cable solutions are specifically engineered to meet these evolving demands, providing reliable connectivity in the challenging automotive environment.
                    </p>
                    <p class="text-gray-600 mb-6">
                        We understand the stringent requirements of the automotive industry – from the need for compact, lightweight designs to the importance of long-term reliability in safety-critical systems. Our engineering team works closely with automotive OEMs and tier suppliers to develop cable assemblies that meet their exact specifications and performance requirements.
                    </p>
                    <p class="text-gray-600">
                        With our automotive cable solutions, you benefit from extensive experience, rigorous testing protocols, and a commitment to continuous innovation. We're helping vehicle manufacturers build the next generation of safer, smarter, and more efficient vehicles through reliable connectivity solutions.
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
                                <span class="font-medium">Temperature Resistance:</span> 
                                <p class="text-gray-600">Engineered to perform reliably in temperature extremes from -40°C to +150°C found in automotive applications.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-green-500 mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <div>
                                <span class="font-medium">Vibration & Shock Resistance:</span> 
                                <p class="text-gray-600">Constructed to withstand the constant vibration and mechanical shock experienced in vehicle environments.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-green-500 mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <div>
                                <span class="font-medium">Fluid & Chemical Resistance:</span> 
                                <p class="text-gray-600">Protected against exposure to automotive fluids including oils, fuels, coolants, and cleaning agents.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-green-500 mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <div>
                                <span class="font-medium">EMI/RFI Shielding:</span> 
                                <p class="text-gray-600">Advanced shielding designs for electromagnetic compatibility in sensitive automotive electronic systems.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-green-500 mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <div>
                                <span class="font-medium">High-Speed Data Transmission:</span> 
                                <p class="text-gray-600">Optimized designs for automotive protocols including CAN, LIN, FlexRay, MOST, and Automotive Ethernet.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Call to Action -->
    <section class="py-20 bg-gray-800 text-white" data-aos="fade-up">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">Partner with Us for Your Automotive Cable Needs</h2>
            <p class="text-xl mb-10 max-w-3xl mx-auto">Whether you're developing next-generation electric vehicles or enhancing traditional automotive systems, our team is ready to provide custom cable solutions that meet your exact requirements.</p>
            
            <div class="flex flex-col sm:flex-row justify-center items-center space-y-4 sm:space-y-0 sm:space-x-6">
                <a href="{{ route('contact') }}?inquiry=automotive" class="btn bg-white text-gray-800 hover:bg-gray-100 px-8 py-3 rounded-lg font-medium inline-flex items-center transition-colors duration-300">
                    Request an Automotive Solution
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