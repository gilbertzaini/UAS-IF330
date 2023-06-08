<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController; // Import the ReviewController
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jadwal', function () {
    return view('jadwal');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/appointment', function () {
        return view('appointment');
    });

    Route::post('/appointment', [AppointmentController::class, 'store'])->name('appointment');

    Route::middleware(['auth'])->group(function () {
        Route::prefix('admin')->name('admin.')->group(function () {
            Route::get('/', [AdminController::class, 'index'])->name('index');
            Route::get('/user', [AdminController::class, 'user'])->name('user');
            Route::get('/approval', [AdminController::class, 'approval'])->name('approval');
        });
    });

    // Add the route for the reviews page
    Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews');

});

require __DIR__.'/auth.php';
