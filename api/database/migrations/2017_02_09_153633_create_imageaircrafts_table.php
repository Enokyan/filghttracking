<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageaircraftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imageaircrafts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('aircraft_id')->unsigned();
            $table->foreign('aircraft_id')->references('id')->on('aircrafts');
            $table->string('imageAircrafts')->unique();
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
        Schema::dropIfExists('imageaircrafts');
    }
}
