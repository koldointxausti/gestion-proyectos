<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DepartamentosSeeder::class);
        $this->call(EmpleadosSeeder::class);
        $this->call(ProyectosSeeder::class);
        $this->call(EmpleadoProyectoSeeder::class);
    }
}
