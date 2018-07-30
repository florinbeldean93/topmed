<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{

    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->string('timetable');
            $table->string('email')->unique();
            $table->string('phone');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('locations');
    }
}
