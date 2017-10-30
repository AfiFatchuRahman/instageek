<?php

use Faker\Generator as Faker;

$factory->define(App\Models\BlacklistKeyword::class, function (Faker $faker) {
    
    $userIds = App\Models\User::pluck('id');

    return [
        'user_id' => $userIds->random(),
        'keywords' => $faker->word
    ];
});