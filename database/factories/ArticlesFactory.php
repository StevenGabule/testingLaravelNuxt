<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Articles;
use Faker\Generator as Faker;

$factory->define(Articles::class, static function (Faker $faker) {
    return [
        'title' => $faker->title,
        'body' => $faker->sentence
    ];
});
