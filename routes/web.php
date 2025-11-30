<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LaptopController;
use App\Http\Controllers\GraphicCardController;
use App\Http\Controllers\MonitorController;
use App\Http\Controllers\PrinterController;
use App\Http\Controllers\DashboardController;


// 🏠 Public Frontend Pages
Route::view('/', 'home')->name('home');
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



// Frontend route
Route::get('/laptops', [LaptopController::class, 'frontend'])->name('laptops.frontend');
Route::get('/graphic-cards', [GraphicCardController::class, 'frontend'])->name('graphic-cards.frontend');
Route::get('/monitors', [MonitorController::class, 'frontend'])->name('monitors.frontend');
Route::get('/printers', [PrinterController::class, 'frontend'])->name('printers.frontend');


// Admin CRUD (wrap with auth & admin middleware if you have one)
Route::prefix('admin')->middleware(['auth'])->group(function () {
Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::resource('laptops', LaptopController::class)->except(['show']);
Route::resource('graphic-cards', GraphicCardController::class)->except(['show']);
Route::resource('monitors', MonitorController::class)->except(['show']);
Route::resource('printers', PrinterController::class)->except(['show']);

});