<?php

namespace App\Models\Configuracion;

use App\Traits\HasActiveTrait;
use Illuminate\Database\Eloquent\Model;

class Caja extends Model
{
    use HasActiveTrait;

    protected $table = 'cajas';

    protected $fillable = [
        'nombre',
        'numero',
        'ubicacion',
        'es_activo'
    ];
}
