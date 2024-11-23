<?php

namespace Database\Seeders;

use App\Models\LineaDeTrabajo;
use App\Models\RolLineaDeTrabajo;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RolLineaDeTrabajoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $truckLab = LineaDeTrabajo::where('nombre', 'TruckLab')->first();
        // acá iría el email final de la coordinadora
        $coordinadorTruckLab = User::where('nombres', 'Susana')
            ->where('apellidos', 'Lara')
            ->first();

        if ($coordinadorTruckLab && $truckLab) {
            RolLineaDeTrabajo::create([
                'id' => Str::uuid(),
                'user_id' => $coordinadorTruckLab->id,
                'lineadetrabajo_id' => $truckLab->id,
                'rol' => 'coordinador/a',
            ]);
        }

        $astrociencias = LineaDeTrabajo::where('nombre', 'Astrociencias')->first();
        $coordinadorAstro1 = User::where('nombres', 'Daniela')
            ->where('apellidos', 'Olave')
            ->first();
        $coordinadorAstro2 = User::where('nombres', 'Claudio')
            ->where('apellidos', 'Tenreiro')
            ->first();

        if ($astrociencias && $coordinadorAstro1 && $coordinadorAstro2) {
            RolLineaDeTrabajo::create([
                'id' => Str::uuid(),
                'user_id' => $coordinadorAstro1->id,
                'lineadetrabajo_id' => $astrociencias->id,
                'rol' => 'coordinador/a',
            ]);

            RolLineaDeTrabajo::create([
                'id' => Str::uuid(),
                'user_id' => $coordinadorAstro2->id,
                'lineadetrabajo_id' => $astrociencias->id,
                'rol' => 'coordinador/a',
            ]);
        }

        $desafio = LineaDeTrabajo::where('nombre', 'Desafio DTC')->first();
        $coordinadorDesafio = User::where('nombres', 'Kevin')
            ->where('apellidos', 'Martinez')
            ->first();

        if ($desafio && $coordinadorDesafio) {
            RolLineaDeTrabajo::create([
                'id' => Str::uuid(),
                'user_id' => $coordinadorDesafio->id,
                'lineadetrabajo_id' => $desafio->id,
                'rol' => 'coordinador/a',
            ]);
        }

        $savialab = LineaDeTrabajo::where('nombre', 'Savialab')->first();
        $coordinadorSavialab = User::where('nombres', 'Ana')
            ->where('apellidos', 'Fuentealba')
            ->first();

        if ($savialab && $coordinadorSavialab) {
            RolLineaDeTrabajo::create([
                'id' => Str::uuid(),
                'user_id' => $coordinadorSavialab->id,
                'lineadetrabajo_id' => $savialab->id,
                'rol' => 'coordinador/a',
            ]);
        }

    }
}
