<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CareerApplicationMail;

class CareerController extends Controller
{
    public function apply(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'role' => 'required|string|max:255',
            'message' => 'required|string',
            'resume' => 'required|file|mimes:pdf|max:2048',
        ]);

        // Send email with resume attached, do NOT save file
        $to = 'business@kreatifdigitaldinamik.com'; // <-- Set your destination email here
        Mail::to($to)->send(new CareerApplicationMail($validated, $request->file('resume')));

        return back()->with('success', 'Thank you for sharing your info!');
    }
}
