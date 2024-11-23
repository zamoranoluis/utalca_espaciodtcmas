<?php

namespace Database\Seeders;

use App\Models\Entidad;
use App\Models\RolEntidad;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RolEntidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $espacio = Entidad::where('nombre', 'Espacio DTC+')->first();

        $admin = User::where('email', config('admin.email'))->first();

        // acá, en producción, debería ir el email final del usuario director (CR)
        $directorEspacio = User::where('nombres', 'Cesar')
            ->where('apellidos', 'Retamal')
            ->first();

        $coordinadoraEspacio = User::where('nombres', 'Susana')
            ->where('apellidos', 'Lara')
            ->first();

        if ($espacio && $admin && $directorEspacio && $coordinadoraEspacio) {
            RolEntidad::create([
                'id' => Str::uuid(),
                'entidad_id' => $espacio->id,
                'user_id' => $admin->id,
                'rol' => 'administrador/a',
            ]);

            RolEntidad::create([
                'id' => Str::uuid(),
                'entidad_id' => $espacio->id,
                'user_id' => $directorEspacio->id,
                'rol' => 'director/a',
            ]);

            RolEntidad::create([
                'id' => Str::uuid(),
                'entidad_id' => $espacio->id,
                'user_id' => $coordinadoraEspacio->id,
                'rol' => 'coordinador/a general',
            ]);
        }

    }
}
