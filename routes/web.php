<?php

use App\Http\Controllers\CertificateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MachineController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Language Switcher - accept both GET and POST
Route::match(['get', 'post'], 'language/{locale}', function ($locale) {
    // Validate locale
    if (in_array($locale, ['en', 'ro', 'de'])) {
        // Store locale in session
        session()->put('locale', $locale);
        session()->save(); // Force save session

        // Get the previous URL
        $previousUrl = url()->previous();

        // Debug session value
        // return response("Session locale set to: " . session('locale') . ", redirecting to: $previousUrl");

        // Redirect back to the previous page
        return redirect($previousUrl);
    }

    return redirect()->back();
})->name('language.switch');

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact', [HomeController::class, 'sendContactForm'])->name('contact.send');

// Products Routes
Route::prefix('products')->name('products.')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('index');

    // Direct routes to category template pages
    Route::get('/automotive', function() {
        return view('products.automotive');
    })->name('automotive');

    Route::get('/industrial', function() {
        return view('products.industrial');
    })->name('industrial');

    Route::get('/healthcare', function() {
        return view('products.healthcare');
    })->name('healthcare');

    Route::get('/energy-environmental', function() {
        return view('products.energy-environmental');
    })->name('energy-environmental');

    Route::get('/{category:slug}', [ProductCategoryController::class, 'show'])->name('category');
    Route::get('/{category:slug}/{product:id}', [ProductController::class, 'show'])->name('show');
});

// Certificates & Machines Routes (Direct)
Route::get('/certificates', [CertificateController::class, 'index'])->name('certificates');
Route::get('/machines', [MachineController::class, 'index'])->name('machines');

// Resources Routes (For more specific resources)
Route::prefix('resources')->name('resources.')->group(function () {
    // Certificates
    Route::get('/certificates/{certificate}', [CertificateController::class, 'show'])->name('certificates.show');

    // Machines
    Route::get('/machines/{machine}', [MachineController::class, 'show'])->name('machines.show');
});

// Admin Routes
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('products', ProductController::class)->except(['show']);
    Route::resource('categories', ProductCategoryController::class)->except(['show']);
    Route::resource('certificates', CertificateController::class)->except(['show']);
    Route::resource('machines', MachineController::class)->except(['show']);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

Route::get('/download/pdf/{filename}', [\App\Http\Controllers\PDFController::class, 'download'])->name('pdf.download');

require __DIR__.'/auth.php';
