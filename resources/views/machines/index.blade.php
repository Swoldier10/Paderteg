@extends('layouts.main')

@section('title', 'Our Machines')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-64 flex items-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-900/90 to-blue-800/80 mix-blend-multiply"></div>
            <div class="absolute inset-0 bg-[url('/images/machines-hero.jpg')] bg-cover bg-center"></div>
        </div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 text-white">
            <div class="hero-content">
                <h1 class="text-4xl md:text-5xl font-bold mb-6 tracking-tight">
                    Our Machines
                </h1>
                <p class="text-xl text-blue-100 mb-6 max-w-3xl">
                    Discover our state-of-the-art manufacturing equipment and capabilities.
                </p>
            </div>
        </div>
    </section>

    <!-- Machines Grid -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Machines Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" x-data="{ showVideoModal: false, currentVideo: '' }">
                <!-- Machine Card 1 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 group">
                    <div class="aspect-w-16 aspect-h-9 overflow-hidden">
                        <img src="{{ asset('images/machines/machine-1.jpg') }}" alt="Wire Cutting Machine" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4 group-hover:text-blue-600 transition-colors duration-200">Wire Cutting Machine</h3>
                        <p class="text-gray-600 leading-relaxed mb-6">High-precision wire cutting machine for accurate cable length measurements and cutting.</p>
                        <button @click="showVideoModal = true; currentVideo = 'https://www.youtube.com/embed/example1'" class="w-full px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-200 flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            View Video
                        </button>
                    </div>
                </div>

                <!-- Machine Card 2 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 group">
                    <div class="aspect-w-16 aspect-h-9 overflow-hidden">
                        <img src="{{ asset('images/machines/machine-2.jpg') }}" alt="Crimping Machine" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4 group-hover:text-blue-600 transition-colors duration-200">Crimping Machine</h3>
                        <p class="text-gray-600 leading-relaxed mb-6">Automated crimping machine for secure and consistent terminal connections.</p>
                        <button @click="showVideoModal = true; currentVideo = 'https://www.youtube.com/embed/example2'" class="w-full px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-200 flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            View Video
                        </button>
                    </div>
                </div>

                <!-- Machine Card 3 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 group">
                    <div class="aspect-w-16 aspect-h-9 overflow-hidden">
                        <img src="{{ asset('images/machines/machine-3.jpg') }}" alt="Testing Equipment" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4 group-hover:text-blue-600 transition-colors duration-200">Testing Equipment</h3>
                        <p class="text-gray-600 leading-relaxed mb-6">Advanced testing equipment for quality control and performance verification.</p>
                        <button @click="showVideoModal = true; currentVideo = 'https://www.youtube.com/embed/example3'" class="w-full px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-200 flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            View Video
                        </button>
                    </div>
                </div>

                <!-- Machine Card 4 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 group">
                    <div class="aspect-w-16 aspect-h-9 overflow-hidden">
                        <img src="{{ asset('images/machines/machine-4.jpg') }}" alt="Stripping Machine" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4 group-hover:text-blue-600 transition-colors duration-200">Stripping Machine</h3>
                        <p class="text-gray-600 leading-relaxed mb-6">Precision stripping machine for accurate insulation removal and preparation.</p>
                        <button @click="showVideoModal = true; currentVideo = 'https://www.youtube.com/embed/example4'" class="w-full px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-200 flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            View Video
                        </button>
                    </div>
                </div>

                <!-- Machine Card 5 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 group">
                    <div class="aspect-w-16 aspect-h-9 overflow-hidden">
                        <img src="{{ asset('images/machines/machine-5.jpg') }}" alt="Twisting Machine" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4 group-hover:text-blue-600 transition-colors duration-200">Twisting Machine</h3>
                        <p class="text-gray-600 leading-relaxed mb-6">High-speed twisting machine for creating twisted pair cables with consistent quality.</p>
                        <button @click="showVideoModal = true; currentVideo = 'https://www.youtube.com/embed/example5'" class="w-full px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-200 flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            View Video
                        </button>
                    </div>
                </div>

                <!-- Machine Card 6 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 group">
                    <div class="aspect-w-16 aspect-h-9 overflow-hidden">
                        <img src="{{ asset('images/machines/machine-6.jpg') }}" alt="Extrusion Machine" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4 group-hover:text-blue-600 transition-colors duration-200">Extrusion Machine</h3>
                        <p class="text-gray-600 leading-relaxed mb-6">Advanced extrusion machine for cable insulation and jacketing with precise control.</p>
                        <button @click="showVideoModal = true; currentVideo = 'https://www.youtube.com/embed/example6'" class="w-full px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-200 flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            View Video
                        </button>
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

    <!-- CTA Section -->
    <section class="py-20 bg-blue-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="md:flex md:items-center md:justify-between">
                <div class="md:w-2/3 mb-8 md:mb-0">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Interested in Our Capabilities?</h2>
                    <p class="text-xl text-blue-100">
                        Contact our team to learn more about our manufacturing capabilities and equipment.
                    </p>
                </div>
                <div class="md:w-1/3 text-center md:text-right">
                    <a href="{{ route('contact') }}?subject=machines" class="inline-block px-8 py-4 bg-white text-blue-900 rounded-full font-medium transition-all hover:bg-blue-50 hover:shadow-lg">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection 