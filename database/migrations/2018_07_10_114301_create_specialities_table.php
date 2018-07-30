<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecialitiesTable extends Migration
{

    public function up()
    {
        Schema::create('specialities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('short_description');
            $table->string('image')->nullable();
            $table->text('description');
            $table->string('location_id');
            $table->string('speciality_category_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('specialities');
    }
}
