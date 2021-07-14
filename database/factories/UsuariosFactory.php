<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\UsuariosModel;
use Faker\Provider\es_ES\PhoneNumber;
use Faker\Generator as Faker;
use Faker\Generator;



$factory->define(UsuariosModel::class, function (Faker $faker) {
    $generator = new Generator();
    $numero = new PhoneNumber($generator);
    return [
        'email' => $faker->email(),
        'password' => $faker->password(),
        'nombre' => $faker->firstName(),
        'apellidos' => $faker->lastName(),
        'telefono' => $numero->phoneNumber()
    ];
});
