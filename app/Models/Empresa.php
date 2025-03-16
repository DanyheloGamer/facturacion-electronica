<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Jetstream\HasProfilePhoto;

class Empresa extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;

    use HasProfilePhoto;

    protected $table = 'empresas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'ruc',
        'empresa',
        'nombre_comercial',
        'domicio_fiscal',
        'telefono_fijo',
        'telefono_fijo2',
        'telefono_movil',
        'telefono_movil2',
        'correo',
        'ubigeo',
        'codigo_sucursal',
        'regimen_id',
        'urbanizacion',
        'modo'
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'foto',
    ];
}