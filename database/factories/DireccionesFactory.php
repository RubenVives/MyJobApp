<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\Direcciones;

$factory->define(Direcciones::class, function (Faker $faker) {

    return [
        'calle' => $faker->address()
    ];
});
