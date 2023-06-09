<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ProfileController;
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
});

Route::get('/jadwal', function () {
    $doctors = Doctor::all();
    return view('jadwal', ['doctors'=>$doctors]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/appointment', function () {
    return view('appointment');
})->middleware(['auth', 'verified'])->name('appointment');

Route::middleware(['auth'])->group(function () {
    Route::get('/appointment/create/{id}', [AppointmentController::class, 'create'])->name('appointment.create');    
    Route::post('/appointment/store', [AppointmentController::class, 'store'])->name('appointment.store');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
});