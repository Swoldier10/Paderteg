@extends('layouts.main')

@section('title', $certificate->name)

@section('content')
    <!-- Hero Section -->
    <div class="bg-blue-800 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="md:w-2/3">
                <h1 class="text-4xl font-bold mb-6">{{ $certificate->name }}</h1>
                <p class="text-xl text-blue-100">
                    {{ __('Certificate Details') }}
                </p>
            </div>
        </div>
    </div>

    <!-- Certificate Details -->
    <div class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Breadcrumbs -->
            <nav class="mb-8 text-sm" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2">
                    <li>
                        <a href="{{ route('home') }}" class="text-gray-500 hover:text-gray-700">{{ __('Home') }}</a>
                    </li>
                    <li class="flex items-center">
                        <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <a href="{{ route('certificates') }}" class="ml-2 text-gray-500 hover:text-gray-700">{{ __('Certificates') }}</a>
                    </li>
                    <li class="flex items-center">
                        <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-2 text-gray-900 font-medium">{{ $certificate->name }}</span>
                    </li>
                </ol>
            </nav>
            
            <div class="bg-white shadow-sm rounded-lg overflow-hidden border border-gray-200">
                <div class="p-8">
                    <div class="flex items-center justify-center mb-8 bg-blue-50 p-6 rounded-lg">
                        <svg class="h-24 w-24 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    
                    <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">{{ $certificate->name }}</h2>
                    
                    @if($certificate->description)
                        <div class="prose prose-blue max-w-none mb-8">
                            <p>{{ $certificate->description }}</p>
                        </div>
                    @endif
                    
                    @if($certificate->valid_until)
                        <div class="bg-gray-50 rounded-lg p-4 mb-8 text-center">
                            <p class="text-gray-700">
                                {{ __('Valid until') }}: <span class="font-semibold">{{ \Carbon\Carbon::parse($certificate->valid_until)->format('d.m.Y') }}</span>
                            </p>
                        </div>
                    @endif
                    
                    <div class="flex flex-col sm:flex-row justify-center gap-4 mt-8">
                        @if($certificate->url)
                            <a href="{{ $certificate->url }}" target="_blank" class="inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-blue-600 hover:bg-blue-700">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                                </svg>
                                {{ __('View Certificate Online') }}
                            </a>
                        @endif
                        
                        @if($certificate->file_path)
                            <a href="{{ asset('storage/' . $certificate->file_path) }}" download class="inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-green-600 hover:bg-green-700">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                                {{ __('Download PDF') }}
                            </a>
                        @endif
                    </div>
                </div>
            </div>
            
            <!-- Back to Certificates -->
            <div class="mt-8 text-center">
                <a href="{{ route('certificates') }}" class="inline-flex items-center text-blue-600 hover:text-blue-800">
                    <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                    </svg>
                    {{ __('Back to All Certificates') }}
                </a>
            </div>
        </div>
    </div>
@endsection 