<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rescate extends Model
{
    use HasFactory;

    public function viaje(){
        return $this->belongsTo(Viaje::class);
    }
  
    public function rescatados(){
        return $this->hasMany(Rescatado::class);
    }
}
