<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Proyecto;
use App\Empleado;
use Faker\Generator as Faker;

$factory->define(Proyecto::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->catchPhrase,
        'titulo'=>$faker->sentence(5),
        'fechainicio'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'fechafin'=>$faker->date($format = 'Y-m-d', $min = 'now'),
        'horasestimadas'=>$faker->randomDigit,
        'empleado_id'=>$faker->numberBetween($min = 1, $max = Empleado::count()),
    ];
});
