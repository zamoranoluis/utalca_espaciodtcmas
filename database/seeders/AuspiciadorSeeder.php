<?php

namespace Database\Seeders;

use App\Models\Auspiciador;
use App\Models\Entidad;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AuspiciadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $entidad = Entidad::where('nombre', config('entidad.nombre'))->first();
        if ($entidad) {
            Auspiciador::create([
                'id' => Str::uuid(),
                'nombre' => 'Isa Intervial',
                'url' => 'https://www.chile.isavias.com/',
                'entidad_id' => $entidad->id,
            ]);

            Auspiciador::create([
                'id' => Str::uuid(),
                'nombre' => 'Mechatronic Store',
                'url' => 'https://www.mechatronicstore.cl/',
                'entidad_id' => $entidad->id,
            ]);

            Auspiciador::create([
                'id' => Str::uuid(),
                'nombre' => 'Bioquimica.cl',
                'url' => 'https://www.bioquimica.cl/',
                'entidad_id' => $entidad->id,
            ]);

            Auspiciador::create([
                'id' => Str::uuid(),
                'nombre' => 'Prodelab',
                'url' => 'https://prodelab.cl/',
                'entidad_id' => $entidad->id,
            ]);
        }
    }
}
