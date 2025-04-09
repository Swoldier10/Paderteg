<nav x-data="{ open: false, megaMenu: null }" @click.outside="megaMenu = null" class="bg-white backdrop-blur-md bg-opacity-90 border-b border-gray-100 fixed w-full top-0 z-[100]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('images/logo.jpeg') }}" alt="Paderteg Logo" class="h-8 w-auto">
                    </a>
                </div>

                <!-- Desktop Navigation Links -->
                <div class="hidden sm:ml-10 sm:flex sm:space-x-8">
                    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'border-blue-500 text-blue-600' : 'border-transparent text-gray-500 hover:text-gray-900' }} h-16 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium transition-colors duration-200">
                        {{ __('app.Home') }}
                    </a>

                    <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'border-blue-500 text-blue-600' : 'border-transparent text-gray-500 hover:text-gray-900' }} h-16 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium transition-colors duration-200">
                        {{ __('app.About') }}
                    </a>

                    <!-- Products Dropdown -->
                    <div class="relative h-16 inline-flex items-center">
                        <button @mouseover="megaMenu = 'products'" @focus="megaMenu = 'products'" @click="megaMenu = megaMenu === 'products' ? null : 'products'" class="{{ request()->routeIs('products.*') ? 'border-blue-500 text-blue-600' : 'border-transparent text-gray-500 hover:text-gray-900' }} h-16 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium transition-colors duration-200">
                            {{ __('app.Products') }}
                            <svg class="ml-1 h-5 w-5 transition-transform duration-200" :class="{'rotate-180': megaMenu === 'products'}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Resources Dropdown -->
                    <div class="relative h-16 inline-flex items-center">
                        <button @mouseover="megaMenu = 'resources'" @focus="megaMenu = 'resources'" @click="megaMenu = megaMenu === 'resources' ? null : 'resources'" class="{{ request()->routeIs('certificates') || request()->routeIs('machines') || request()->routeIs('resources.*') ? 'border-blue-500 text-blue-600' : 'border-transparent text-gray-500 hover:text-gray-900' }} h-16 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium transition-colors duration-200">
                            {{ __('app.Resources') }}
                            <svg class="ml-1 h-5 w-5 transition-transform duration-200" :class="{'rotate-180': megaMenu === 'resources'}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                    </div>

                    <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'border-blue-500 text-blue-600' : 'border-transparent text-gray-500 hover:text-gray-900' }} h-16 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium transition-colors duration-200">
                        {{ __('app.Contact') }}
                    </a>
                </div>
            </div>

            <!-- Language Switcher and Mobile Menu -->
            <div class="flex items-center">
                <!-- Language Switcher -->
                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open" @click.away="open = false" class="inline-flex items-center justify-center px-3 py-2 text-sm font-medium rounded-md text-gray-600 hover:text-gray-900 transition-colors duration-200 z-50">
                        {{ strtoupper(app()->getLocale()) }}
                        <svg class="ml-1 h-5 w-5 transition-transform duration-200" :class="{'rotate-180': open}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    <div x-show="open"
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 translate-y-1"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 translate-y-1"
                         class="absolute right-0 mt-2 w-24 rounded-xl shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none z-50"
                         style="display: none;">

                        <a href="{{ route('language.switch', 'en') }}"
                            class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 rounded-t-xl {{ app()->getLocale() == 'en' ? 'bg-blue-50 text-blue-600' : '' }}">
                            EN
                        </a>
                        <a href="{{ route('language.switch', 'ro') }}"
                            class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 {{ app()->getLocale() == 'ro' ? 'bg-blue-50 text-blue-600' : '' }}">
                            RO
                        </a>
                        <a href="{{ route('language.switch', 'de') }}"
                            class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 rounded-b-xl {{ app()->getLocale() == 'de' ? 'bg-blue-50 text-blue-600' : '' }}">
                            DE
                        </a>
                    </div>
                </div>

                <!-- Mobile menu button -->
                <div class="ml-4 sm:hidden">
                    <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500 transition duration-150 ease-in-out z-50">
                        <svg class="h-6 w-6" :class="{'hidden': open, 'block': !open}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg class="h-6 w-6" :class="{'block': open, 'hidden': !open}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div x-show="open"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-1"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-1"
         class="sm:hidden"
         style="display: none;">
        <div class="pt-2 pb-3 space-y-1 bg-white shadow-lg rounded-b-xl">
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'bg-blue-50 border-blue-500 text-blue-600' : 'border-transparent text-gray-500 hover:bg-gray-50 hover:text-gray-900' }} block pl-3 pr-4 py-2 border-l-4 text-base font-medium transition-colors duration-200">
                {{ __('app.Home') }}
            </a>

            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'bg-blue-50 border-blue-500 text-blue-600' : 'border-transparent text-gray-500 hover:bg-gray-50 hover:text-gray-900' }} block pl-3 pr-4 py-2 border-l-4 text-base font-medium transition-colors duration-200">
                {{ __('app.About') }}
            </a>

            <!-- Mobile Products Dropdown -->
            <div x-data="{ open: false }">
                <button @click="open = !open" class="{{ request()->routeIs('products.*') ? 'bg-blue-50 border-blue-500 text-blue-600' : 'border-transparent text-gray-500 hover:bg-gray-50 hover:text-gray-900' }} w-full flex justify-between items-center pl-3 pr-4 py-2 border-l-4 text-base font-medium transition-colors duration-200">
                    {{ __('app.Products') }}
                    <svg class="h-5 w-5 transition-transform duration-200" :class="{'rotate-180': open}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                <div x-show="open"
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:enter-end="opacity-100 scale-100"
                     x-transition:leave="transition ease-in duration-150"
                     x-transition:leave-start="opacity-100 scale-100"
                     x-transition:leave-end="opacity-0 scale-95"
                     class="pl-4 bg-gray-50 space-y-1 py-2"
                     style="display: none;">
                    <a href="{{ route('products.index') }}" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900 transition-colors duration-200">
                        All Products
                    </a>
                    <a href="{{ route('products.automotive') }}" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900 transition-colors duration-200">
                        {{ __('app.Automotive') }}
                    </a>
                    <a href="{{ route('products.industrial') }}" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900 transition-colors duration-200">
                        {{ __('app.Industrial') }}
                    </a>
                    <a href="{{ route('products.healthcare') }}" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900 transition-colors duration-200">
                        {{ __('app.Health Care') }}
                    </a>
                    <a href="{{ route('products.energy-environmental') }}" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900 transition-colors duration-200">
                        {{ __('app.Energy & Environmental') }}
                    </a>
                </div>
            </div>

            <!-- Mobile Resources Dropdown -->
            <div x-data="{ open: false }">
                <button @click="open = !open" class="{{ request()->routeIs('certificates') || request()->routeIs('machines') || request()->routeIs('resources.*') ? 'bg-blue-50 border-blue-500 text-blue-600' : 'border-transparent text-gray-500 hover:bg-gray-50 hover:text-gray-900' }} w-full flex justify-between items-center pl-3 pr-4 py-2 border-l-4 text-base font-medium transition-colors duration-200">
                    {{ __('app.Resources') }}
                    <svg class="h-5 w-5 transition-transform duration-200" :class="{'rotate-180': open}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                <div x-show="open"
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:enter-end="opacity-100 scale-100"
                     x-transition:leave="transition ease-in duration-150"
                     x-transition:leave-start="opacity-100 scale-100"
                     x-transition:leave-end="opacity-0 scale-95"
                     class="pl-4 bg-gray-50 space-y-1 py-2"
                     style="display: none;">
                    <a href="{{ route('certificates') }}" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900 transition-colors duration-200">
                        {{ __('app.Certificates') }}
                    </a>
                    <a href="{{ route('machines') }}" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900 transition-colors duration-200">
                        {{ __('app.Machines') }}
                    </a>
                </div>
            </div>

            <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'bg-blue-50 border-blue-500 text-blue-600' : 'border-transparent text-gray-500 hover:bg-gray-50 hover:text-gray-900' }} block pl-3 pr-4 py-2 border-l-4 text-base font-medium transition-colors duration-200">
                {{ __('app.Contact') }}
            </a>
        </div>

        <!-- Mobile Language Switcher -->
        <div class="pt-4 pb-3 border-t border-gray-200 bg-gray-50">
            <div class="flex items-center px-4">
                <div class="ml-3">
                    <div class="text-base font-medium text-gray-800">{{ __('app.Language') }}</div>
                </div>
            </div>
            <div class="mt-3 space-y-1">
                <a href="{{ route('language.switch', 'en') }}"
                    class="block w-full text-left pl-3 pr-4 py-2 border-l-4 {{ app()->getLocale() == 'en' ? 'bg-blue-50 border-blue-500 text-blue-600' : 'border-transparent text-gray-500 hover:bg-gray-50 hover:text-gray-900' }} text-base font-medium transition-colors duration-200">
                    English
                </a>
                <a href="{{ route('language.switch', 'ro') }}"
                    class="block w-full text-left pl-3 pr-4 py-2 border-l-4 {{ app()->getLocale() == 'ro' ? 'bg-blue-50 border-blue-500 text-blue-600' : 'border-transparent text-gray-500 hover:bg-gray-50 hover:text-gray-900' }} text-base font-medium transition-colors duration-200">
                    Română
                </a>
                <a href="{{ route('language.switch', 'de') }}"
                    class="block w-full text-left pl-3 pr-4 py-2 border-l-4 {{ app()->getLocale() == 'de' ? 'bg-blue-50 border-blue-500 text-blue-600' : 'border-transparent text-gray-500 hover:bg-gray-50 hover:text-gray-900' }} text-base font-medium transition-colors duration-200">
                    Deutsch
                </a>
            </div>
        </div>
    </div>

    <!-- Mega Menu Dropdown for Products -->
    <div x-show="megaMenu === 'products'"
         @click.away="megaMenu = null"
         @mouseleave="megaMenu = null"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-1"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-1"
         class="absolute top-16 inset-x-0 transform shadow-lg bg-white"
         style="display: none;">
        <div class="max-w-7xl mx-auto grid gap-y-6 px-4 py-6 sm:grid-cols-2 sm:gap-8 sm:px-6 sm:py-8 lg:grid-cols-4 lg:px-8 lg:py-12 xl:py-16">
            <!-- All Products Section -->
            <a href="{{ route('products.index') }}" class="group -m-3 p-3 flex flex-col justify-between rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                <div>
                    <h3 class="text-base font-medium text-gray-900">
                        All Products
                    </h3>
                    <p class="mt-2 text-sm text-gray-500">
                        Browse our complete catalog of high-quality cable solutions.
                    </p>
                </div>
                <div class="mt-4">
                    <span class="inline-flex items-center text-sm font-medium text-blue-600 group-hover:text-blue-800">
                        View All Products
                        <svg class="ml-1 h-4 w-4 text-blue-600 group-hover:text-blue-800" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </div>
            </a>

            <!-- Automotive Section -->
            <a href="{{ route('products.automotive') }}" class="group -m-3 p-3 flex flex-col justify-between rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                <div>
                    <h3 class="text-base font-medium text-gray-900">
                        {{ __('app.Automotive') }}
                    </h3>
                    <p class="mt-2 text-sm text-gray-500">
                        {{ __('app.Precision cable solutions for automotive applications and vehicle systems.') }}
                    </p>
                </div>
                <div class="mt-4">
                    <span class="inline-flex items-center text-sm font-medium text-blue-600 group-hover:text-blue-800">
                        {{ __('app.View Products') }}
                        <svg class="ml-1 h-4 w-4 text-blue-600 group-hover:text-blue-800" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </div>
            </a>

            <!-- Industrial Section -->
            <a href="{{ route('products.industrial') }}" class="group -m-3 p-3 flex flex-col justify-between rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                <div>
                    <h3 class="text-base font-medium text-gray-900">
                        {{ __('app.Industrial') }}
                    </h3>
                    <p class="mt-2 text-sm text-gray-500">
                        {{ __('app.Robust cabling solutions for industrial machinery and manufacturing equipment.') }}
                    </p>
                </div>
                <div class="mt-4">
                    <span class="inline-flex items-center text-sm font-medium text-blue-600 group-hover:text-blue-800">
                        {{ __('app.View Products') }}
                        <svg class="ml-1 h-4 w-4 text-blue-600 group-hover:text-blue-800" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </div>
            </a>

            <!-- Health Care Section -->
            <a href="{{ route('products.healthcare') }}" class="group -m-3 p-3 flex flex-col justify-between rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                <div>
                    <h3 class="text-base font-medium text-gray-900">
                        {{ __('app.Health Care') }}
                    </h3>
                    <p class="mt-2 text-sm text-gray-500">
                        {{ __('app.Specialized medical-grade cabling for healthcare devices and equipment.') }}
                    </p>
                </div>
                <div class="mt-4">
                    <span class="inline-flex items-center text-sm font-medium text-blue-600 group-hover:text-blue-800">
                        {{ __('app.View Products') }}
                        <svg class="ml-1 h-4 w-4 text-blue-600 group-hover:text-blue-800" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </div>
            </a>

            <!-- Energy & Environmental Section -->
            <a href="{{ route('products.energy-environmental') }}" class="group -m-3 p-3 flex flex-col justify-between rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                <div>
                    <h3 class="text-base font-medium text-gray-900">
                        {{ __('app.Energy & Environmental') }}
                    </h3>
                    <p class="mt-2 text-sm text-gray-500">
                        {{ __('app.Solutions for renewable energy systems and environmental monitoring equipment.') }}
                    </p>
                </div>
                <div class="mt-4">
                    <span class="inline-flex items-center text-sm font-medium text-blue-600 group-hover:text-blue-800">
                        {{ __('app.View Products') }}
                        <svg class="ml-1 h-4 w-4 text-blue-600 group-hover:text-blue-800" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </div>
            </a>
        </div>
        <div class="bg-gray-50">
            <div class="max-w-7xl mx-auto space-y-6 px-4 py-5 sm:flex sm:space-y-0 sm:space-x-10 sm:px-6 lg:px-8">
                <div class="flow-root">
                    <a href="{{ route('products.index') }}?featured=true" class="group -m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-100 transition ease-in-out duration-150">
                        <svg class="flex-shrink-0 h-6 w-6 text-gray-400 group-hover:text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="ml-3">{{ __('app.Featured Products') }}</span>
                    </a>
                </div>
                <div class="flow-root">
                    <a href="{{ route('contact') }}?subject=custom-request" class="group -m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-100 transition ease-in-out duration-150">
                        <svg class="flex-shrink-0 h-6 w-6 text-gray-400 group-hover:text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <span class="ml-3">{{ __('app.Request Custom Quote') }}</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Mega Menu Dropdown for Resources -->
    <div x-show="megaMenu === 'resources'"
         @click.away="megaMenu = null"
         @mouseleave="megaMenu = null"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-1"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-1"
         class="absolute top-16 inset-x-0 transform shadow-lg bg-white"
         style="display: none;">
        <div class="max-w-7xl mx-auto grid gap-y-6 px-4 py-6 sm:grid-cols-2 sm:gap-8 sm:px-6 sm:py-8 lg:grid-cols-2 lg:px-8 lg:py-12 xl:py-16">
            <!-- Certificates Section -->
            <a href="{{ route('certificates') }}" class="group -m-3 p-3 flex flex-col justify-between rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                <div>
                    <h3 class="text-base font-medium text-gray-900">
                        {{ __('app.Certificates') }}
                    </h3>
                    <p class="mt-2 text-sm text-gray-500">
                        {{ __('app.View our quality certifications and compliance documentation.') }}
                    </p>
                </div>
                <div class="mt-4">
                    <span class="inline-flex items-center text-sm font-medium text-blue-600 group-hover:text-blue-800">
                        {{ __('app.View Certificates') }}
                        <svg class="ml-1 h-4 w-4 text-blue-600 group-hover:text-blue-800" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </div>
            </a>

            <!-- Machines Section -->
            <a href="{{ route('machines') }}" class="group -m-3 p-3 flex flex-col justify-between rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                <div>
                    <h3 class="text-base font-medium text-gray-900">
                        {{ __('app.Machines') }}
                    </h3>
                    <p class="mt-2 text-sm text-gray-500">
                        {{ __('app.Explore our state-of-the-art manufacturing equipment.') }}
                    </p>
                </div>
                <div class="mt-4">
                    <span class="inline-flex items-center text-sm font-medium text-blue-600 group-hover:text-blue-800">
                        {{ __('app.View Machines') }}
                        <svg class="ml-1 h-4 w-4 text-blue-600 group-hover:text-blue-800" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </div>
            </a>
        </div>
        <div class="bg-gray-50">
            <div class="max-w-7xl mx-auto space-y-6 px-4 py-5 sm:flex sm:space-y-0 sm:space-x-10 sm:px-6 lg:px-8">
                <div class="flow-root">
                    <a href="{{ route('about') }}" class="group -m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-100 transition ease-in-out duration-150">
                        <svg class="flex-shrink-0 h-6 w-6 text-gray-400 group-hover:text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                        <span class="ml-3">{{ __('app.About Our Company') }}</span>
                    </a>
                </div>
                <div class="flow-root">
                    <a href="{{ route('contact') }}" class="group -m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-100 transition ease-in-out duration-150">
                        <svg class="flex-shrink-0 h-6 w-6 text-gray-400 group-hover:text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <span class="ml-3">{{ __('app.Contact Us') }}</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Spacer to account for fixed navbar -->
<div class="h-16"></div>
