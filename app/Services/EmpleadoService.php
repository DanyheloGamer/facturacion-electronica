<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Empleado;

class EmpleadoService
{
    public function __construct(
        protected Empleado $empleadoModel
    ) {}

    /**
     * @param string $email1
     * 
     * @return object|null
     */
    public function getByEmail(string $email1): ?object
    {
        return $this->empleadoModel->where('email_1', $email1)->first();
    }
}
