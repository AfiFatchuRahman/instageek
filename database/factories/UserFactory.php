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

$factory->define(App\Models\User::class, function (Faker $faker) {
    static $password;

    $filepath = public_path('avatars');

    if(!File::exists($filepath)){
        File::makeDirectory($filepath);
    }

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'username' => $faker->unique()->userName,
        'bio' => $faker->text($maxNbChars = 200),
        'website' => $faker->url,
        'phone' => $faker->phoneNumber,
        'sex' => $faker->randomElement(['M','F','O']),
        'profile_picture' => $faker->image($filepath, 400, 300),
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

