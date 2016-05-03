<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNrToEpisode extends Migration
{
    public function up()
    {
        Schema::table('episode', function (Blueprint $table) {
            $table->integer('episode_number')->unsigned();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('episode', function (Blueprint $table) {
            //
        });
    }
}
