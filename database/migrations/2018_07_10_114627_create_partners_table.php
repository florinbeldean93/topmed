<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartnersTable extends Migration
{

    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('link');
            $table->string('logo')->nullable();
            $table->string('order_id');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('partners');
    }
}
