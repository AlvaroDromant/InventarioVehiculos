<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('vehiculos', VehiculoController::class);
    Route::get('/misvehiculos', [VehiculoController::class, 'misvehiculos'])->name('vehiculos.misVehiculos');
    Route::delete('vehiculos/{id}/destroy', [VehiculoController::class, 'destroy'])->name('vehiculos.destroy');

    Route::resource('categorias', CategoriaController::class);
});

require __DIR__.'/auth.php';

