<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tripulante_viaje', function (Blueprint $table) {
            $table->id(); // Clave primaria de la tabla pivote
            $table->foreignId('tripulante_id')->constrained()->onDelete('cascade'); // Clave foránea hacia la tabla `tripulantes`
            $table->foreignId('viaje_id')->constrained()->onDelete('cascade'); // Clave foránea hacia la tabla `viajes`
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tripulantes_viaje');
    }
};
