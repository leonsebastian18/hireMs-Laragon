<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Candidate
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $phone
 * @property string|null $address
 * @property string|null $cv
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property User|null $user
 * @property Collection|Application[] $applications
 *
 * @package App\Models
 */
class Candidate extends Model
{
	protected $table = 'candidates';

    use HasFactory;

	protected $casts = [
		'user_id' => 'int'
	];

	 protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'telefono',
        'fecha_nacimiento',
        'genero',
        'estado_civil',
        'direccion',
        'ciudad',
        'pais',
        'disponibilidad_inicio',
        'modalidad_preferida',
        'expectativa_salarial',
        'estado',
    ];


	// Relaciones
    public function documentos()
    {
        return $this->hasMany(DocumentoCandidato::class, 'id_candidato');
    }

    public function experiencias()
    {
        return $this->hasMany(ExperienciaLaboral::class, 'id_candidato');
    }

    public function educaciones()
    {
        return $this->hasMany(Educacion::class, 'id_candidato');
    }

    public function competencias()
    {
        return $this->belongsToMany(Competencia::class, 'candidato_competencias', 'id_candidato', 'id_competencia')
                    ->withPivot(['nivel_actual', 'años_experiencia', 'certificacion', 'fecha_ultima_actualizacion']);
    }
}
