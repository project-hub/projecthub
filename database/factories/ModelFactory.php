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

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName($gender = null|'male'|'female'),
        'last_name' => $faker->lastName,
        'company_name' => $faker->company,
        'address' => $faker->streetAddress,
        'city' => $faker->city,
        'state' => $faker->stateAbbr,
        'zip_code' => $faker->postcode,
        'email' => $faker->safeEmail,
        'employer' => $faker->boolean($chanceOfGettingTrue = 50),
        'content' => $faker->paragraphs(3, true),
        'linkedin_id' => $faker->url,
        'github' => $faker->url,
        'website' => $faker->url,
        'image' => $faker->imageUrl($width = 400, $height = 300),
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Post::class, function (Faker\Generator $faker) {
    return [
    	'created_by' => App\Models\User::all()->random()->id,
    	'title' => $faker->words(6, true),
    	'content' => $faker->paragraphs(3, true),
    	'on_site' => $faker->boolean($chanceOfGettingTrue = 50),
    ];
});