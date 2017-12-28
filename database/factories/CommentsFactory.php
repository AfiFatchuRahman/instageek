<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Comment::class, function (Faker $faker) {
     
     $PostId = App\Models\Post::pluck('id');
     $UserId = App\Models\User::pluck('id');

    return [
        'user_id' => $UserId->random(),
        'post_id' => $PostId->random(),
        'comment' => $faker->text($maxNbChars = 100),
        'hide' => $faker->randomElement(['0','1']),
    ];
});