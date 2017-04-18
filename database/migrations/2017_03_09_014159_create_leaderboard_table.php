<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeaderboardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaderboard', function (Blueprint $table) {
            $table->integer('wins');
            $table->integer('losses');
            $table->integer('draws');
            $table->integer('gfor'); // team goals for
            $table->integer('gaga'); // team goals against
            $table->integer('points'); // team points
            $table->string('t_name');
            $table->timestamps();
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('leaderboard');
        //
    }
}
