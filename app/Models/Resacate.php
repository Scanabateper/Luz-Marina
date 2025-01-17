<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Resacate extends Model
{
    protected $table ="Rescates";
    protected $fillable =["fecha_fin","fecha_inicio" ];
    protected $guarded =["id"];
}
