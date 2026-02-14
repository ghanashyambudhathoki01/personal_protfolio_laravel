<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EnquiryController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::post('/enquiry', [EnquiryController::class, 'store'])->name('enquiry.store');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\Admin\AdminController::class, 'index'])->name('dashboard');
    
    // Blog Management
    Route::resource('blogs', \App\Http\Controllers\Admin\BlogController::class);
    
    // Enquiry Management
    Route::get('/enquiries', [\App\Http\Controllers\Admin\EnquiryController::class, 'index'])->name('enquiries.index');
    Route::get('/enquiries/{enquiry}', [\App\Http\Controllers\Admin\EnquiryController::class, 'show'])->name('enquiries.show');
    Route::patch('/enquiries/{enquiry}/status', [\App\Http\Controllers\Admin\EnquiryController::class, 'updateStatus'])->name('enquiries.updateStatus');
    Route::delete('/enquiries/{enquiry}', [\App\Http\Controllers\Admin\EnquiryController::class, 'destroy'])->name('enquiries.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
