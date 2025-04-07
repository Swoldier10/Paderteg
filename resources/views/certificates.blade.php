@extends('layouts.main')

@section('title', __('Certificates'))

@section('content')
    <!-- Hero Section -->
    <div class="bg-blue-800 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="md:w-2/3">
                <h1 class="text-4xl font-bold mb-6">{{ __('Our Certificates') }}</h1>
                <p class="text-xl text-blue-100">
                    {{ __('Quality assurance and compliance documentation showcasing our commitment to excellence and industry standards.') }}
                </p>
            </div>
        </div>
    </div>

    <!-- Certificates Section -->
    <div class="bg-white py-16" x-data="{ activeTab: 'axente', showModal: false, currentCertificate: null }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="prose prose-blue max-w-none mb-12">
                <p>{{ __('At PaderTeG, we adhere to the highest standards of quality and compliance in our manufacturing processes. Our certifications demonstrate our commitment to excellence, safety, and environmental responsibility.') }}</p>
                <p>{{ __('Below you will find our current certificates for each of our locations. Each document can be viewed online or downloaded as a PDF for your reference.') }}</p>
            </div>

            <!-- Hero Section (Introduction) -->
            <div class="bg-blue-50 rounded-xl p-8 mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Certificates & Accreditations</h2>
                <p class="text-lg text-gray-700 mb-6">
                    Explore our certifications for our facilities located in Axente Sever and Copșa Mică, showcasing our
                    dedication to industry standards and quality management systems.
                </p>
                <div class="flex items-center text-blue-600">
                    <svg class="w-6 h-6 mr-2 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                    <span class="font-medium">Scroll Down to View Certificates</span>
                </div>
            </div>

            <!-- Location Selection Tabs -->
            <div class="mb-12">
                <!-- Tabs -->
                <div class="border-b border-gray-200">
                    <nav class="flex -mb-px space-x-8" aria-label="Locations">
                        <button
                            @click="activeTab = 'axente'"
                            :class="activeTab === 'axente' ? 'border-blue-500 text-blue-600' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                            class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm sm:text-base transition-colors duration-200"
                        >
                            Axente Sever Location
                        </button>
                        <button
                            @click="activeTab = 'copsa'"
                            :class="activeTab === 'copsa' ? 'border-blue-500 text-blue-600' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                            class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm sm:text-base transition-colors duration-200"
                        >
                            Copșa Mică Location
                        </button>
                    </nav>
                </div>

                <!-- Axente Sever Certificates -->
                <div x-show="activeTab === 'axente'" class="mt-8">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">Certificates for Axente Sever Location</h3>
                    <p class="text-gray-600 mb-8">Our Axente Sever facility holds these key certifications demonstrating
                        our commitment to quality and industry standards.</p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- ISO 9001:2015 Certificate -->
                        <div
                            class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 cursor-pointer"
                            @click="showModal = true; currentCertificate = {
                                title: 'ISO 9001:2015',
                                image: '{{ asset('images/axente_sever_9001.png') }}',
                                description: 'Quality Management System certification ensuring consistent quality in all our processes.',
                                validUntil: '31.12.2025',
                                download: '{{ route('pdf.download', [
                                            'filename' => 'ISO_9001_Axente_Sever'
                                        ]) }}'
                             }">
                            <div class="p-6">
                                <div class="flex items-center justify-center mb-4 bg-blue-50 rounded-lg p-4">
                                    <img src="{{ asset('images/axente_sever_9001.png') }}" alt="ISO 9001:2015"
                                         class="h-20">
                                </div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-2">ISO 9001:2015</h3>
                                <p class="text-gray-600 mb-4">Quality Management System certification ensuring
                                    consistent quality in all our processes.</p>

                                <div class="mt-6 pt-4 border-t border-gray-100 flex justify-between items-center">
                                    <p class="text-sm text-gray-500">Valid until: 20.06.2027</p>
                                    <a href="{{ route('pdf.download', [
                                            'filename' => 'ISO_9001_Axente_Sever'
                                        ]) }}"
                                       class="text-blue-600 hover:text-blue-800 flex items-center" @click.stop>
                                        <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                  d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        Download
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- IATF 16949:2016 Certificate -->
                        <div
                            class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 cursor-pointer"
                            @click="showModal = true; currentCertificate = {
                                title: 'IATF 16949:2016',
                                image: '{{ asset('images/axente_sever_IATF_16949.png') }}',
                                description: 'Automotive Quality Management System certification for automotive production and service parts.',
                                validUntil: '15.09.2024',
                                download: '{{ route('pdf.download', [
                                            'filename' => 'IATF_16949_Axente_Sever'
                                        ]) }}'
                             }">
                            <div class="p-6">
                                <div class="flex items-center justify-center mb-4 bg-blue-50 rounded-lg p-4">
                                    <img src="{{ asset('images/axente_sever_IATF_16949.png') }}" alt="IATF 16949:2016"
                                         class="h-20">
                                </div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-2">IATF 16949:2016</h3>
                                <p class="text-gray-600 mb-4">Automotive Quality Management System certification for
                                    automotive production and service parts.</p>

                                <div class="mt-6 pt-4 border-t border-gray-100 flex justify-between items-center">
                                    <p class="text-sm text-gray-500">Valid until: 27.07.2027</p>
                                    <a href="{{ route('pdf.download', [
                                            'filename' => 'IATF_16949_Axente_Sever'
                                        ]) }}"
                                       class="text-blue-600 hover:text-blue-800 flex items-center" @click.stop>
                                        <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                  d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        Download
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Copsa Mica Certificates -->
                <div x-show="activeTab === 'copsa'" class="mt-8">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">Certificates for Copșa Mică Location</h3>
                    <p class="text-gray-600 mb-8">Our Copșa Mică facility holds these key certifications demonstrating
                        our commitment to quality, safety, and environmental responsibility.</p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- ISO 9001:2015 Certificate -->
                        <div
                            class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 cursor-pointer"
                            @click="showModal = true; currentCertificate = {
                                title: 'ISO 9001:2015',
                                image: '{{ asset('images/copsa_mica_iso_9001.png') }}',
                                description: 'Quality Management System certification ensuring consistent quality in all our processes.',
                                validUntil: '31.12.2025',
                                download: '{{ route('pdf.download', [
                                            'filename' => 'ISO_9001_Copsa_Mica'
                                        ]) }}'
                             }">
                            <div class="p-6">
                                <div class="flex items-center justify-center mb-4 bg-blue-50 rounded-lg p-4">
                                    <img src="{{ asset('images/copsa_mica_iso_9001.png') }}" alt="ISO 9001:2015"
                                         class="h-20">
                                </div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-2">ISO 9001:2015</h3>
                                <p class="text-gray-600 mb-4">Quality Management System certification ensuring
                                    consistent quality in all our processes.</p>

                                <div class="mt-6 pt-4 border-t border-gray-100 flex justify-between items-center">
                                    <p class="text-sm text-gray-500">Valid until: 20.06.2027</p>
                                    <a href="{{ route('pdf.download', [
                                            'filename' => 'ISO_9001_Copsa_Mica'
                                        ]) }}"
                                       class="text-blue-600 hover:text-blue-800 flex items-center" @click.stop>
                                        <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                  d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        Download
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- IATF 16949:2016 Certificate -->
                        <div
                            class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 cursor-pointer"
                            @click="showModal = true; currentCertificate = {
                                title: 'IATF 16949:2016',
                                image: '{{ asset('images/copsa_mica_iatf_16949.png') }}',
                                description: 'Automotive Quality Management System certification for automotive production and service parts.',
                                validUntil: '20.06.2027',
                                download: '{{ route('pdf.download', [
                                            'filename' => 'IATF_16949_Copsa_Mica'
                                        ]) }}'
                             }">
                            <div class="p-6">
                                <div class="flex items-center justify-center mb-4 bg-blue-50 rounded-lg p-4">
                                    <img src="{{ asset('images/copsa_mica_iatf_16949.png') }}" alt="IATF 16949:2016"
                                         class="h-20">
                                </div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-2">IATF 16949:2016</h3>
                                <p class="text-gray-600 mb-4">Automotive Quality Management System certification for
                                    automotive production and service parts.</p>

                                <div class="mt-6 pt-4 border-t border-gray-100 flex justify-between items-center">
                                    <p class="text-sm text-gray-500">Valid until: 20.06.2027</p>
                                    <a href="{{ route('pdf.download', [
                                            'filename' => 'IATF_16949_Copsa_Mica'
                                        ]) }}"
                                       class="text-blue-600 hover:text-blue-800 flex items-center" @click.stop>
                                        <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                  d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        Download
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- ISO 45001:2018 Certificate -->
                        <div
                            class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 cursor-pointer"
                            @click="showModal = true; currentCertificate = {
                                title: 'ISO 45001:2018',
                                image: '{{ asset('images/copsa_mica_iso_45001.png') }}',
                                description: 'Occupational Health and Safety Management System certification ensuring workplace safety.',
                                validUntil: '19.09.2025',
                                download: '{{ route('pdf.download', [
                                            'filename' => 'ISO_45001_Copsa_Mica'
                                        ]) }}'
                             }">
                            <div class="p-6">
                                <div class="flex items-center justify-center mb-4 bg-blue-50 rounded-lg p-4">
                                    <img src="{{ asset('images/copsa_mica_iso_45001.png') }}" alt="ISO 45001:2018"
                                         class="h-20">
                                </div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-2">ISO 45001:2018</h3>
                                <p class="text-gray-600 mb-4">Occupational Health and Safety Management System
                                    certification ensuring workplace safety.</p>

                                <div class="mt-6 pt-4 border-t border-gray-100 flex justify-between items-center">
                                    <p class="text-sm text-gray-500">Valid until: 19.09.2025</p>
                                    <a href="{{ route('pdf.download', [
                                            'filename' => 'ISO_45001_Copsa_Mica'
                                        ]) }}"
                                       class="text-blue-600 hover:text-blue-800 flex items-center" @click.stop>
                                        <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                  d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        Download
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- ISO 14001:2015 Certificate -->
                        <div
                            class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 cursor-pointer"
                            @click="showModal = true; currentCertificate = {
                                title: 'ISO 14001:2015',
                                image: '{{ asset('images/copsa_mica_iso_14001.png') }}',
                                description: 'Environmental Management System certification demonstrating our commitment to environmental responsibility.',
                                validUntil: '18.08.2027',
                                download: '{{ route('pdf.download', [
                                            'filename' => 'ISO_14001_Copsa_Mica'
                                        ]) }}'
                             }">
                            <div class="p-6">
                                <div class="flex items-center justify-center mb-4 bg-blue-50 rounded-lg p-4">
                                    <img src="{{ asset('images/copsa_mica_iso_14001.png') }}" alt="ISO 14001:2015"
                                         class="h-20">
                                </div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-2">ISO 14001:2015</h3>
                                <p class="text-gray-600 mb-4">Environmental Management System certification
                                    demonstrating our commitment to environmental responsibility.</p>

                                <div class="mt-6 pt-4 border-t border-gray-100 flex justify-between items-center">
                                    <p class="text-sm text-gray-500">Valid until: 18.08.2027</p>
                                    <a href="{{ route('pdf.download', [
                                            'filename' => 'ISO_14001_Copsa_Mica'
                                        ]) }}"
                                       class="text-blue-600 hover:text-blue-800 flex items-center" @click.stop>
                                        <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                  d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        Download
                                    </a>
                                </div>
                            </div>
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

                    <div
                        class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-3xl sm:w-full"
                        @click.away="showModal = false">
                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            <div class="sm:flex sm:items-start">
                                <div class="mt-3 text-center sm:mt-0 sm:text-left w-full">
                                    <h3 class="text-2xl leading-6 font-semibold text-gray-900 mb-4"
                                        x-text="currentCertificate?.title"></h3>
                                    <div class="mt-4 flex justify-center">
                                        <img :src="currentCertificate?.image" :alt="currentCertificate?.title"
                                             class="h-64 object-contain">
                                    </div>
                                    <p class="mt-4 text-gray-600" x-text="currentCertificate?.description"></p>
                                    <p class="mt-2 text-sm text-gray-500">Valid until: <span
                                            x-text="currentCertificate?.validUntil"></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <button type="button"
                                    class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm"
                                    @click="showModal = false">
                                Close
                            </button>
                            <a :href="currentCertificate?.download"
                               class="mt-3 sm:mt-0 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
                                Download Certificate
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact for More Information -->
            <div class="mt-16 bg-gray-50 rounded-lg p-8">
                <div class="md:flex md:items-center md:justify-between">
                    <div class="md:w-2/3">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">{{ __('Need More Information?') }}</h3>
                        <p class="text-gray-600">
                            {{ __('If you require specific certification information or have questions about our compliance with industry standards, please don\'t hesitate to contact our quality assurance team.') }}
                        </p>
                    </div>
                    <div class="mt-6 md:mt-0">
                        <a href="{{ route('contact') }}"
                           class="inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-blue-600 hover:bg-blue-700">
                            {{ __('Contact Us') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
