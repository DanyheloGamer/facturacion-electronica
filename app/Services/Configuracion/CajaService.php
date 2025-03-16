<?php

namespace App\Services\Configuracion;

use App\Models\Configuracion\Caja;
use Illuminate\Support\Facades\DB;

class CajaService
{
    protected Caja $cajaModel;
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        $this->cajaModel = new Caja();
    }

    public function getAllPagination(int $page = 1, int $paginacion, string $frase): ?object
    {
        $frase = ($frase) ? mb_strtoupper($frase, 'UTF-8') : "%";

        return $this->cajaModel->select(
            'id',
            'nombre',
            'numero',
            'ubicacion',
            'es_activo'
        )->where(function ($query) use ($frase) {
            $query->where(DB::raw("upper(nombre)"), 'like', '%' . $frase . '%');
        })->esActivo()
            ->paginate($paginacion ?? 10)
        ;
    }

    /**
     * @param array $datos
     * 
     * @return Caja
     */
    public function crearCaja(array $datos): Caja
    {
        return $this->cajaModel::create($datos);
    }
}