<?php

use Illuminate\Support\Str; //  Ajouter le chemin str p crerer de classe 
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;




class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()// fonction run qui vas crer les donnée des usser 
    {
    	 factory(App\User::class, 10)->create()->each(function ($user) {
           $user->posts()->save(factory(App\Post::class)->create());
       });


    
}

// fin 



    }

