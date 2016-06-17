<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->safeEmail,
        'password' => bcrypt('password'),
        'remember_token' => str_random(10),
        'is_admin' => false,
    ];
});

$factory->define(App\Punto::class, function (Faker\Generator $faker) {
    return [
        'descripcion' => $faker->streetName,
        'tipo' => 'intermedio',
    ];
});

$factory->define(App\Ruta::class, function (Faker\Generator $faker) {
    return [
        'descripcion' => $faker->streetAddress,
        'pasaje' => $faker->randomFloat(3, 0, 150),
    ];
});


$factory->define(App\Empresa::class, function (Faker\Generator $faker) {
    return [
        'descripcion' => $faker->company,
    ];
});

$factory->define(App\Sugerencia::class, function (Faker\Generator $faker) {
    return [
        'descripcion' => $faker->text(100),
    ];
});
