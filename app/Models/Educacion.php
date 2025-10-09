<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Educacion extends Model
{
    use HasFactory;

    protected $table = 'educacion';

    protected $fillable = [
        'id_candidato',
        'institucion',
        'titulo',
        'nivel_educativo',
        'area_estudio',
        'fecha_inicio',
        'fecha_graduacion',
        'en_curso',
        'promedio',
    ];

    public function candidato()
    {
        return $this->belongsTo(Candidate::class, 'id_candidato');
    }
}
