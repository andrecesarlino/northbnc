<?php

use Faker\Generator as Faker;

$factory->define(\App\Location::class, function (Faker $faker) {
    return [
        'city' => $faker->city,
        'address' => $faker->address,
        'state' => $faker->streetAddress,
        'cep' => $faker->randomNumber('5'),
        'country' => $faker->country
    ];
});