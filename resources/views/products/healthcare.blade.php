@extends('layouts.main')

@section('content')
    <!-- 1. Hero Section -->
    <section class="relative bg-gray-900 text-white overflow-hidden">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80" 
                 alt="Healthcare Background" 
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gray-900/70 mix-blend-multiply"></div>
        </div>
        
        <div class="w-full mx-auto px-4 py-32 relative z-10">
            <div class="max-w-full" data-aos="fade-up" data-aos-delay="100">
                <h1 class="text-5xl font-bold mb-6">Specialized Cable Solutions for Medical Applications</h1>
                <p class="text-xl mb-8">High-performance, medical-grade cable assemblies designed for reliability in critical healthcare environments.</p>
                <a href="#products" class="btn bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-medium inline-flex items-center transition-colors duration-300">
                    Explore Healthcare Solutions
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- 2. About the Niche -->
    <section class="py-20 bg-white" data-aos="fade-up">
        <div class="w-full mx-auto px-4">
            <div class="max-w-full mx-auto text-center mb-16">
                <h2 class="text-3xl font-bold mb-6">Why Choose Our Medical Cable Solutions</h2>
                <p class="text-lg text-gray-600 mb-8">
                    Paderteg specializes in developing custom cable solutions that meet the exacting standards of the healthcare industry. Our medical-grade cables are designed with patient safety and device reliability in mind, adhering to stringent regulatory requirements while delivering the performance needed for critical care equipment and diagnostic devices.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
                    <div class="p-6 border border-gray-100 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Medical Certifications</h3>
                        <p class="text-gray-600">ISO 9001:2015 and IATF16949:2016 certified manufacturing. In addition to meeting the stringent requirements of the automotive industry, we ensure full compliance with the specific standards, regulations, and expectations of our customers in the medical sector.</p>
                    </div>
                    <div class="p-6 border border-gray-100 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">More Coming Soon</h3>
                        <p class="text-gray-600">More coming soon...</p>
                    </div>
                    <div class="p-6 border border-gray-100 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.121 14.121L19 19m-7-7l7-7m-7 7l-2.879 2.879M12 12L9.121 9.121m0 5.758a3 3 0 10-4.243 4.243 3 3 0 004.243-4.243zm0-5.758a3 3 0 10-4.243-4.243 3 3 0 004.243 4.243z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">More Coming Soon</h3>
                        <p class="text-gray-600">More coming soon...</p>
                    </div>
                </div>
                <a href="{{ route('about') }}" class="inline-flex items-center text-blue-600 font-medium mt-8 hover:text-blue-800 transition-colors duration-300">
                    Learn More About Our Healthcare Expertise
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- 3. Product Showcase -->
    <section id="products" class="py-20 bg-gray-50" data-aos="fade-up">
        <div class="w-full mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-16">Healthcare Cable Solutions</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Product 1 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1583912268183-b34edf9b2c9d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" 
                             alt="Diagnostic Imaging Cables" 
                             class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Diagnostic Imaging Cables</h3>
                        <p class="text-gray-600 mb-4">High-performance cables for medical imaging equipment, including MRI, CT, X-ray, and ultrasound machines.</p>
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
                        <img src="https://images.unsplash.com/photo-1530026405186-ed1f139313f8?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" 
                             alt="Patient Monitoring Cables" 
                             class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Patient Monitoring Cables</h3>
                        <p class="text-gray-600 mb-4">Reliable cable assemblies for vital signs monitors, ECG/EKG equipment, and telemetry systems.</p>
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
                        <img src="https://images.unsplash.com/photo-1516549655169-df83a0774514?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" 
                             alt="Surgical Equipment Cables" 
                             class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Surgical Equipment Cables</h3>
                        <p class="text-gray-600 mb-4">Specialized cables for robotic surgery systems, electrosurgical units, and minimally invasive instruments.</p>
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
                <a href="{{ route('products.healthcare') }}" class="btn bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-medium transition-colors duration-300">
                    View All Healthcare Products
                </a>
            </div>
        </div>
    </section>

    <!-- 4. Benefits & Features Section -->
    <section class="py-20 bg-white" data-aos="fade-up">
        <div class="w-full mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-16">Benefits & Features</h2>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                <div>
                    <h3 class="text-2xl font-semibold mb-6">Why Our Healthcare Cable Solutions Stand Out</h3>
                    <p class="text-gray-600 mb-6">
                        In the healthcare industry, reliability is non-negotiable. Our medical cable assemblies are designed with this principle at their core, providing healthcare professionals with dependable connections for critical care equipment when they need it most.
                    </p>
                    <p class="text-gray-600 mb-6">
                        We understand the unique challenges faced in medical environments – from the need for biocompatibility and sterilization resistance to electromagnetic interference protection in sensitive diagnostic equipment. Our solutions address these challenges head-on with specialized materials and construction techniques.
                    </p>
                    <p class="text-gray-600">
                        Every cable we produce undergoes rigorous testing to ensure compliance with healthcare industry standards, offering peace of mind to medical device manufacturers and healthcare providers alike. Our commitment to quality means our cables perform reliably in scenarios where failure is not an option.
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
                                <span class="font-medium">Biocompatibility:</span> 
                                <p class="text-gray-600">Materials compliant with ISO 10993 for applications requiring patient contact.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-green-500 mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <div>
                                <span class="font-medium">EMI/RFI Shielding:</span> 
                                <p class="text-gray-600">Advanced shielding techniques for protection against electromagnetic interference in sensitive medical equipment.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-green-500 mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <div>
                                <span class="font-medium">Sterilization Compatibility:</span> 
                                <p class="text-gray-600">Engineered to withstand multiple sterilization cycles using various methods, including autoclave, EtO, and gamma radiation.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-green-500 mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <div>
                                <span class="font-medium">Flexibility & Durability:</span> 
                                <p class="text-gray-600">High flex-life cables that maintain integrity through repeated bending and movement in dynamic medical applications.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-green-500 mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <div>
                                <span class="font-medium">Regulatory Compliance:</span> 
                                <p class="text-gray-600">Products developed in accordance with ISO 13485, FDA, and MDR requirements for medical devices.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Call to Action -->
    <section class="py-20 bg-gray-800 text-white" data-aos="fade-up">
        <div class="w-full mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">Partner with Us for Your Medical Cable Needs</h2>
            <p class="text-xl mb-10 max-w-3xl mx-auto">Whether you're developing new medical equipment or seeking to improve existing devices, our team is ready to provide custom cable solutions that meet the highest standards of quality and reliability.</p>
            
            <div class="flex flex-col sm:flex-row justify-center items-center space-y-4 sm:space-y-0 sm:space-x-6">
                <a href="{{ route('contact') }}?inquiry=healthcare" class="btn bg-white text-gray-800 hover:bg-gray-100 px-8 py-3 rounded-lg font-medium inline-flex items-center transition-colors duration-300">
                    Request a Healthcare Solution
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