<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\Machine;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Display the homepage.
     */
    public function index()
    {
        $featuredProducts = Product::where('is_featured', true)->take(6)->get();
        $categories = ProductCategory::where('is_active', true)->get();
        
        return view('home', compact('featuredProducts', 'categories'));
    }
    
    /**
     * Display the about page.
     */
    public function about()
    {
        $certificates = Certificate::where('is_active', true)->take(4)->get();
        
        return view('about', compact('certificates'));
    }
    
    /**
     * Display the contact page.
     */
    public function contact()
    {
        return view('contact');
    }
    
    /**
     * Handle contact form submission.
     */
    public function sendContactForm(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string',
        ]);
        
        // Send email logic would go here
        // Mail::to('contact@paderteg.com')->send(new ContactFormMail($validated));
        
        return back()->with('success', 'Thank you for your message. We will get back to you soon!');
    }
}
