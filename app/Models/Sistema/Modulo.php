<?php

namespace App\Models\Sistema;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Modulo extends Model
{
    protected $table = 'modulos';

    protected $fillable = [
        'modulo',
        'enlace',
        'referencia',
        'direccion_icono',
        'orden',
        'padre',
        'estado'
    ];


    /**
     * Get the parent that owns the Modulo
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent(): BelongsTo
    {
        return $this->belongsTo(Modulo::class, 'referencia', 'id');
    }

    /**
     * Get all of the subModulos for the Modulo
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subModulos(): HasMany
    {
        return $this->hasMany(Modulo::class, 'referencia', 'id');
    }

    /**
     * The roles that belong to the Role
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }
}
