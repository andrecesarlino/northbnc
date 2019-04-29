<?php

use Faker\Generator as Faker;

$factory->define(\App\Category::class, function (Faker $faker) {
    return [
        'nameCategory' => $faker->sentence('1'),
        'description' => $faker->sentence('2'),
        'figure' => $faker->sentence('1')
    ];
});
