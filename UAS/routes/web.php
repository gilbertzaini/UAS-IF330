<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController; // Import the ReviewController
use App\Models\Doctor;
use Illuminate\Support\Facades\Route;
require __DIR__.'/auth.php';

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/jadwal', function () {
    $doctors = Doctor::all();
    return view('jadwal', ['doctors'=>$doctors]);
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('index');
        Route::get('/user', [AdminController::class, 'user'])->name('user');
        Route::get('/approval', [AdminController::class, 'approval'])->name('approval');
    });
});

Route::middleware(['auth'])->group(function () {
    Route::get('/appointment/create/{id}', [AppointmentController::class, 'create'])->name('appointment.create');    
    Route::post('/appointment/store', [AppointmentController::class, 'store'])->name('appointment.store');
    Route::get('/appointment/list', [AppointmentController::class, 'list'])->name('appointment.list');
    Route::get('/appointment/approve/{id}', [AppointmentController::class, 'list'])->name('appointment.approve');
    Route::get('/appointment/decline/{id}', [AppointmentController::class, 'list'])->name('appointment.decline');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/review/{id}', [ReviewController::class, 'show'])->name('review.show');    
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
});
