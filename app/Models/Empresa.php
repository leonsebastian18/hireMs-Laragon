<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresas';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'descripcion',
        'sector',
        'tamano',
        'direccion',
        'telefono',
        'email',
        'sitio_web',
        'estado',
        'fecha_registro'
    ];

    public function departamentos()
    {
        return $this->hasMany(Departamento::class, 'id_empresa');
    }

    public function usuarios()
    {
        return $this->belongsToMany(
            UsuarioSistema::class,
            'usuario_roles',
            'id_empresa',
            'id_usuario'
        );
    }
}
