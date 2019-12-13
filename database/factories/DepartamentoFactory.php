<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Departamento;
use App\Empleado;
use Faker\Generator as Faker;

$factory->define(Departamento::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->jobTitle,
    ];
});
