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


// Dans tinker :
// $threads = factory('App\Thread', 50)->create();

// $threads->each(function($thread) { 
// 			factory('App\Reply',10)->create(['create_id' => $threads->id]) ;
//          })

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Company::class, function (Faker $faker) {
	return [
		'designation' => $faker->word
	];
});


$factory->define(App\Ressource::class, function (Faker $faker) {
	return [
		'user_id' => function() {
			return factory('App\User')->create()->id;
		},
		'company_id' => function() {
			return factory('App\Company')->create()->id;
		},
		'designation' => $faker->word
	];
});