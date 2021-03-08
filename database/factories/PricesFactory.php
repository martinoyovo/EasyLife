<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Prices;
use Faker\Generator as Faker;

$factory->define(Prices::class, function (Faker $faker) {
    return [
    	'item' => $faker->word('1', 'false')
        //
    ];
});
