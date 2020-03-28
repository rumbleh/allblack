<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Produto;
use Faker\Generator as Faker;

$factory->define(Produto::class, function (Faker $faker) {
    $imagem = $faker->file(storage_path('app/public/photos/'),  storage_path('app/public/uploads/'), false);
    $produto = $faker->unique()->numerify("Produto ###");

    return [
       'nome' => $produto,
       'custo' => $faker->randomFloat(2, 80, 150),
       'fator' => $faker->randomFloat(2, 10, 20),
       'foto' => $imagem,
        //$faker->image(storage_path('app/public/uploads/'), 300,300, 'cats', false, false, $produto)
    ];
});
