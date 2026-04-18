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
    // Entry Point Redirector
    Route::get('/', function () {
        if (auth()->check() && auth()->user()->is_admin) {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('admin.login');
    });

    // Guest Routes
    Route::middleware('guest')->group(function () {
        Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
        Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    });

    // Protected Routes
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
        
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        
        Route::get('/content', [ContentController::class, 'index'])->name('content');
        Route::get('/bookings', [AdminBookingController::class, 'index'])->name('bookings');
        Route::get('/settings', [SettingController::class, 'index'])->name('settings');
    });
});

/*
|--------------------------------------------------------------------------
| Temporary Deployment Utility
|--------------------------------------------------------------------------
*/
use Illuminate\Support\Facades\Artisan;
Route::get('/install', function (\Illuminate\Http\Request $request) {
    // SECURITY KEY: Use this once and then remove this route block
    $secureKey = 'blacksheep_deploy_2026_init';
    
    if ($request->query('key') !== $secureKey) {
        abort(403, 'Unauthorized Access: Invalid Alchemist Cipher.');
    }

    try {
        // 1. Run Migrations
        Artisan::call('migrate', ['--force' => true]);
        $output = Artisan::output();

        // 2. Run Seeders
        Artisan::call('db:seed', ['--class' => 'AdminUserSeeder', '--force' => true]);
        $output .= "\nAdminUserSeeder: " . Artisan::output();
        
        Artisan::call('db:seed', ['--class' => 'EventTypeSeeder', '--force' => true]);
        $output .= "\nEventTypeSeeder: " . Artisan::output();
        
        return response()->view('welcome', [
            'raw_output' => $output, 
            'message' => 'The Sanctum structure has been stabilized. All systems are online.'
        ])->header('Content-Type', 'text/plain');

    } catch (\Exception $e) {
        return response('Stabilization Failure: ' . $e->getMessage(), 500)
            ->header('Content-Type', 'text/plain');
    }
});
