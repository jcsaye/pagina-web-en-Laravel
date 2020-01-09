<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Producto;
use Faker\Generator as Faker;

$factory->define(App\Producto::class, function (Faker $faker) {
    return [
        "nombre"=>$faker->text($maxNbChars = 15),
        "descripcion"=>$faker->text($maxNbChars=10),
        // "categoria"=>$faker->text($maxNbChars = 10),
        "stock"=>$faker->randomDigitNot(9),
        "precio"=>$faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL)

    ];
});
