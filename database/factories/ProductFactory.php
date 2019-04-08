<?php

use Faker\Generator as Faker;

$factory->define(\App\Product::class, function (Faker $faker) {
    return [
        'nameProduct' => $faker->name('1'),
        'quantidade' => $faker->randomNumber('2'),
        'precoUnitario' => $faker->randomNumber('2'),
        'UnidadeEmEstoque' => $faker->randomNumber('2'),
        'UnidadeEmOrdem' => $faker->randomNumber('2'),
        'NivelDeReposicao' => $faker->randomNumber('2'),
        'descontinuado' => $faker->randomNumber('8'),
    ];
});
