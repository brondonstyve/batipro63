<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLcPage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lcpages', function (Blueprint $table) {
            $table->text('resume')->nullable();
            $table->string('imageDesc')->nullable();
             
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lcpages', function (Blueprint $table) {
            $table->dropColumn('resume');
            $table->dropColumn('imageDesc');
            
        });
    }
}
