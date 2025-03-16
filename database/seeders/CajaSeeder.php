<?php

namespace Database\Seeders;

use App\Models\Configuracion\Caja;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CajaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Caja::firstOrCreate(['nombre' => 'CAJA PRINCIPAL', 'numero' => 1]);
        Caja::firstOrCreate(['nombre' => 'CAJA SECUNDARIA', 'numero' => 1]);
    }
}
