@extends('layouts.main')

@section('title', 'Contact Us')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-80 md:h-96 flex items-center overflow-hidden" id="hero-section">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-900/90 to-blue-800/80 mix-blend-multiply"></div>
            <div class="absolute inset-0 bg-[url('/images/contact-hero.jpg')] bg-cover bg-center"></div>
        </div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 text-white">
            <div class="hero-content opacity-0 transform translate-y-8 transition-all duration-1000 ease-out">
                <h1 class="text-4xl md:text-5xl font-bold mb-6 tracking-tight">
                    Get in Touch with PaderTeG
                </h1>
                <p class="text-xl text-blue-100 mb-6 max-w-3xl">
                    We're here to assist you with all your cable assembly needs. Contact us today for quotes, consultations, or more information.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Information & Form Section -->
    <section class="py-24 bg-white scroll-mt-16" id="contact-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-20">
                <!-- Contact Information -->
                <div class="fade-in-section">
                    <span class="inline-block px-3 py-1 text-sm font-semibold bg-blue-100 text-blue-800 rounded-full mb-6">Reach Us</span>
                    <h2 class="text-3xl font-bold text-gray-900 mb-8">Contact Information</h2>

                    <!-- Headquarters -->
                    <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 mb-10 border border-gray-100">
                        <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Headquarters</h3>
                        <address class="not-italic text-gray-600 space-y-4">
                            <div class="flex items-start">
                                <svg class="w-6 h-6 text-blue-600 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <p>Copșa Mică, Sibiu County, 557126, Romania</p>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-6 h-6 text-blue-600 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                <a href="tel:+40123456789" class="text-gray-600 hover:text-blue-600 transition-colors">+40 123 456 789</a>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-6 h-6 text-blue-600 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                <a href="mailto:contact@paderteg.com" class="text-gray-600 hover:text-blue-600 transition-colors">contact@paderteg.com</a>
                            </div>
                        </address>
                    </div>

                    <!-- Working Hours -->
                    <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 mb-10 border border-gray-100">
                        <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Working Hours</h3>
                        <div class="space-y-4 text-gray-600">
                            <div class="flex justify-between items-center pb-2 border-b border-gray-100">
                                <span>Monday - Friday:</span>
                                <span class="font-medium">8:00 AM - 5:00 PM</span>
                            </div>
                            <div class="flex justify-between items-center pb-2 border-b border-gray-100">
                                <span>Saturday:</span>
                                <span class="font-medium">Closed</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span>Sunday:</span>
                                <span class="font-medium">Closed</span>
                            </div>
                        </div>
                    </div>

                    <!-- Map -->
                    <div class="rounded-2xl overflow-hidden shadow-lg fade-in-section">
                        <div class="aspect-w-16 aspect-h-9 relative">
                            <iframe 
                                class="w-full h-full"
                                style="border:0" 
                                loading="lazy" 
                                allowfullscreen 
                                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8&q=Copsa+Mica,Romania">
                            </iframe>
                        </div>
                        <div class="p-4 bg-white">
                            <a 
                                href="https://www.google.com/maps/dir//Copsa+Mica,Romania" 
                                target="_blank" 
                                class="text-blue-600 hover:text-blue-800 font-medium flex items-center justify-center transition-colors">
                                Get Directions
                                <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H3a1 1 0 110-2h9.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="fade-in-section">
                    <span class="inline-block px-3 py-1 text-sm font-semibold bg-blue-100 text-blue-800 rounded-full mb-6">Send Message</span>
                    <h2 class="text-3xl font-bold text-gray-900 mb-8">Get in Touch</h2>

                    @if(session('success'))
                        <div class="bg-green-50 border-l-4 border-green-500 p-5 rounded-lg mb-8" role="alert">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-green-700">{{ session('success') }}</p>
                                </div>
                            </div>
                        </div>
                    @endif

                    <form action="{{ route('contact.send') }}" method="POST" class="space-y-8 bg-white p-8 rounded-2xl shadow-sm border border-gray-100">
                        @csrf
                        
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name <span class="text-red-500">*</span></label>
                                <input 
                                    type="text" 
                                    name="name" 
                                    id="name" 
                                    required 
                                    class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 @error('name') border-red-500 @enderror" 
                                    value="{{ old('name') }}"
                                >
                                @error('name')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email <span class="text-red-500">*</span></label>
                                <input 
                                    type="email" 
                                    name="email" 
                                    id="email" 
                                    required 
                                    class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 @error('email') border-red-500 @enderror" 
                                    value="{{ old('email') }}"
                                >
                                @error('email')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                                <input 
                                    type="tel" 
                                    name="phone" 
                                    id="phone" 
                                    class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 @error('phone') border-red-500 @enderror" 
                                    value="{{ old('phone') }}"
                                >
                                @error('phone')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div>
                                <label for="company" class="block text-sm font-medium text-gray-700 mb-1">Company Name</label>
                                <input 
                                    type="text" 
                                    name="company" 
                                    id="company" 
                                    class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 @error('company') border-red-500 @enderror" 
                                    value="{{ old('company') }}"
                                >
                                @error('company')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject <span class="text-red-500">*</span></label>
                            <select 
                                name="subject" 
                                id="subject" 
                                required 
                                class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 @error('subject') border-red-500 @enderror"
                            >
                                <option value="">Select an option</option>
                                <option value="General Inquiry" {{ old('subject') == 'General Inquiry' ? 'selected' : '' }}>General Inquiry</option>
                                <option value="Request a Quote" {{ old('subject') == 'Request a Quote' ? 'selected' : '' }}>Request a Quote</option>
                                <option value="Technical Support" {{ old('subject') == 'Technical Support' ? 'selected' : '' }}>Technical Support</option>
                                <option value="Partnership" {{ old('subject') == 'Partnership' ? 'selected' : '' }}>Partnership</option>
                            </select>
                            @error('subject')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message <span class="text-red-500">*</span></label>
                            <textarea 
                                name="message" 
                                id="message" 
                                rows="5" 
                                required 
                                class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 @error('message') border-red-500 @enderror"
                            >{{ old('message') }}</textarea>
                            @error('message')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div>
                            <label for="attachment" class="block text-sm font-medium text-gray-700 mb-1">Attachment (Optional)</label>
                            <input 
                                type="file" 
                                name="attachment" 
                                id="attachment" 
                                class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-medium file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100"
                            >
                            <p class="mt-1 text-sm text-gray-500">Upload specifications or designs (Max. 10MB)</p>
                            @error('attachment')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div>
                            <button type="submit" class="inline-flex items-center justify-center py-3 px-6 border border-transparent rounded-lg shadow-sm text-base font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
                                Send Message
                                <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H3a1 1 0 110-2h9.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-blue-900 text-white scroll-mt-16" id="cta-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto fade-in-section">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Need a Custom Cable Assembly Solution?</h2>
                <p class="text-xl text-blue-100 mb-10">
                    Our team specializes in creating tailored cable solutions to meet your unique requirements. We'll work closely with you to develop the perfect solution for your needs.
                </p>
                <a href="#contact-section" class="inline-block px-8 py-4 bg-white text-blue-900 rounded-full font-medium transition-all hover:bg-blue-50 hover:shadow-lg">
                    Contact Us Now
                </a>
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