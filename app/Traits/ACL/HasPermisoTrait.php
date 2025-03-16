<?php

namespace App\Traits\ACL;

trait HasPermisoTrait
{
    /**
     * Verifica si el usuario tiene un permiso específico.
     */
    public function hasPermiso(string $permiso): bool
    {
        $userPermisos = cache()->remember(
            "user_{$this->id}_permisos",
            now()->addHours(12),
            fn() => $this->roles()
                ->with('permisos')
                ->get()
                ->flatMap(fn($role) => $role->permisos->pluck('name'))
                ->unique()
                ->toArray()
        );

        return in_array($permiso, $userPermisos);
    }
}