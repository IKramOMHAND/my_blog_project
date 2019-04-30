<?php

use Illuminate\Support\Str; //  Ajouter le chemin str p crerer de classe 
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

/*
À partir de cette classe, nous allons  utiliser la méthode pour exécuter d'autres classes de départ, ce qui vous permet de contrôler l'ordre et nombre de création des diffirents données tests. 
*/
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()// fonction run qui vas crer les donnée tests dans la BD des users et posts. 
    {
    	 factory(App\User::class, 10)->create()->each(function ($user) {
           $user->posts()->save(factory(App\Post::class)->create());
       });
    
    }
}

