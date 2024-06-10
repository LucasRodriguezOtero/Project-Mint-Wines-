<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrador',
            'apellido' => 'Administrador',
            'email' => 'adm@mintwines.com',
            'password' => Hash::make('12345678'),
            'rol_id' => '1',
        ]);

        User::create([
            'name' => 'Content Manager',
            'apellido' => 'Content Manager',
            'email' => 'contentmanager@mintwines.com',
            'password' => Hash::make('12345678'),
            'rol_id' => '2',
        ]);

        User::create([
            'name' => 'Cliente',
            'apellido' => 'Cliente',
            'email' => 'cliente@gmail.com',
            'password' => Hash::make('12345678'),
            
        ]);

        
        User::create([
            'name' => 'Lucas',
            'apellido' => 'Rodriguez',
            'email' => 'lucasmrodriguezotero@gmail.com',
            'password' => Hash::make('12345678'),
            
        ]);
       
    }
}
