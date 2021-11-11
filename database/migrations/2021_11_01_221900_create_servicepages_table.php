<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicepagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicepages', function (Blueprint $table) {
            $table->id();
            $table->string('imageEnt')->nullable();
            $table->text('descriptionEnt')->nullable();
            $table->text('description')->nullable();
            $table->string('surface')->nullable();
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
        Schema::dropIfExists('servicepages');
    }
}
