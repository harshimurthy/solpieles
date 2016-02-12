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
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Todo::class, function (Faker\Generator $faker) {
    return [
        'user_id' => $faker->numberBetween(1,2),
        'name' => $faker->sentence,
        'done' => $faker->numberBetween(0,1),
        'description' => $faker->paragraph,
        'due' => $faker->date,
    ];
});

$factory->define(App\Product::class, function (Faker\Generator $faker) {
    return [
        'lang' => $faker->randomElement(['en', 'es']),
        'slug' => $faker->sentence,
        'name' => $faker->sentence,
        'summary' => $faker->sentence(20),
        'description' => $faker->text(800)
    ];
        
});
