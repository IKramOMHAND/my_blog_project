<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     * Les migrations sont  associées au générateur de schéma de Laravel pour créer facilement le schéma de base de données de l'application
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {// Créer la base de données avec les attributs suivant. 
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');// supprimer la tables users s'elle existe; 
    }
}
