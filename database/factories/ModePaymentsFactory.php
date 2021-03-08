<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\ModePayments;
use Faker\Generator as Faker;

$factory->define(ModePayments::class, function (Faker $faker) {
    return [
        'payment_type' =>$faker->word('1', 'false'),
    ];
});
