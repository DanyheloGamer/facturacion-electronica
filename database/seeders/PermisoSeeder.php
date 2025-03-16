<?php

namespace Database\Seeders;

use App\Models\Sistema\Permiso;
use App\Models\Sistema\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permiso1 = Permiso::firstOrCreate(['name' => 'Dashboard Inicio', 'slug' => 'dashboards.inicio']);
        $permiso2 = Permiso::firstOrCreate(['name' => 'Inicio Caja', 'slug' => 'caja.inicio']);
        $permiso3 = Permiso::firstOrCreate(['name' => 'Crear Caja', 'slug' => 'caja.crear']);
        $permiso4 = Permiso::firstOrCreate(['name' => 'EditarCaja', 'slug' => 'caja.editar']);
        $permiso5 = Permiso::firstOrCreate(['name' => 'Ver Caja', 'slug' => 'caja.mostrar']);
        $permiso6 = Permiso::firstOrCreate(['name' => 'Asignar Usuario Caja', 'slug' => 'caja.asignar-usuario']);
        $permiso7 = Permiso::firstOrCreate(['name' => 'Ver Transacciones Caja', 'slug' => 'caja.ver-transacciones']);

        $roleAdmin = Role::find(1);

        $roleAdmin->permisos()->sync([
            $permiso1->id,
            $permiso2->id,
            $permiso3->id,
            $permiso4->id,
            $permiso5->id,
            $permiso6->id,
            $permiso7->id
        ]);
    }
}
