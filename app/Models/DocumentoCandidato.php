<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentoCandidato extends Model
{
    use HasFactory;

    protected $table = 'documentos_candidato';

    protected $fillable = [
        'id_candidato',
        'tipo_documento',
        'nombre_archivo',
        'url_archivo',
        'es_principal',
    ];

      public function candidate()
    {
        return $this->belongsTo(Candidate::class, 'ID_Candidato', 'id');
    }
}
