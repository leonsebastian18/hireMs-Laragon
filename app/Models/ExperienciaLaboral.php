<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExperienciaLaboral extends Model
{
    use HasFactory;

    protected $table = 'experiencia_laboral';

    protected $fillable = [
        'id_candidato',
        'empresa',
        'cargo',
        'descripcion',
        'fecha_inicio',
        'fecha_fin',
        'actualmente_trabaja',
        'salario',
        'logros',
        'referencias',
    ];

    public function candidato()
    {
        return $this->belongsTo(Candidate::class, 'id_candidato');
    }
}
