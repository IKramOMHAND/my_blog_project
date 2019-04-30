<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
-------------------------------------------------------------------------
| Laravel  permet de définir un ensemble d'attributs par défaut pour chacun de vos modèles | Eloquent à l' aide de fabriques de modèles/ 
*/
/** @var \Illuminate\Database\Eloquent\Factory $factory */


/* Faker est une bibliothèque PHP qui génère de fausses données afin d' amorcer notre base de données,
*/

	$factory->define(App\User::class, function (Faker $faker) {

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 
        'remember_token' => str_random(10),
    ];
});
