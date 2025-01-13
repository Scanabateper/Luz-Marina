<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tripulante extends Model
{
    protected $table ="Tripulantes";
    protected $fillable =["nombre", "apellido", "rol","fecha_incorporacion" ];
    protected $guarded =["id"];
    
    public function viajes(){


        return $this->belongsTo(VIaje::class, 'viaje_id') }
}
