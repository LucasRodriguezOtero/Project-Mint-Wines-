<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Rol::create([
            'rol_name' => 'Administrador',
            'function' => 'Control total de la pagina',   
        ]);
        Rol::create([
            'rol_name' => 'Content Manager',
            'function' => 'Control del contenido',   
        ]);
        Rol::create([
            'rol_name' => 'Cliente',
            'function' => 'Solo compras, acceso limitado',   
        ]);
        
}
}