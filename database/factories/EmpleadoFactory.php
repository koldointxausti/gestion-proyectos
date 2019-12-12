<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Empleado;
use App\Departamento;
use Faker\Generator as Faker;

$factory->define(Empleado::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->firstName,
        'apellido'=>$faker->lastName,
        'email'=>$faker->email,
        'telefono'=>$faker->phoneNumber,
        'departamento_id'=> $faker->numberBetween($min = 1, $max = Departamento::count()),
    ];
});