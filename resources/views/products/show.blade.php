@extends('layouts.main')

@section('title', $product->name)

@section('content')
    <!-- Hero Section -->
    <div class="bg-blue-800 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="md:w-2/3">
                <h1 class="text-4xl font-bold mb-6">{{ $product->name }}</h1>
                <p class="text-xl text-blue-100">
                    {{ __('Category') }}: <a href="{{ route('products.category', $category->slug) }}" class="text-white hover:text-blue-200 underline">{{ $category->name }}</a>
                </p>
            </div>
        </div>
    </div>

    <!-- Product Details -->
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
                        <a href="{{ route('products.category', $category->slug) }}" class="ml-2 text-gray-500 hover:text-gray-700">{{ $category->name }}</a>
                    </li>
                    <li class="flex items-center">
                        <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-2 text-gray-900 font-medium">{{ $product->name }}</span>
                    </li>
                </ol>
            </nav>
            
            <div class="grid md:grid-cols-2 gap-16">
                <!-- Product Image -->
                <div>
                    <div class="rounded-lg overflow-hidden shadow-md">
                        <img 
                            src="{{ $product->image ? asset('storage/' . $product->image) : asset('images/product-placeholder.jpg') }}" 
                            alt="{{ $product->name }}" 
                            class="w-full h-auto object-cover"
                            onerror="this.src='https://via.placeholder.com/800x600?text=Product+Image'"
                        >
                    </div>
                    
                    @if($product->brochure_path)
                    <div class="mt-6">
                        <a href="{{ asset('storage/' . $product->brochure_path) }}" target="_blank" class="inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-blue-600 hover:bg-blue-700">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                            {{ __('Download Product Brochure') }}
                        </a>
                    </div>
                    @endif
                </div>
                
                <!-- Product Information -->
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">{{ $product->name }}</h2>
                    
                    @if($product->description)
                    <div class="text-gray-600 mb-8 prose max-w-none">
                        <p>{{ $product->description }}</p>
                    </div>
                    @endif
                    
                    @if($product->specifications && is_array($product->specifications) && count($product->specifications) > 0)
                    <div class="mt-8">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">{{ __('Specifications') }}</h3>
                        <div class="bg-gray-50 rounded-lg p-6">
                            <dl class="divide-y divide-gray-200">
                                @foreach($product->specifications as $key => $value)
                                <div class="py-3 grid grid-cols-3 gap-4">
                                    <dt class="text-sm font-medium text-gray-500">{{ $key }}</dt>
                                    <dd class="text-sm text-gray-900 col-span-2">{{ $value }}</dd>
                                </div>
                                @endforeach
                            </dl>
                        </div>
                    </div>
                    @endif
                    
                    <!-- Contact Section -->
                    <div class="mt-8 bg-blue-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ __('Interested in this product?') }}</h3>
                        <p class="text-gray-600 mb-4">{{ __('Contact our team for more information or to request a quote.') }}</p>
                        <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-5 py-2 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700">
                            {{ __('Contact Us') }}
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Related Products -->
            @if($category->products->where('id', '!=', $product->id)->count() > 0)
            <div class="mt-16 pt-16 border-t border-gray-200">
                <h2 class="text-2xl font-bold text-gray-900 mb-8">{{ __('Related Products') }}</h2>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($category->products->where('id', '!=', $product->id)->take(3) as $relatedProduct)
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition">
                        <img 
                            src="{{ $relatedProduct->image ? asset('storage/' . $relatedProduct->image) : asset('images/product-placeholder.jpg') }}" 
                            alt="{{ $relatedProduct->name }}" 
                            class="w-full h-48 object-cover"
                            onerror="this.src='https://via.placeholder.com/600x400?text=Product+Image'"
                        >
                        <div class="p-6">
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ $relatedProduct->name }}</h3>
                            @if($relatedProduct->description)
                            <p class="text-gray-600 mb-4 line-clamp-2">{{ $relatedProduct->description }}</p>
                            @endif
                            <a href="{{ route('products.show', ['category' => $category->slug, 'product' => $relatedProduct->id]) }}" 
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
                
                <div class="text-center mt-8">
                    <a href="{{ route('products.category', $category->slug) }}" class="inline-flex items-center justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                        {{ __('View All') }} {{ $category->name }}
                    </a>
                </div>
            </div>
            @endif
        </div>
    </div>
@endsection 