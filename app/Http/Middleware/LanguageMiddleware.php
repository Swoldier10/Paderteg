<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class LanguageMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if session has locale
        if (session()->has('locale')) {
            $locale = session()->get('locale');
            
            // Make sure the locale is valid
            if (in_array($locale, ['en', 'ro', 'de'])) {
                App::setLocale($locale);
                
                // Force specific headers for browsers
                if ($response = $next($request)) {
                    $response->headers->set('Content-Language', $locale);
                    return $response;
                }
            }
        }
        
        return $next($request);
    }
}
