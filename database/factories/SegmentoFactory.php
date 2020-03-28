<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Segmento;
use Faker\Generator as Faker;

$factory->define(Segmento::class, function (Faker $faker) {
    return [
        'descricao' => $faker->unique()->word()
    ];
});
