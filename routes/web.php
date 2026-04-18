<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Public\HomeController;
use App\Http\Controllers\Public\ServiceController;
use App\Http\Controllers\Public\PackageController;
use App\Http\Controllers\Public\GalleryController;
use App\Http\Controllers\Public\BookingController;
use App\Http\Controllers\Public\ContactController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\Admin\AdminBookingController;
use App\Http\Controllers\Admin\SettingController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/packages', [PackageController::class, 'index'])->name('packages');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/booking', [BookingController::class, 'index'])->name('booking.index');
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->group(function () {
    // Guest Routes
    Route::middleware('guest')->group(function () {
        Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
        Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    });

    // Protected Routes
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
        
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/dashboard', [DashboardController::class, 'index']); // Alias
        
        Route::get('/content', [ContentController::class, 'index'])->name('content');
        Route::get('/bookings', [AdminBookingController::class, 'index'])->name('bookings');
        Route::get('/settings', [SettingController::class, 'index'])->name('settings');
    });
});
