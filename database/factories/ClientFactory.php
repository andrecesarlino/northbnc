<?php

use Faker\Generator as Faker;

$factory->define(\App\Client::class, function (Faker $faker) {
    return [
        'name' => $faker->name('1'),
        'surName' => $faker->name('1'),
        'cpfCnpj' => $faker->randomNumber('9'),
        'rg' => $faker->randomNumber('9'),
        'dateBorn' => $faker->dateTimeThisMonth(),
        'dateAdmission' => $faker->dateTimeThisMonth(),
        'photo' => $faker->sentence('1')
    ];
});