<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'roles';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'descripcion',
        'nivel_acceso'
    ];

    public function usuarios()
    {
        return $this->belongsToMany(
            UsuarioSistema::class,
            'usuario_roles',
            'id_rol',
            'id_usuario'
        )->withPivot('id_empresa', 'fecha_asignacion');
    }
}
