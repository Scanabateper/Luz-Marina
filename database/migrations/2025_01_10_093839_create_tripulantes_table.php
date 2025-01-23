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
        Schema::create('tripulantes', function (Blueprint $table) {
            $table->id();
            $table-> string('nombre' , 255);
            $table-> string('apellido' , 255);
            $table-> string('rol' , 255);
            $table-> string('fecha_incorporacion' , 255);
            $table->unsignedBigInteger('viaje_id');
            $table->foreign('viaje_id')->references('id')->on('viajes');
            $table->timestamps(); //METELA EN TODOS LADOS :) !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tripulantes');
    }
};
