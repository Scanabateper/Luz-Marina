<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resacate extends Model
{
    protected $table ="Rescates";
    protected $fillable =["fecha_fin","fecha_inicio" ];
    protected $guarded =["id"];
}
