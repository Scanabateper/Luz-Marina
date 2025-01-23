<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Viaje extends Model
{
   use HasFactory;

   public function tripulantes(){
      return $this->belongsToMany(Tripulante::class);
  }

  public function medicos(){
   return $this->belongsToMany(Medico::class);
}


    public function rescatados(){
        return $this->hasMany(Rescatado::class);
    }
    
}
