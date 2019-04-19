<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
| ----------------------------------------------------- -------------------------
| Usines modèles
| ----------------------------------------------------- -------------------------
|
| Ce répertoire doit contenir chacune des définitions de fabrique de modèles pour
| ton application. Les usines constituent un moyen pratique de générer de nouvelles
| instances de modèle pour tester / amorcer la base de données de votre application.
|
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



/*
<? php
utilisez  Illuminate \ Support \ Str ;
utilisez  Faker \ Generator en  tant que  Faker ;

$ factory -> define ( App \ Post :: classe , fonction ( Faker  $ faker ) {
    $ users  =  App \ User :: pluck ( ' id ' ) -> toArray ();
    retour [
        ' post_author '  =>  $ faker -> randomElement ( $ utilisateurs ),
        ' post_date '  => maintenant (),
        ' post_content '  =>  $ faker -> paragraph (),
        ' post_title '  =>  $ faker -> phrase (),
        ' post_name '  =>  $ faker -> word (),
        ' post_type '  =>  ' article ' ,
    ];
});

shamas table posts
 Schema::create('posts', function (Blueprint $table) {// le model est une classee liée au model portant le meme nom . 
            $table->bigInteger('id', true)->unsigned();
            $table->unsignedInteger('post_author');
            $table->timestamp('post_date')->default(DB::raw('CURRENT_TIMETAMP'));
            $table->text('post_content');
            $table->text('post_titre');
            $table->String('post_status',20)->default('publish');
            $table->String('post_name',200)->default('');
            $table->String('post_type',20)->default('article');
            $table->String('post_categorie')->nullable;

            $table->foreign('post_author')->references('id')->on('users');



Chercher combinaison entre les deux 
*/