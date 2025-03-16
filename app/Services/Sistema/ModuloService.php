<?php

declare(strict_types=1);

namespace App\Services\Sistema;

use App\Models\Sistema\Modulo;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class ModuloService
{
    protected Modulo $moduloModel;

    public function __construct()
    {
        $this->moduloModel = new Modulo();
    }

    /**
     * @return object|null
     */
    public function getActiveModulos(): ?object
    {
        return $this->moduloModel
            ->with(['subModulos' => function ($query) {
                $query->select('id', 'modulo', 'enlace', 'direccion_icono', 'referencia', 'padre')
                    ->orderBy('orden', 'ASC')
                    ->orderBy('id', 'ASC');
            }])
            ->select(
                'modulos.id',
                'modulos.modulo',
                'modulos.enlace',
                'modulos.direccion_icono',
                'modulos.referencia',
                'modulos.padre'
            )
            ->where('modulos.estado', 1)
            ->where('padre', 1)
            ->orderBy('modulos.orden', 'ASC')
            ->orderBy('modulos.id', 'ASC')
            ->get()
        ;
    }
}
