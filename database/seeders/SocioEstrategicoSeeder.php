<?php

namespace Database\Seeders;

use App\Models\Entidad;
use App\Models\SocioEstrategico;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SocioEstrategicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $entidad = Entidad::where('nombre', config('entidad.nombre'))->first();
        if ($entidad) {
            SocioEstrategico::create([
                'id' => Str::uuid(),
                'nombre' => 'Vinculación con el Medio, Universidad de Talca',
                'url' => 'https://www.vinculacion.utalca.cl/',
                'entidad_id' => $entidad->id,
            ]);

            SocioEstrategico::create([
                'id' => Str::uuid(),
                'nombre' => 'Agencia Nacional de Investigación y Desarrollo, Gobierno de Chile',
                'url' => 'https://anid.cl/',
                'entidad_id' => $entidad->id,
            ]);

            SocioEstrategico::create([
                'id' => Str::uuid(),
                'nombre' => 'Red de Innovación Transdisciplinaria, Universidad de Talca',
                'url' => 'https://www.instagram.com/redit_utalca/',
                'entidad_id' => $entidad->id,
            ]);

            SocioEstrategico::create([
                'id' => Str::uuid(),
                'nombre' => 'Dirección de Innovación y Transferencia, Universidad de Talca',
                'url' => 'https://www.instagram.com/ditutalca/',
                'entidad_id' => $entidad->id,
            ]);
        }
    }
}
