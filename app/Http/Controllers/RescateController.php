<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RescateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function mostrarViajes($id)
    {
        // Obtener el tripulante por su ID
        $tripulante = Tripulante::find($id);
        
        // Obtener todos los viajes del tripulante
        $viajes = $tripulante->viajes;

        // Devolver los viajes a la vista (o como JSON)
        return view('tripulante.viajes', compact('viajes'));
        //Ejemplo en routes
        
        //use App\Http\Controllers\TripulanteController;

        //Route::get('/tripulantes/{id}/viajes', [TripulanteController::class, 'mostrarViajes']);

    }

}
