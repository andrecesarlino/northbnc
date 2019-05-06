<?php

use Faker\Generator as Faker;

$factory->define(\App\Contact::class, function (Faker $faker) {
    return [
        'email' => $faker->email,
        'fax' => $faker->phoneNumber,
        'phone' => $faker->phoneNumber
    ];
});
