<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Viaje extends Model
{
   use HasFactory;
   public function viaje(){
      return $this->belongsTo('App/Models/Viaje');

  }
}
