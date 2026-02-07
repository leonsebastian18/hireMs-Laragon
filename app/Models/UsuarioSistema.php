<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class UsuarioSistema extends Authenticatable
{
    protected $table = 'usuarios_sistema';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'password_hash',
        'telefono',
        'estado',
        'fecha_registro',
        'ultimo_acceso'
    ];

    protected $hidden = [
        'password_hash'
    ];

    public function getAuthPassword()
    {
        return $this->password_hash;
    }

    public function roles()
    {
        return $this->belongsToMany(
            Rol::class,
            'usuario_roles',
            'id_usuario',
            'id_rol'
        )->withPivot('id_empresa', 'fecha_asignacion');
    }

    public function empresas()
    {
        return $this->belongsToMany(
            Empresa::class,
            'usuario_roles',
            'id_usuario',
            'id_empresa'
        );
    }
}
