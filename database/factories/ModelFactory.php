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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
//factory para llenar la tabla usuarios
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


//factory para llenar la tabla tickets
$factory->define(App\Ticket::class, function (Faker\Generator $faker) {
    
    return [
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'content' => $faker->text($maxNbChars = 30),
        'slug' => $faker->slug,
        'status' => $faker->randomElement([0,1,]),
        'user_id' => $faker->biasedNumberBetween($min = 1, $max = 40, $function = 'sqrt'),
        
    ];
});




