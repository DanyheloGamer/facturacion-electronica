<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $empleado = DB::table('empleados')->select('id')
            ->where('dni', '00000000')->value('id');

        User::firstOrCreate([
            'empleado_id' => $empleado,
            'name' => 'admin',
            'email' => 'admin@me.com',
            'password' => Hash::make('admin'),
            'profile_photo_path' =>  'usuarios/man_default.svg'
        ]);
    }
}
