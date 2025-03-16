<?php

namespace App\Models\Sistema;

use App\Models\User;
use App\Traits\ACL\HasModuloTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    use HasModuloTrait;

    protected $table = 'roles';

    protected $fillable = [
        'name',
        'slug',
        'description'
    ];

    /**
     * The users that belong to the Role
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }

    /**
     * The users that belong to the Role
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function permisos(): BelongsToMany
    {
        return $this->belongsToMany(Permiso::class)->withTimestamps();
    }

    /**
     * The modulos that belong to the Role
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function modulos(): BelongsToMany
    {
        return $this->belongsToMany(Modulo::class)->withTimestamps();
    }
}
