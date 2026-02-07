<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = 'departamentos';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'id_empresa',
        'nombre',
        'descripcion',
        'jefe_departamento_id',
        'presupuesto_anual'
    ];

    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'id_empresa');
    }
}
