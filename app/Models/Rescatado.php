<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rescatado extends Model
{
    protected $table = "rescatados";
    protected $fillable = ["nombre", "foto" , "edad", "sexo", "procedencia", "valoracion_medica", "medico_asistente", "id_rescate"];
    protected $guarded = ["id"];

    public function medicos(){
        return $this->belongsTo(Medico::class, 'medico_asistente');
    }
    public function rescates(){
        return $this->belongsTo(Rescate::class, 'id_rescate');
    }
}
