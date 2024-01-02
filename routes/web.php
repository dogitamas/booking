<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//properties
Route::get('/properties', [\App\Http\Controllers\PropertiesController::class, 'index'])->name('properties');
Route::post('/properties/store', [\App\Http\Controllers\PropertiesController::class, 'store'])->name('properties.store');
Route::get('/properties/create', [\App\Http\Controllers\PropertiesController::class, 'create'])->name('properties.create');
Route::post('/properties/update', [\App\Http\Controllers\PropertiesController::class, 'update'])->name('properties.edit');
Route::get('/properties/edit/{number}', [\App\Http\Controllers\PropertiesController::class, 'show'])->name('properties.show');
Route::get('/properties/delete/{id}', [\App\Http\Controllers\PropertiesController::class, 'destroy'])->name('properties.destroy');

//bookings
Route::get('/bookings', [\App\Http\Controllers\BookingsController::class, 'index'])->name('bookings');
Route::get('/booking/create', [\App\Http\Controllers\BookingsController::class, 'create'])->name('bookings.create');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
