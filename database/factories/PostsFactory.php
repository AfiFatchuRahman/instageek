<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Post::class, function (Faker $faker) {
    $filepath = public_path('postimages');

    $randomId = App\Models\User::pluck('id');

	if(!File::exists($filepath)){
        File::makeDirectory($filepath);
    }

    return [
    	'user_id' => $randomId->random(),
        'photo' => $faker->image($filepath, $width = 640, $height = 480, 'cats', false),
        'caption' => $faker->text($maxNbChars = 200),
        'location' => $faker->streetName,
    ];
});