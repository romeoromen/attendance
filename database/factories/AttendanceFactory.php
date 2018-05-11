<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Attendance::class, function (Faker $faker) {
    return [
        'name'  => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'body'  => $faker->sentence,
    ];
});
