<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Post::class, function (Faker $faker) {
    $filepath = storage_path('postimages');

    $randomId = App\Models\User::pluck('id');

	if(!File::exists($filepath)){
        File::makeDirectory($filepath);
    }

    return [
    	'user_id' => $randomId->random(),
        'photo' => $faker->image($filepath, 400, 300),
        'caption' => $faker->text($maxNbChars = 200),
        'location' => $faker->streetName,
    ];
});
