<?php

namespace App\Traits\ACL;

trait HasModuloTrait
{
    /**
     * Verifica si el usuario tiene un permiso específico.
     */
    public function hasModulo(string $modulo): bool
    {
        $userModulos = cache()->remember(
            "user_{$this->id}_modulo",
            now()->addHours(12),
            fn() => $this->roles()
                ->with('modulos')
                ->get()
                ->flatMap(fn($role) => $role->modulos->pluck('name'))
                ->unique()
                ->toArray()
        );

        return in_array($modulo, $userModulos);
    }

    public function getAllModulos()
    {
        return $this->modulos()->with(['subModulos', function ($query) {
            $query->select(
                'subModulos.id',
                'subModulos.modulo',
                'subModulos.enlace',
                'subModulos.direccion_icono'
            )->orderBy('subModulos.orden', 'asc')
                ->where('subModulos.estado', 1);
        }])->where('modulos.estado', 1)
            ->get();
    }
}
