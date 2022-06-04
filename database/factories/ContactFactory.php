<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contant;
use Faker\Generator as Faker;

$factory->define(\App\Contant::class, function (Faker $faker) {
    return [

        'name' => $faker->name,
        'email' => $faker->email,
        'subject' => $faker->sentence,
        'message' => $faker->word(),
        'ip' => $faker->ipv4


    ];
});
