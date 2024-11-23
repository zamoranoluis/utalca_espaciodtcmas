<?php

namespace Database\Seeders;

use App\Models\Entidad;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EntidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Entidad::create([
            'id' => Str::uuid(),
            'nombre' => 'Espacio DTC+',
            'descripcion' => 'Espacio DTC+, es un lugar de encuentro y divulgación científica ubicado en la Facultad de Ingeniería de la Universidad de Talca (Campus Curicó), cuyo objetivo es aportar en la disminución de brechas educativas en la comunidad, así como promover el desarrollo de competencias científicas y tecnológicas transversales, por medio de la aplicación de metodologías y estrategias de aprendizaje innovadoras, enfocadas en la motivación y el incentivo de talentos científicos y tecnológicos, así como de emprendimiento.\nEstá dirigido a toda la comunidad educativa, profesores, asistentes de la educación, paradocentes, padres y apoderados de la región del Maule.',
            'slogan' => 'Un espacio donde potenciar ciencia y tecnología',
            'email' => 'espaciodtc@utalca.cl',
            'instagram' => 'https://www.instagram.com/espaciodtc.utalca/',
            'telefono' => '752201820',
            'ubicacion_nombre' => 'Camino a Los Niches Km 1. Curicó',
            'ubicacion_latitud' => -35.00258087993075,
            'ubicacion_longitud' => -71.2305552357567,
        ]);
    }
}
