<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Medico extends Model
{
    use HasFactory;
    public function viajes(){
        return $this->belongsToMany(Viaje::class);
    }

    public function rescatados(){
        return $this->hasMany(Rescatado::class);
    }
}
