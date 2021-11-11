<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('imageMc')->nullable();
            $table->string('imageLc')->nullable();
            $table->string('imageMg')->nullable();


            $table->string('titreVert1')->nullable();
            $table->string('titre1')->nullable();
            $table->string('slogan1')->nullable();
            $table->text('resume1')->nullable();
            $table->string('image1')->nullable();

            $table->string('titreVert2')->nullable();
            $table->string('titre2')->nullable();
            $table->string('slogan2')->nullable();
            $table->text('resume2')->nullable();
            
            $table->string('titreVert3')->nullable();
            $table->string('titre3')->nullable();
            $table->string('slogan3')->nullable();
            $table->text('resume3')->nullable();

            $table->string('petiteImage1')->nullable();
            $table->string('slogan4')->nullable();
            $table->text('resume4')->nullable();


            $table->string('petiteImage2')->nullable();
            $table->string('slogan5')->nullable();
            $table->text('resume5')->nullable();

            $table->string('petiteImage3')->nullable();
            $table->string('slogan6')->nullable();
            $table->text('resume6')->nullable();

            $table->string('petiteImage4')->nullable();
            $table->string('slogan7')->nullable();
            $table->text('resume7')->nullable();

            $table->string('slogan8')->nullable();
            $table->text('resume8')->nullable();

            $table->text('savoir')->nullable();
            $table->text('video')->nullable();
            $table->text('offre')->nullable();

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
        Schema::dropIfExists('homes');
    }
}
