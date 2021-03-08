<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'title' => $faker->word('1', 'false'),
        'image' => $faker->imageUrl('width= 800', 'height= 600'),
        'color' => $faker->hexColor,
    ];
});
