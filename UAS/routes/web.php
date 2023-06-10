<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\JadwalController;
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

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return redirect()->route('index');
    })->name('dashboard');
});

Route::get('/jadwal', function () {
    $doctors = Doctor::all();
    return view('jadwal', ['doctors'=>$doctors]);
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
        Route::get('/admin/user', [AdminController::class, 'user'])->name('admin.user');
        Route::get('/admin/approval', [AdminController::class, 'approval'])->name('admin.approval');
        Route::get('/admin/doctor', [AdminController::class, 'doctor'])->name('admin.doctor');
        Route::delete('/admin/doctor/{id}/delete', [AdminController::class, 'destroyDoctor'])->name('doctor.destroy');

        Route::post('admin/jadwal/filter', [JadwalController::class, 'adminSearch'])->name('admin.doctor.search');

        Route::get('/appointment/approve/{id}', [AppointmentController::class, 'approve'])->name('appointment.approve');
        Route::get('/appointment/decline/{id}', [AppointmentController::class, 'decline'])->name('appointment.decline');
});

Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/appointment/create/{id}', [AppointmentController::class, 'create'])->name('appointment.create');    
    Route::post('/appointment/store', [AppointmentController::class, 'store'])->name('appointment.store');
    Route::get('/appointment/list', [AppointmentController::class, 'list'])->name('appointment.list');
});

Route::get('/review/{id}', [ReviewController::class, 'show'])->name('review.show');
Route::post('/jadwal/filter', [JadwalController::class, 'search'])->name('doctor.search');