<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
| ----------------------------------------------------- -------------------------
| Usines modèles
| ----------------------------------------------------- -------------------------
| Ce répertoire doit contenir chacune des définitions de fabrique de modèles pour
| ton application. Les usines constituent un moyen pratique de générer de nouvelles
| instances de modèle pour tester / amorcer la base de données de votre application.
|--------------------------------------------------------------------------------
|Laravel  permet de définir un ensemble d'attributs par défaut pour chacun de vos modèles |Eloquent à l' aide de fabriques de modèles/ 
*/

/* Faker est une bibliothèque PHP qui génère de fausses données afin d' amorcer notre base de données,
*/

	$factory->define(App\Post::class, function (Faker $faker) {
    $users =App\User::pluck('id')->toArray();
    return [
        //

        'post_author' => $faker->randomElement($users),
        'post_date' => now(),
        'post_content' => $faker->paragraph(),
        'post_titre' => $faker->sentence(),
        'post_status' => $faker->word(),
        'post_name' => $faker->word(),
        'post_type' => 'article',
        'post_categorie' => '',
    ];
});