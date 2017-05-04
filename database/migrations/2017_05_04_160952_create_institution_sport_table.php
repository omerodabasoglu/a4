<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitutionSportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institution_sport', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('institution_id')->unsigned();
            $table->integer('sport_id')->unsigned();
            
            $table->foreign('institution_id')->references('id')->on('institutions');
            $table->foreign('sport_id')->references('id')->on('sports');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('institution_sport');
    }
}
