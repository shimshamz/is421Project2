<?php

use Faker\Generator as Faker;

$factory->define(\App\Car::class, function (Faker $faker) {
    return [
        'make' => $faker->randomElement($array = array ('Ford','Honda','Toyota')),
        'model' => $faker->lastName,
        'year' => $faker->numberBetween($min = 1885, $max = 2018),
    ];
});
