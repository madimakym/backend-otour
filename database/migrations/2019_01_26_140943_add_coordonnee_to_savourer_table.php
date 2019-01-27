<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCoordonneeToSavourerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('savourer', function (Blueprint $table) {
            $table->string('latitude')->unique();
            $table->string('longitude')->unique();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('savourer', function (Blueprint $table) {
            $table->dropColumn('latitude');
            $table->dropColumn('longitude');
        });
    }
}
