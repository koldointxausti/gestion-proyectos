<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddJefeIdToDepartamento extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('departamentos')
            ->where('id', 1)
            ->update(['jefe_id' => 1]);

        DB::table('departamentos')
            ->where('id', 2)
            ->update(['jefe_id' => 2]);

        DB::table('departamentos')
            ->where('id', 3)
            ->update(['jefe_id' => 3]);
    }
}
