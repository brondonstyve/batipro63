<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMcPage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mcpages', function (Blueprint $table) {
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
        Schema::table('mcpages', function (Blueprint $table) {
            $table->dropColumn('resume');
            $table->dropColumn('imageDesc');
        });
    }
}
