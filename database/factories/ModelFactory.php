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

/**
 * User
 */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name'           => $faker->name,
        'email'          => $faker->email,
        'password'       => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

/**
 * Todos
 */
$factory->define(App\Todo::class, function (Faker\Generator $faker) {
    return [
        'user_id'     => $faker->numberBetween(1,2),
        'name'        => $faker->sentence,
        'done'        => $faker->numberBetween(0,1),
        'description' => $faker->paragraph,
        'due'         => $faker->date,
    ];
});

/**
 * Profiles
 */
$factory->define(App\Profile::class, function (Faker\Generator $faker) {
    return [

        'user_id'   => 1,
        'gender'    => $faker->randomElement(['male', 'female']),
        'bio'       => $faker->paragraph(75),
        'phone'     => $faker->phoneNumber,
        'education' => $faker->paragraph(75),
        'skills'    => $faker->sentence,
        'work'      => $faker->sentence,
        'location'  => $faker->sentence,
    ];
});

/**
 * Products
 */
$factory->define(App\Product::class, function (Faker\Generator $faker) {
    return [
        'lang'        => $faker->randomElement(['en', 'es']),
        'name'        => $faker->sentence(10),
        'short_name'  => $faker->sentence(5),
        'description' => $faker->paragraph(50),
        'specs'       => $faker->paragraph(50),
    ];
        
});
