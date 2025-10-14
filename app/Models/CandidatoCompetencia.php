<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidatoCompetencia extends Model
{
    use HasFactory;

    protected $table = 'candidato_competencias';
    public $timestamps = false;

    protected $fillable = [
        'id_candidato',
        'id_competencia',
        'nivel_actual',
        'años_experiencia',
        'certificacion',
        'fecha_ultima_actualizacion',
    ];


    public function competencia()
    {
        return $this->belongsTo(Competencia::class, 'id_competencia');
    }

    public function candidato()
    {
        return $this->belongsTo(Candidate::class, 'id_candidato');
    }
}
