<?php

namespace App\Traits;

trait HasActiveTrait
{
    public function scopeEsActivo($query)
    {
        return $query->where('es_activo', 1);
    }

    public function scopeEsInactivo($query)
    {
        return $query->where('es_activo', 0);
    }

    public function activar()
    {
        return $this->update(['es_activo' => 1]);
    }

    public function desactivar()
    {
        return $this->update(['es_activo' => 0]);
    }
}
