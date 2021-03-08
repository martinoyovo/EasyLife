<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Plublicites;
use Faker\Generator as Faker;


$factory->define(Plublicites::class, function (Faker $faker) {
    return [
        'url' => $faker->imageUrl('width= 800', 'height= 600'),
        'title' => $faker->word('3', 'false')
    ];
});
