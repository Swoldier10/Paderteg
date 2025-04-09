<footer class="bg-gray-900 text-white pt-20 pb-10">
    <div class="w-full mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-8 mb-16">
            <!-- Company Info -->
            <div class="col-span-1 md:col-span-4">
                <div class="text-blue-600 font-bold text-xl flex items-center mb-6">
                    <span class="text-blue-400">Pader</span><span class="text-blue-500">teg</span>
                </div>
                <p class="text-gray-300 mb-4 max-w-md">{{ __('app.Innovative cable assembly and system technology solutions for automotive, medical, and industrial applications.') }}</p>
                <p class="text-gray-400 italic">{{ __('app.Lösungen, die verbinden') }}</p>
                
                <div class="mt-6 flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white transition-colors" aria-label="LinkedIn">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"></path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors" aria-label="Facebook">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Navigation Links -->
            <div class="col-span-1 md:col-span-2">
                <h3 class="text-lg font-semibold mb-6 text-gray-100">{{ __('app.Navigation') }}</h3>
                <ul class="space-y-4">
                    <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-white transition-colors">{{ __('app.Home') }}</a></li>
                    <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-white transition-colors">{{ __('app.About Us') }}</a></li>
                    <li><a href="{{ route('products.index') }}" class="text-gray-400 hover:text-white transition-colors">{{ __('app.Products') }}</a></li>
                    <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-white transition-colors">{{ __('app.Contact') }}</a></li>
                </ul>
            </div>

            <!-- Product Categories -->
            <div class="col-span-1 md:col-span-2">
                <h3 class="text-lg font-semibold mb-6 text-gray-100">{{ __('app.Products') }}</h3>
                <ul class="space-y-4">
                    <li><a href="{{ route('products.index') }}" class="text-gray-400 hover:text-white transition-colors">{{ __('app.All Products') }}</a></li>
                    <li><a href="{{ route('products.automotive') }}" class="text-gray-400 hover:text-white transition-colors">{{ __('app.Automotive') }}</a></li>
                    <li><a href="{{ route('products.industrial') }}" class="text-gray-400 hover:text-white transition-colors">{{ __('app.Industrial') }}</a></li>
                    <li><a href="{{ route('products.healthcare') }}" class="text-gray-400 hover:text-white transition-colors">{{ __('app.Health Care') }}</a></li>
                    <li><a href="{{ route('products.energy-environmental') }}" class="text-gray-400 hover:text-white transition-colors">{{ __('app.Energy & Environmental') }}</a></li>
                </ul>
            </div>

            <!-- Resources -->
            <div class="col-span-1 md:col-span-2">
                <h3 class="text-lg font-semibold mb-6 text-gray-100">{{ __('app.Resources') }}</h3>
                <ul class="space-y-4">
                    <li><a href="{{ route('certificates') }}" class="text-gray-400 hover:text-white transition-colors">{{ __('app.Certificates') }}</a></li>
                    <li><a href="{{ route('machines') }}" class="text-gray-400 hover:text-white transition-colors">{{ __('app.Machines') }}</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-span-1 md:col-span-2">
                <h3 class="text-lg font-semibold mb-6 text-gray-100">{{ __('app.Contact') }}</h3>
                <address class="not-italic text-gray-400 space-y-4">
                    <p class="flex items-start">
                        <svg class="w-5 h-5 text-gray-500 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        {{ __('app.Copșa Mică, Romania') }}
                    </p>
                    <p class="flex items-start">
                        <svg class="w-5 h-5 text-gray-500 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <a href="tel:+40123456789" class="hover:text-white transition-colors">+40 123 456 789</a>
                    </p>
                    <p class="flex items-start">
                        <svg class="w-5 h-5 text-gray-500 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <a href="mailto:contact@paderteg.com" class="hover:text-white transition-colors">contact@paderteg.com</a>
                    </p>
                </address>
            </div>
        </div>

        <!-- Bottom Footer -->
        <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center">
            <p class="text-gray-500 text-sm">&copy; {{ date('Y') }} Paderteg. {{ __('app.All rights reserved.') }}</p>
            
            <div class="flex space-x-6 mt-4 md:mt-0">
                <a href="#" class="text-gray-500 text-sm hover:text-gray-400 transition-colors">{{ __('app.Privacy Policy') }}</a>
                <a href="#" class="text-gray-500 text-sm hover:text-gray-400 transition-colors">{{ __('app.Terms of Service') }}</a>
                <a href="#" class="text-gray-500 text-sm hover:text-gray-400 transition-colors">{{ __('app.Cookies') }}</a>
            </div>
        </div>
    </div>
</footer>
