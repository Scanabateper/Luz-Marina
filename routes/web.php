<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;use App\Http\Controllers\MedicoController;
use App\Http\Controllers\ViajeController;
use App\Http\Controllers\RescateController;
use App\Http\Controllers\RescatadoController;
use App\Http\Controllers\TripulanteController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');Route::resource('medicos', MedicoController::class);
    Route::resource('viajes', ViajeController::class);
    Route::resource('rescates', RescateController::class);
    Route::resource('rescatados', RescatadoController::class);
    Route::resource('tripulantes', TripulanteController::class);

});

require __DIR__.'/auth.php';
