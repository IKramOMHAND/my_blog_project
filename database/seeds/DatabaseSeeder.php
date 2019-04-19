<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;



// apres avoir executer la commande ##php artisan make:seeder UsersTableSeeder ## des classe seeder se cerer // on décommente la rection run et on remplie la fonction de user. de la class userTable user. 

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class); //fait apppel a la méthode run dans la class UsertablesSeeder 
    }
}
