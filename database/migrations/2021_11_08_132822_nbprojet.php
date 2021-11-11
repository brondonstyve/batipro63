<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Nbprojet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('servicepages', function (Blueprint $table) {
            $table->bigInteger('projetnb')->nullable();
            $table->string('imagebas')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('servicepages', function (Blueprint $table) {
            $table->dropColumn('projetnb');
            $table->dropColumn('imagebas');
            
        });
    }
}
