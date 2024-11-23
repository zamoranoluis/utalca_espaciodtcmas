<?php

namespace Database\Seeders;

use App\Models\Entidad;
use App\Models\LineaDeTrabajo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LineaDeTrabajoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $espacio = Entidad::where('nombre', 'Espacio DTC+')->first();
        if ($espacio) {

            LineaDeTrabajo::create([
                'id' => Str::uuid(),
                'nombre' => 'Desafio DTC',
                'descripcion_corta' => 'Este concurso anual busca incentivar a estudiantes de séptimo a cuarto medio en ciencia y tecnología mediante una formación práctica y complementaria a la educación en aula. Promueve el aprendizaje colaborativo y la aplicación de conocimientos en un entorno multidisciplinario, destacando la ciencia y tecnología como recursos prácticos y entretenidos. La meta es despertar el interés de los jóvenes en estos campos, ayudándoles a descubrir sus capacidades e intereses.',
                'descripcion_larga' => 'Concurso científico-tecnológico anual diseñado para incentivar en los jóvenes de séptimo básico a cuarto medio la exploración y comprensión de la ciencia y la tecnología desde una perspectiva práctica. Este concurso fomenta el aprendizaje activo a través de una formación paralela que permite a los estudiantes aplicar y profundizar lo aprendido en el aula.\nEste tiene como objetivo demostrar que la ciencia y la tecnología son mucho más que herramientas; son un puente hacia la colaboración efectiva, el trabajo en equipo multidisciplinario y la conexión con su entorno. A través de este desafío, los participantes tienen la oportunidad de descubrir sus capacidades e intereses, desarrollando habilidades clave mientras trabajan en un objetivo común.\nLa iniciativa busca despertar el interés de los estudiantes por estas áreas, mostrando que aprender ciencia y tecnología puede ser tanto práctico como entretenido, siempre que se haga de manera metódica y estructurada. Así, el Desafío DTC no solo es una competencia, sino también un espacio de vinculación y descubrimiento personal y colectivo.',
                'slogan' => 'Implementa soluciones con ingenio',
                'entidad_id' => $espacio->id,
                'interna' => true,
                'publica' => true,
            ]);

            LineaDeTrabajo::create([
                'id' => Str::uuid(),
                'nombre' => 'TruckLab',
                'descripcion_corta' => 'TruckLab es un laboratorio móvil que recorre la Región del Maule y otras zonas, brindando a estudiantes y docentes la oportunidad de realizar experimentos científicos con el apoyo de la Universidad de Talca. Equipado con diversos instrumentos, el proyecto fomenta habilidades científicas y cierra brechas educativas. Desde 2017, ha beneficiado a más de 20,000 estudiantes mediante actividades prácticas alineadas con el currículo de ciencias.',
                'descripcion_larga' => 'TruckLab corresponde al diseño e implementación de un laboratorio científico móvil para desarrollar habilidades científicas y valoración del entorno para estudiantes y docentes de establecimientos escolares de enseñanza media en la Región del Maule.\nEl objetivo de este proyecto es recorrer cada rincón de la Región con un laboratorio totalmente equipado para ser utilizado por profesores de ciencia y tecnología, este laboratorio se ha diseñado pensando en las necesidades de los docentes e instituciones educativas. Para ello cuenta con un equipo de profesionales de la Universidad de Talca que realizan actividades experimentales con el profesor del establecimiento pudiendo lograr así coeducación entre profesor de aula y académicos de la Universidad de Talca lo que permite disminuir las brechas educacionales existentes en la Región del Maule.\nEntre el material a bordo se cuenta con microscopios ópticos, pizarra interactiva, kit de circuitos eléctricos, generador de funciones, osciloscopio, estufa de cultivo, balanza de precisión, set de espejos y lentes, material de vidrio, reactivos, imanes, diapasones, dinamómetros, set de disección, sensores, micropipeta, refractómetros, placas solares, televisor, proyector, etc. además de un libro con un set de 48 fichas metodológicas de actividades experimentales que cubren la totalidad de las unidades temáticas del currículum de enseñanza media de biología, química y física.\nDesde el año 2017 el camión ha recorrido más de 30.000 km llegando a todas las comunas de la Región del Maule, 8 comunas de la Región de O’Higgins, 6 comunas de la Región de Los Lagos y 4 comunas de la región metropolitana. Participando en total más de 20.000 estudiantes del sistema escolar acompañados de sus profesores de ciencias, realizando actividades experimentales de forma lúdica asociada a alguno de los contenidos del currículo propuesto por el Ministerio de Educación.',
                'slogan' => 'Tecnociencia sobre ruedas',
                'entidad_id' => $espacio->id,
                'interna' => true,
                'publica' => true,
            ]);

            LineaDeTrabajo::create([
                'id' => Str::uuid(),
                'nombre' => 'Astrociencias',
                'descripcion_corta' => 'La iniciativa de astrociencias busca despertar el interés en ciencia y astronomía en estudiantes desde una edad temprana, brindándoles herramientas y espacios para explorar conceptos astronómicos teóricos y prácticos. A través de alianzas con instituciones educativas y organizaciones científicas, facilita el acceso a equipos y conocimientos especializados. Además, promueve la divulgación científica mediante eventos y talleres comunitarios para sensibilizar sobre la importancia de la astronomía en la sociedad.',
                'descripcion_larga' => 'En un mundo cada vez más tecnológico y globalizado, es fundamental despertar y cultivar el interés de los estudiantes por la ciencia y la astronomía desde temprana edad\nLa iniciativa de astrociencias busca proporcionar herramientas y espacios de aprendizaje que permitan a los estudiantes explorar y experimentar conceptos astronómicos tanto teóricos como prácticos, estableciendo con instituciones educativas, organizaciones científicas y astronómicas, generando redes de apoyo y recursos para facilitar el acceso a equipos científicos, tecnológicos y conocimientos especializados, tanto dentro como fuera del entorno escolar.\nLa iniciativa también pretende enfocarse en la divulgación científica, promoviendo eventos, talleres y charlas educativas abiertas a la comunidad, con el propósito de sensibilizar y generar conciencia sobre la importancia de la astronomía en nuestra sociedad.',
                'slogan' => 'La astronomía como nunca te la han enseñado',
                'entidad_id' => $espacio->id,
                'interna' => true,
                'publica' => true,
            ]);

            LineaDeTrabajo::create([
                'id' => Str::uuid(),
                'nombre' => 'Savialab',
                'descripcion_corta' => 'SaviaLab, financiado por la Fundación para la Innovación Agraria y ejecutado en la Región del Maule por la Universidad de Talca, promueve la innovación temprana en estudiantes de zonas rurales mediante proyectos creativos en agricultura. El programa tiene una fase formativa basada en la metodología SaviaLab y un concurso donde los estudiantes presentan sus proyectos a jurados expertos, premiando las propuestas más innovadoras.',
                'descripcion_larga' => 'SaviaLab es un programa financiado por FIA (Fundación para la innovación agraria) que busca fomentar la innovación temprana en estudiantes de establecimientos del mundo rural, brindándoles la oportunidad de desarrollar proyectos creativos y soluciones innovadoras en el ámbito agrícola, promoviendo el espíritu emprendedor desde las etapas educativas iniciales. En la región del Maule, este programa es ejecutado por la Facultad de Ingeniería de la Universidad de Talca.\nEl programa Savialab consta de dos fases, la primera es de caracter formativa la cual se trabaja bajo la metodología Savilab que implica seis etapas (preparación, contexto, oportunidad, idea, prototipo y comunicación). La segunda fase es un concurso en donde cada grupo expone a jurados expertos quienes evalúan y seleccionan los proyectos más innovadores en el área de agricultura, premiándose a estudiantes, profesores y colegios ganadores.',
                'slogan' => 'Innovación en el agro 4.0',
                'entidad_id' => $espacio->id,
                'interna' => true,
                'publica' => true,
            ]);

            LineaDeTrabajo::create([
                'id' => Str::uuid(),
                'nombre' => 'Facultad de Ingenieria',
                'descripcion_corta' => '',
                'descripcion_larga' => '',
                'slogan' => '',
                'entidad_id' => $espacio->id,
                'interna' => false,
                'publica' => false,
            ]);

            LineaDeTrabajo::create([
                'id' => Str::uuid(),
                'nombre' => 'DesafioKids',
                'descripcion_corta' => '',
                'descripcion_larga' => '',
                'slogan' => '',
                'entidad_id' => $espacio->id,
                'interna' => true,
                'publica' => false,
            ]);
        }
    }
}
