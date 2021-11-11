<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaisonContemporainesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maison_contemporaines', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('domaine')->nullable();
            $table->string('auteur')->nullable();
            $table->text('desc_auteur')->nullable();
            $table->string('image');


            $table->string('titre1')->nullable();
            $table->text('article1');
            $table->string('image1')->nullable();
            $table->string('video1')->nullable();
            

            $table->string('titre2')->nullable();
            $table->text('article2')->nullable();
            $table->string('image2')->nullable();
            $table->string('video2')->nullable();

            $table->string('titre3')->nullable();
            $table->text('article3')->nullable();
            $table->string('image3')->nullable();
            $table->string('video3')->nullable();

            $table->string('titre4')->nullable();
            $table->text('article4')->nullable();
            $table->string('image4')->nullable();
            $table->string('video4')->nullable();

            $table->string('titre5')->nullable();
            $table->text('article5')->nullable();
            $table->string('image5')->nullable();
            $table->string('video5')->nullable();
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
        Schema::dropIfExists('maison_contemporaines');
    }
}
