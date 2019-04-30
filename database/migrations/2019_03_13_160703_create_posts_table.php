<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     * Les migrations sont  associées au générateur de schéma de Laravel pour créer facilement le schéma de base de données de l'application
     *
     * @return void
     */
   public function up()/* Crérer notre table posts */
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigInteger('id', true)->unsigned();
            $table->unsignedInteger('post_author');
            $table->timestamp('post_date')->default(DB::raw('CURRENT_TIMETAMP'));
            $table->text('post_content');
            $table->text('post_titre');
            $table->String('post_status',20)->default('publish');
            $table->String('post_name',200)->default('');
            $table->String('post_type',20)->default('article');
            $table->String('post_categorie')->nullable();
            $table->foreign('post_author')->references('id')->on('users');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');/* suprimmer s'il existe*/
    }
}
