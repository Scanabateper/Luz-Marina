<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rescatado extends Model
{
    use HasFactory;
    public function rescate(){
        return $this->belongsTo('App\Models\Rescatado');

    }
}
