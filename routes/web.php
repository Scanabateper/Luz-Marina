<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\ViajeController;
use App\Http\Controllers\RescateController;
use App\Http\Controllers\RescatadoController;
use App\Http\Controllers\TripulanteController;

// Ruta principal que redirige a la lista de médicos
Route::get('/', function () {
    return redirect('/medicos');
});

// Rutas para Médicos
Route::resource('medicos', MedicoController::class);

// Rutas para Viajes
Route::resource('viajes', ViajeController::class);

// Rutas para Rescates
Route::resource('rescates', RescateController::class);

// Rutas para Rescatados
Route::resource('rescatados', RescatadoController::class);

// Rutas para Tripulantes
Route::resource('tripulantes', TripulanteController::class);
