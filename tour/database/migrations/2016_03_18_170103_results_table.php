<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Resultstable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('results', function($table)
        {
            $table->increments('id')->unsigned();;
            $table->integer('user1_id')->unsigned();
            $table->foreign('user1_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('user2_id')->unsigned();
            $table->foreign('user2_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('result_user1')->unsigned();
            $table->integer('result_user2')->unsigned();
            $table->integer('tournament_id')->unsigned();
            $table->foreign('tournament_id')->references('id')->on('tournaments')->onDelete('cascade');
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
        Schema::drop('results');

    }
}
