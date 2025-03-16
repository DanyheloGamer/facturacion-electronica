<?php

namespace Database\Seeders;

use App\Models\Sistema\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::firstOrCreate(['name' => 'Administrador', 'slug' => 'admin']);
        $role2 = Role::firstOrCreate(['name' => 'Almacen', 'slug' => 'almacen']);
        $role3 = Role::firstOrCreate(['name' => 'Cajero', 'slug' => 'vendedor']);
        $role4 = Role::firstOrCreate(['name' => 'Vendedor', 'slug' => 'vendedor']);

        $user = User::find(1);

        $user->roles()->sync($role1->id);

        $user->is_superuser = 1;
        if ($user->isDirty()) {
            $user->save();
        }
    }
}