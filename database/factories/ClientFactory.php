<?php

use Faker\Generator as Faker;

$factory->define(\App\Client::class, function (Faker $faker) {
    return [
        'nameCompany' => $faker->company,
        'nameContact' => $faker->name('1'),
        'titleContact' => $faker->sentence('2'),
        'address' => $faker->address,
        'city' => $faker->city,
        'region' => $faker->sentence('1'),
        'zipCode' => $faker->randomNumber('8'),
        'country' => $faker->country,
        'phone' => $faker->phoneNumber,
        'fax' => $faker->phoneNumber,
    ];
});
