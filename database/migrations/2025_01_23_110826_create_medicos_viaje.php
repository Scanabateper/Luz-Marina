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
        Schema::create('medicos_viaje', function (Blueprint $table) {
            $table->id();
            $table->foreignId('medico_id')->constrained()->onDelete('cascade'); // Clave foránea hacia la tabla `medicos`
            $table->foreignId('viaje_id')->constrained()->onDelete('cascade'); // Clave foránea hacia la tabla `viajes`
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicos_viaje');
    }
};
