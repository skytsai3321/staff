<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Depart;
use Faker\Generator as Faker;

$factory->define(Depart::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
