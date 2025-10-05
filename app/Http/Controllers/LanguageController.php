<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    /**
     * Switch application language
     */
    public function switch(Request $request, $locale)
    {
        // Available locales
        $availableLocales = ['ms', 'en'];
        
        // Validate the locale
        if (!in_array($locale, $availableLocales)) {
            $locale = 'ms'; // fallback to default
        }
        
        // Set the application locale
        App::setLocale($locale);
        
        // Store the locale in session
        Session::put('locale', $locale);
        
        // Get the previous URL or redirect to home
        $previousUrl = url()->previous();
        
        // If previous URL contains language parameter, update it
        if (str_contains($previousUrl, '/language/')) {
            $previousUrl = url('/');
        }
        
        return redirect($previousUrl)->with('success', __('common.language') . ' ' . __('common.success'));
    }
    
    /**
     * Get current locale
     */
    public function current()
    {
        return response()->json([
            'current_locale' => App::getLocale(),
            'available_locales' => [
                'ms' => __('common.malay'),
                'en' => __('common.english')
            ]
        ]);
    }
}