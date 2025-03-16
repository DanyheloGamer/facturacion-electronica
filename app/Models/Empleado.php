<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empleado extends Model
{
    use SoftDeletes;

    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;

    protected $table = 'empleados';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'dni',
        'nombres',
        'apellido_paterno',
        'apellido_materno',
        'fecha_nacimiento',
        'domicilio',
        'telefono_fijo',
        'telefono_movil',
        'email_1',
        'email_2',
        'tipo_empleado_id'
    ];

    const CREATED_AT = 'fecha_insert';
    const UPDATED_AT = 'fecha_update';
    const DELETED_AT = 'fecha_delete';
}
