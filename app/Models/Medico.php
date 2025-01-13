<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $table = "medicos";
    protected $fillable = ["nombre", "apellido" , "fecha_incorporacion", "viajes_id"];
    protected $guarded = ["id"];

    public function viajes(){
        return $this->belongsTo(Viaje::class, 'viaje_id');
    }
}