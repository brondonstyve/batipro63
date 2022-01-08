<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Seoactu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('actualites', function (Blueprint $table) {
            $table->text('titreSeo')->nullable();
            $table->text('descriptionSeo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('actualites', function (Blueprint $table) {
            $table->dropColumn('titreSeo');
            $table->dropColumn('descriptionSeo');
            
        });
    }
}
