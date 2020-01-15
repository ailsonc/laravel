<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Funcionarios;
use Faker\Generator as Faker;

$factory->define(Funcionarios::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'cidade' => $faker->city,
        'pais' => 'Brasil'
    ];
});
