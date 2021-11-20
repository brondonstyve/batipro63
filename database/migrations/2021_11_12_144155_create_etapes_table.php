<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtapesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etapes', function (Blueprint $table) {
            $table->id();
            $table->string('titreEnt')->nullable();
            $table->string('descriptionEnt')->nullable();

            $table->string('etape1')->nullable();
            $table->string('titre1')->nullable();
            $table->text('description1')->nullable();
            $table->string('image1')->nullable();

            $table->string('etape2')->nullable();
            $table->string('titre2')->nullable();
            $table->text('description2')->nullable();
            $table->string('image2')->nullable();

            $table->string('etape3')->nullable();
            $table->string('titre3')->nullable();
            $table->text('description3')->nullable();
            $table->string('image3')->nullable();

            $table->string('etape4')->nullable();
            $table->string('titre4')->nullable();
            $table->text('description4')->nullable();
            $table->string('image4')->nullable();

            $table->string('etape5')->nullable();
            $table->string('titre5')->nullable();
            $table->text('description5')->nullable();
            $table->string('image5')->nullable();

            $table->string('etape6')->nullable();
            $table->string('titre6')->nullable();
            $table->text('description6')->nullable();
            $table->string('image6')->nullable();

            $table->string('etape7')->nullable();
            $table->string('titre7')->nullable();
            $table->text('description7')->nullable();
            $table->string('image7')->nullable();

            $table->string('etape8')->nullable();
            $table->string('titre8')->nullable();
            $table->text('description8')->nullable();
            $table->string('image8')->nullable();

            $table->string('etape9')->nullable();
            $table->string('titre9')->nullable();
            $table->text('description9')->nullable();
            $table->string('image9')->nullable();

            $table->string('etape10')->nullable();
            $table->string('titre10')->nullable();
            $table->text('description10')->nullable();
            $table->string('image10')->nullable();
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
        Schema::dropIfExists('etapes');
    }
}
