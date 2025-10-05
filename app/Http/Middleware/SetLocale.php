<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Get locale from session, fallback to config default
        $locale = Session::get('locale', config('app.locale'));
        
        // Available locales
        $availableLocales = ['ms', 'en'];
        
        // Validate locale
        if (in_array($locale, $availableLocales)) {
            App::setLocale($locale);
        } else {
            // Set default locale if invalid
            App::setLocale('ms');
            Session::put('locale', 'ms');
        }
        
        return $next($request);
    }
}
