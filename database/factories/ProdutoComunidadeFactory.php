<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ProdutoComunidade;
use Faker\Generator as Faker;

$factory->define(ProdutoComunidade::class, function (Faker $faker) {
    return [
        'produto_id' => $faker->numberBetween(1, 20),
        'comunidade_id' => $faker->numberBetween(1, 10),
        'estoque' => $faker->numberBetween(10, 30),
        'preco' => $faker->randomFloat(2, 70, 120),
        'comissao' => $faker->randomFloat(2, 5, 12),
    ];
});
