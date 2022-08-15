<?php

namespace Database\Seeders;

use App\Models\Carreras;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('VME@296-u'), // password
            'remember_token' => Str::random(10),
        ])->assignRole('Admin');
        
        Carreras::create([
            'id_carreras' => '1',
            'Nombre' => 'Tecnologías de la Información y Comunicación.',
        ]);
        Carreras::create([
            'id_carreras' => '2',
            'Nombre' => 'Mecatrónica.',
        ]);
        Carreras::create([
            'id_carreras' => '3',
            'Nombre' => 'Tecnologías Bioalimentarias.',
        ]);
        Carreras::create([
            'id_carreras' => '4',
            'Nombre' => 'Gestión de Proyectos.',
        ]);
        Carreras::create([
            'id_carreras' => '5',
            'Nombre' => 'Mantenimiento Industrial.',
        ]);
        Carreras::create([
            'id_carreras' => '6',
            'Nombre' => 'Desarrollo e Innovación Empresarial.',
        ]);
        Carreras::create([
            'id_carreras' => '7',
            'Nombre' => 'Civil.',
        ]);

    }
}
