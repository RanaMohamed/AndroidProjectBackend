<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {

    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'gender' => $faker->randomElement($array = array("male" , "female")),
        'fb_id' => $faker->uuid,
        'type' => $faker->randomElement($array = array("0" , "1")),
        'thing' => $faker->word,
        'remember_token' => str_random(10),
        'lat' => $faker->latitude,
        'lng' => $faker->longitude,
        'phone' => $faker->phoneNumber
    ];
});
