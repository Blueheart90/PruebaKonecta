<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Creamos los roles que sean necesarios

        Role::create([
            'id' => 1,
            'name' => 'Administrador',
            'description' => 'Tiene total manejo de la aplicacion',
        ]);

        Role::create([
            'id' => 2,
            'name' => 'Consultor',
            'description' => 'Tiene Permisos sólo al modulo de consulta',
        ]);
    }
}
