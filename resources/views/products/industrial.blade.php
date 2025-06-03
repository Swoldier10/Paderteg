@extends('layouts.main')

@section('content')
    <!-- 1. Hero Section -->
    <section class="relative bg-gray-900 text-white overflow-hidden">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80" 
                 alt="Industrial Background" 
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gray-900/70 mix-blend-multiply"></div>
        </div>
        
        <div class="container mx-auto px-4 py-32 relative z-10">
            <div class="max-w-2xl" data-aos="fade-up" data-aos-delay="100">
                <h1 class="text-5xl font-bold mb-6">Robust Cable Solutions for Industrial Applications</h1>
                <p class="text-xl mb-8">Durable, high-performance cable assemblies designed to withstand the harsh conditions of industrial environments.</p>
                <a href="#products" class="btn bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-medium inline-flex items-center transition-colors duration-300">
                    Explore Industrial Solutions
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
                <h2 class="text-3xl font-bold mb-6">Why Choose Us for Industrial Cable Solutions</h2>
                <p class="text-lg text-gray-600 mb-8">
                    For over 15 years, Paderteg has been delivering rugged cable solutions for demanding industrial environments. Our industrial cable assemblies are engineered to withstand extreme conditions, including high temperatures, chemical exposure, and constant movement, ensuring uninterrupted operations in your critical systems.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
                    <div class="p-6 border border-gray-100 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Global Manufacturing Standards</h3>
                        <p class="text-gray-600">ISO 9001 certified production with rigorous quality control for industrial compliance.</p>
                    </div>
                    <div class="p-6 border border-gray-100 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Enhanced Durability</h3>
                        <p class="text-gray-600">Oil-resistant, flame-retardant materials with mechanical protection for harsh industrial environments.</p>
                    </div>
                    <div class="p-6 border border-gray-100 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Customization Capabilities</h3>
                        <p class="text-gray-600">Tailored cable assemblies for specific industrial machinery with specialized connectors and configurations.</p>
                    </div>
                </div>
                <a href="{{ route('about') }}" class="inline-flex items-center text-blue-600 font-medium mt-8 hover:text-blue-800 transition-colors duration-300">
                    Learn More About Our Expertise
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
            <h2 class="text-3xl font-bold text-center mb-16">Industrial Cable Solutions</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Product 1 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1581093588401-fbb62a02f120?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" 
                             alt="Industrial Control Cables" 
                             class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Industrial Control Cables</h3>
                        <p class="text-gray-600 mb-4">Robust cable assemblies for industrial control systems, designed for reliable signal transmission in noise-prone environments.</p>
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
                        <img src="https://images.unsplash.com/photo-1537462715879-360eeb61a0ad?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" 
                             alt="Power Distribution Cables" 
                             class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Power Distribution Cables</h3>
                        <p class="text-gray-600 mb-4">Heavy-duty power cables designed for industrial machinery with high current-carrying capacity and thermal resistance.</p>
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
                        <img src="https://images.unsplash.com/photo-1581092921461-7d72b27264ac?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" 
                             alt="Automation System Cables" 
                             class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Automation System Cables</h3>
                        <p class="text-gray-600 mb-4">Specialized cables for industrial automation systems, including Profibus, DeviceNet, and EtherCAT applications.</p>
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
                <a href="{{ route('products.industrial') }}" class="btn bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-medium transition-colors duration-300">
                    View All Industrial Products
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
                    <h3 class="text-2xl font-semibold mb-6">Why Our Industrial Cable Solutions Excel</h3>
                    <p class="text-gray-600 mb-6">
                        At Paderteg, we understand the demanding requirements of industrial environments. Our industrial cable assemblies are built to withstand harsh conditions, providing reliable performance in manufacturing plants, automation systems, and heavy machinery.
                    </p>
                    <p class="text-gray-600 mb-6">
                        We employ specialized materials and construction techniques that ensure our cables can resist oil, chemicals, abrasion, and extreme temperatures. Each assembly undergoes rigorous testing to verify mechanical strength, electrical performance, and long-term reliability.
                    </p>
                    <p class="text-gray-600">
                        Our engineering team works closely with industrial clients to develop custom solutions that address specific challenges in their operations, whether it's flexible cable tracks for moving machinery or specialized jacketing for chemical resistance.
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
                                <span class="font-medium">Oil & Chemical Resistance:</span> 
                                <p class="text-gray-600">Special jacketing materials that resist industrial fluids, oils, and chemical exposure.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-green-500 mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <div>
                                <span class="font-medium">Mechanical Protection:</span> 
                                <p class="text-gray-600">Reinforced construction for abrasion, crush, and cut resistance in industrial environments.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-green-500 mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <div>
                                <span class="font-medium">Flame Retardancy:</span> 
                                <p class="text-gray-600">UL-rated flame-retardant materials for safety in industrial applications.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-green-500 mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <div>
                                <span class="font-medium">Temperature Resistance:</span> 
                                <p class="text-gray-600">Capable of operating in temperatures from -50°C to +150°C depending on cable type.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-green-500 mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <div>
                                <span class="font-medium">Flexible Track Applications:</span> 
                                <p class="text-gray-600">Designed for continuous flexing in cable tracks with millions of flex cycles of reliability.</p>
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
            <h2 class="text-3xl font-bold mb-6">Ready to Optimize Your Industrial Systems?</h2>
            <p class="text-xl mb-10 max-w-3xl mx-auto">Contact our industrial cable specialists today to discuss your specific requirements and discover how our ruggedized solutions can improve reliability in your operations.</p>
            
            <div class="flex flex-col sm:flex-row justify-center items-center space-y-4 sm:space-y-0 sm:space-x-6">
                <a href="{{ route('contact') }}?inquiry=industrial" class="btn bg-white text-gray-800 hover:bg-gray-100 px-8 py-3 rounded-lg font-medium inline-flex items-center transition-colors duration-300">
                    Request a Quote for Industrial Solutions
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="tel:+40731375768" class="text-white hover:text-gray-200 font-medium inline-flex items-center transition-colors duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.502 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                    </svg>
                    +40 731 375 768
                </a>
            </div>
        </div>
    </section>
@endsection 