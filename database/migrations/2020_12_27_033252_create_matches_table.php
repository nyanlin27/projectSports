<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('match_date');
            $table->string('match_time');
            $table->text('description');
            $table->unsignedBigInteger('team_id');
            $table->unsignedBigInteger('otherteam_id');
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
            // $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
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
        Schema::dropIfExists('matches');
    }
}
