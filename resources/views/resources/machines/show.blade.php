@extends('layouts.main')

@section('title', $machine->name)

@section('content')
    <!-- Hero Section -->
    <div class="bg-blue-800 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="md:w-2/3">
                <h1 class="text-4xl font-bold mb-6">{{ $machine->name }}</h1>
                <p class="text-xl text-blue-100">
                    {{ $machine->category ?? __('Manufacturing Equipment') }}
                </p>
            </div>
        </div>
    </div>

    <!-- Machine Details -->
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
                        <a href="{{ route('machines') }}" class="ml-2 text-gray-500 hover:text-gray-700">{{ __('Machinery') }}</a>
                    </li>
                    <li class="flex items-center">
                        <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-2 text-gray-900 font-medium">{{ $machine->name }}</span>
                    </li>
                </ol>
            </nav>
            
            <div class="bg-white shadow-sm rounded-lg overflow-hidden border border-gray-200">
                <div class="md:flex">
                    <div class="md:flex-shrink-0 md:w-1/2">
                        <img 
                            src="{{ $machine->image ? asset('storage/' . $machine->image) : asset('images/machine-placeholder.jpg') }}" 
                            alt="{{ $machine->name }}" 
                            class="h-64 w-full object-cover md:h-full"
                            onerror="this.src='https://via.placeholder.com/800x600?text=Machine+Image'"
                        >
                    </div>
                    <div class="p-8 md:w-1/2">
                        <div class="uppercase tracking-wide text-sm text-blue-600 font-semibold">
                            {{ $machine->category ?? __('Manufacturing Equipment') }}
                        </div>
                        <h2 class="mt-2 text-2xl font-bold text-gray-900 leading-tight">{{ $machine->name }}</h2>
                        
                        @if($machine->description)
                            <div class="mt-4 text-gray-600 prose prose-blue max-w-none">
                                <p>{{ $machine->description }}</p>
                            </div>
                        @endif
                        
                        @if($machine->specifications && is_array($machine->specifications) && count($machine->specifications) > 0)
                            <div class="mt-8">
                                <h3 class="text-lg font-semibold text-gray-900 mb-4">{{ __('Technical Specifications') }}</h3>
                                <div class="bg-gray-50 rounded-lg p-4">
                                    <dl class="divide-y divide-gray-200">
                                        @foreach($machine->specifications as $key => $value)
                                            <div class="py-3 grid grid-cols-3 gap-4">
                                                <dt class="text-sm font-medium text-gray-500">{{ $key }}</dt>
                                                <dd class="text-sm text-gray-900 col-span-2">{{ $value }}</dd>
                                            </div>
                                        @endforeach
                                    </dl>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            
            @if($machine->capabilities && is_array($machine->capabilities) && count($machine->capabilities) > 0)
                <div class="mt-12">
                    <h3 class="text-xl font-bold text-gray-900 mb-6">{{ __('Capabilities') }}</h3>
                    
                    <div class="bg-white shadow-sm rounded-lg overflow-hidden border border-gray-200">
                        <div class="p-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                @foreach($machine->capabilities as $capability)
                                    <div class="flex items-start">
                                        <div class="flex-shrink-0">
                                            <svg class="h-6 w-6 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <p class="ml-3 text-base text-gray-700">{{ $capability }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            
            <!-- Related Products (if appropriate) -->
            {{-- If you want to display related products, you can add a section here --}}
            
            <!-- Back to Machines -->
            <div class="mt-8 text-center">
                <a href="{{ route('machines') }}" class="inline-flex items-center text-blue-600 hover:text-blue-800">
                    <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                    </svg>
                    {{ __('Back to All Machinery') }}
                </a>
            </div>
        </div>
    </div>
@endsection 