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
        Schema::create('rescates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('viaje_id'); // Clave foránea
            $table-> date('fecha_inicio');
            $table-> date('fecha_fin');
            $table->timestamps();
            // Definir la clave foránea
            $table->foreign('viaje_id')->references('id')->on('viajes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rescates');
    }
};
