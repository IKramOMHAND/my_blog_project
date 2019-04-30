<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     * Les migrations sont  associées au générateur de schéma de Laravel pour créer facilement le schéma de base de données de l'application
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigInteger('id', true)->unsigned();
            $table->string('comment_name', 20);
            $table->text('comment_email');
            $table->string('comment_content',10);
            $table->timestamp('comment_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->integer('post_id'); 
            $table->foreign('post_id')->references('id')->on('posts');
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
        Schema::dropIfExists('comments');
    }
}
