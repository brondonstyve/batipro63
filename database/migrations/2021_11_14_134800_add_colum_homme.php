<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumHomme extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('homes', function (Blueprint $table) {
            $table->string('imageE')->nullable();
            $table->string('titreE')->nullable();
            $table->string('descriptionE')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('homes', function (Blueprint $table) {
            $table->dropColumn('imageE');
            $table->dropColumn('titreE');
            $table->dropColumn('descriptionE');

        });
    }
}
