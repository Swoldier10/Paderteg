@extends('layouts.main')

@section('title', $category->name)

@section('content')
    <!-- Hero Section -->
    <div class="bg-blue-800 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="md:w-2/3">
                <h1 class="text-4xl font-bold mb-6">{{ $category->name }}</h1>
                @if($category->description)
                <p class="text-xl text-blue-100">
                    {{ $category->description }}
                </p>
                @endif
            </div>
        </div>
    </div>

    <!-- Products List -->
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
                        <a href="{{ route('products.index') }}" class="ml-2 text-gray-500 hover:text-gray-700">{{ __('Products') }}</a>
                    </li>
                    <li class="flex items-center">
                        <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-2 text-gray-900 font-medium">{{ $category->name }}</span>
                    </li>
                </ol>
            </nav>
            
            @if($category->products->count() > 0)
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                    @foreach($category->products as $product)
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition">
                        <img 
                            src="{{ $product->image ? asset('storage/' . $product->image) : asset('images/product-placeholder.jpg') }}" 
                            alt="{{ $product->name }}" 
                            class="w-full h-48 object-cover"
                            onerror="this.src='https://via.placeholder.com/600x400?text=Product+Image'"
                        >
                        <div class="p-6">
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ $product->name }}</h3>
                            @if($product->description)
                            <p class="text-gray-600 mb-4 line-clamp-3">{{ $product->description }}</p>
                            @endif
                            <a href="{{ route('products.show', ['category' => $category->slug, 'product' => $product->id]) }}" 
                               class="text-blue-600 hover:text-blue-800 font-medium flex items-center">
                                {{ __('Learn More') }}
                                <svg class="ml-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-12">
                    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    <h3 class="mt-2 text-lg font-medium text-gray-900">{{ __('No products found') }}</h3>
                    <p class="mt-1 text-gray-500">{{ __('There are no products available in this category yet.') }}</p>
                    <div class="mt-6">
                        <a href="{{ route('products.index') }}" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700">
                            {{ __('View All Products') }}
                        </a>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection 