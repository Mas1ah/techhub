<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

// 🏠 Public Frontend Pages
Route::view('/', 'home')->name('home');
Route::view('/laptops', 'laptops')->name('laptops');
Route::view('/graphic-cards', 'graphic-cards')->name('graphic-cards');
Route::view('/monitors', 'monitors')->name('monitors');
Route::view('/printers', 'printers')->name('printers');
Route::view('/cart', 'cart')->name('cart');
Route::view('/checkout', 'checkout')->name('checkout');
Route::view('/contact', 'contact')->name('contact');
Route::view('/about', 'about')->name('about');
Route::view('/faq', 'faq')->name('faq');
Route::view('/search', 'search')->name('search');

// 🧭 Dashboard (Breeze default)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// 👤 User Profile (Breeze default)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// 🔐 Authentication Routes (login/register/logout)
require __DIR__ . '/auth.php';
