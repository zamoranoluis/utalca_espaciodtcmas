<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'email' => config('admin.email'),
            'nombres' => config('admin.nombres'),
            'apellidos' => config('admin.apellidos'),
            'habilitado' => true,
            'password' => Hash::make(config('admin.password')),
        ]);

        User::create([
            'email' => 'director@utalca.cl',
            'nombres' => 'Cesar',
            'apellidos' => 'Retamal',
            'habilitado' => true,
            'password' => Hash::make(config('admin.password')),
        ]);

        User::create([
            'email' => 'coordinadora@utalca.cl',
            'nombres' => 'Susana',
            'apellidos' => 'Lara',
            'habilitado' => true,
            'password' => Hash::make(config('admin.password')),
        ]);

        User::create([
            'email' => 'savialab@utalca.cl',
            'nombres' => 'Ana',
            'apellidos' => 'Fuentealba',
            'habilitado' => true,
            'password' => Hash::make(config('admin.password')),
        ]);

        User::create([
            'email' => 'desafiodtc@utalca.cl',
            'nombres' => 'Kevin',
            'apellidos' => 'Martinez',
            'habilitado' => true,
            'password' => Hash::make(config('admin.password')),
        ]);

        User::create([
            'email' => 'astrociencias1@utalca.cl',
            'nombres' => 'Daniela',
            'apellidos' => 'Olave',
            'habilitado' => true,
            'password' => Hash::make(config('admin.password')),
        ]);

        User::create([
            'email' => 'astrociencias2@utalca.cl',
            'nombres' => 'Claudio',
            'apellidos' => 'Tenreiro',
            'habilitado' => true,
            'password' => Hash::make(config('admin.password')),
        ]);
    }
}
