<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResortController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookingController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/resorts', [ResortController::class, 'index'])->name('resorts.index');

// Only authenticated users can create bookings
Route::middleware('auth')->group(function () {
    // Route to show booking form for a resort
    Route::get('/book/{id}', [BookingController::class, 'create'])->name('book.create');

    // Route to store booking
    Route::post('/book/{resort}', [BookingController::class, 'store'])->name('book.store');
});

Route::get('admin/dashboard', [HomeController::class, 'authen'])
    ->middleware(['auth', 'admin']);

require __DIR__.'/auth.php';
