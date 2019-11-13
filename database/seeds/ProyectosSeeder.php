<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProyectosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proyectos')->insert([
            'nombre' => 'Boulevard',
            'titulo' => 'Boulevard (titulo)',
            'fechainicio' =>  Carbon::parse('2019-01-16'),
            'fechafin' =>  Carbon::parse('2000-01-24'),
            'horasestimadas' => 10
        ]);
        DB::table('proyectos')->insert([
            'nombre' => 'Txingudi',
            'titulo' => 'Txingudi (titulo)',
            'fechainicio' =>  Carbon::parse('2019-08-22'),
            'fechafin' =>  Carbon::parse('2019-09-02'),
            'horasestimadas' => 15
        ]);
        DB::table('proyectos')->insert([
            'nombre' => 'Garbera',
            'titulo' => 'Garbera (titulo)',
            'fechainicio' =>  Carbon::parse('2018-12-28'),
            'fechafin' =>  Carbon::parse('2019-01-03'),
            'horasestimadas' => 20
        ]);
        DB::table('proyectos')->insert([
            'nombre' => 'Urbil',
            'titulo' => 'Urbil (titulo)',
            'fechainicio' =>  Carbon::parse('2019-10-16'),
            'fechafin' =>  Carbon::parse('2020-01-1'),
            'horasestimadas' => 100
        ]);
        DB::table('proyectos')->insert([
            'nombre' => 'Decathlon',
            'titulo' => 'Decathlon (titulo)',
            'fechainicio' =>  Carbon::parse('2019-07-16'),
            'fechafin' =>  Carbon::parse('2019-07-19'),
            'horasestimadas' => 17
        ]);
    }
}
