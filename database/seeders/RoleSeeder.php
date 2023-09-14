<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'rol' => 'admin',
            'fecha_creacion' => now(),
            'fecha_edicion' => now(),
            'usuario_creacion' => 'admin@admin',
            'usuario_edicion' => 'admin@admin'
        ]);

        Role::create([
            'rol' => 'usuario',
            'fecha_creacion' => now(),
            'fecha_edicion' => now(),
            'usuario_creacion' => 'empleado@empleado',
            'usuario_edicion' => 'empleado@empleado'
        ]);

        Role::create([
            'rol' => 'beta-tester',
            'fecha_creacion' => now(),
            'fecha_edicion' => now(),
            'usuario_creacion' => 'betatester@betatester',
            'usuario_edicion' => 'betatester@betatester'
        ]);
    }
}
