git<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Viaje extends Model
{
    protected $table = "viajes";
    protected $fillable = ["origen", "destino"];
    protected $guarded = ["id"];
}
