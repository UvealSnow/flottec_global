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
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
    	'status' => 'blocked',
    	'type' => 'user',
        'name' => $faker->name,
        'company' => $faker->company,
        'telephone' => $faker->phoneNumber,
        'locale' => 'en',
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Post::class, function (Faker\Generator $faker) {

	return [
		'user_id' => 4,
		'title' => $faker->streetName,
		'body' => $faker->paragraphs(3, true),
	];

});

$factory->define(App\File::class, function (Faker\Generator $faker) {

	return [
		'post_id' => 1,
		'original_name' => str_replace(' ', '_', strtolower($faker->streetName)).'.pdf',
		'file' => 'research/'.strtolower(str_random(10)).'.pdf',
	];

});
