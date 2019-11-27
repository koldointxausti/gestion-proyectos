<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Departamento;

class DepartamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Departamento::class,3)->create();
        /*
        DB::table('departamentos')->insert([
            'nombre' => 'Informática'
        ]);
        DB::table('departamentos')->insert([
            'nombre' => 'Turismo'
        ]);
        DB::table('departamentos')->insert([
            'nombre' => 'Administración'
        ]);
        */
    }
}
