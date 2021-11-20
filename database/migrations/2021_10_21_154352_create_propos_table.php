<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propos', function (Blueprint $table) {
            $table->id();

            $table->string('imageEnt')->nullable();
            $table->text('descriptionEnt')->nullable();
            $table->integer('anneeCreat')->nullable();

            $table->string('resume')->nullable();
            $table->string('titre')->nullable();
            $table->string('annee')->nullable();
            
            $table->string('imageB1')->nullable();
            $table->string('imageB2')->nullable();

            $table->string('resume2')->nullable();
            $table->string('titre2')->nullable();
            $table->text('description2')->nullable();
            $table->string('imageC1')->nullable();

            $table->string('titre3')->nullable();
            $table->string('nombre3')->nullable();
            $table->text('description3')->nullable();

            $table->string('titre4')->nullable();
            $table->string('nombre4')->nullable();
            $table->text('description4')->nullable();

            $table->text('description5')->nullable();

            $table->string('titre6')->nullable();
            $table->string('resume6')->nullable();
            $table->text('description6')->nullable();

            
            $table->string('email1');
            $table->string('email2')->nullable();
            $table->string('telephone1');
            $table->string('telephone2')->nullable();
            $table->string('bureau');
            $table->string('depot');
            $table->string('nb_salarie')->default(0);
            $table->string('annee_experience')->nullable();
            $table->text('description')->nullable();
            $table->string('dg');
            
            $table->string('image')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();

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
        Schema::dropIfExists('propos');
    }
}
