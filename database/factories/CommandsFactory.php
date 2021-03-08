<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Command;
use Faker\Generator as Faker;
$factory->define(Command::class, function (Faker $faker) {
    return [
        'address' => $faker->word('1', 'false'),
        'date' => $faker->dateTimeBetween('now', '2 years', 'utc'),
        'mode_payment' => $faker->numberBetween('1', '100'),
        'service' => $faker->numberBetween('1', '100'),
        'price' => $faker->numberBetween('1', '100'),
        'user_id'	=> $faker->numberBetween('1', '1000')
    ];
});
