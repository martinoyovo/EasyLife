<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Services;
use Faker\Generator as Faker;

$factory->define(Services::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence('nbWords = 2','variableNbWords = true'),
        'description' => $faker->paragraph('3', 'true'),
        'favourited' => $faker->randomElement('true', 'false'),
        'category_id' => $faker->numberBetween('1', '2000'),
    ];
});
