<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competencia extends Model
{
    use HasFactory;

    protected $table = 'competencias';

    protected $fillable = [
        'nombre',
        'descripcion',
        'categoria',
        'nivel_maximo',
    ];

    public function candidatos()
    {
        return $this->belongsToMany(Candidate::class, 'candidato_competencias', 'id_competencia', 'id_candidato')
                    ->withPivot(['nivel_actual', 'años_experiencia', 'certificacion', 'fecha_ultima_actualizacion'])
                    ->withTimestamps();
    }
}
