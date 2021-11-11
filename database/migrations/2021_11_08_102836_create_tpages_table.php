<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTpagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tpages', function (Blueprint $table) {
            $table->id();
            $table->string('titreEnt');
            $table->string('titre')->nullable();
            $table->text('description')->nullable();
            $table->string('titre1')->nullable();
            $table->text('description1')->nullable();
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
        Schema::dropIfExists('tpages');
    }
}
