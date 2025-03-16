<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Empresa;
use Illuminate\Support\Facades\Auth;

class EmpresaService
{
    private Empresa $empresaModel;

    public function __construct()
    {
        $this->empresaModel = new Empresa();
    }

    /**
     * @param string $ruc                                                                               
     * 
     * @return object|null
     */
    public function getByRuc(string $ruc): ?object
    {
        return $this->empresaModel->where('ruc', $ruc)->first();
    }
}
