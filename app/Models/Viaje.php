<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
    protected $table = "viajes";
    protected $fillable = ["origen", "destino"];
    protected $guarded = ["id"];
}
