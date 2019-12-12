<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EmpleadoProyectoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empleado_proyecto')->insert([
            'empleado_id'=>1,
            'proyecto_id'=>1,
            'fechainicio'=>Carbon::parse('2019-07-23'),
            'fechafin'=>Carbon::parse('2020-07-23')
        ]);
        DB::table('empleado_proyecto')->insert([
            'empleado_id'=>1,
            'proyecto_id'=>2,
            'fechainicio'=>Carbon::parse('2016-10-16'),
            'fechafin'=>Carbon::now()
        ]);
        DB::table('empleado_proyecto')->insert([
            'empleado_id'=>1,
            'proyecto_id'=>3,
            'fechainicio'=>Carbon::parse('2015-02-10'),
            'fechafin'=>Carbon::parse('2020-01-03')
        ]);
        DB::table('empleado_proyecto')->insert([
            'empleado_id'=>2,
            'proyecto_id'=>1,
            'fechainicio'=>Carbon::parse('2018-04-20'),
            'fechafin'=>Carbon::now()
        ]);
    }
}
