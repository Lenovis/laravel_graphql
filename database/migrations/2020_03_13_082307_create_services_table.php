<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('business_id');
            $table->string('logo_url_0')->nullable(); //It will be good to add here some defauld logo url
            $table->string('logo_url_1')->nullable();
            $table->string('logo_url_2')->nullable();
            $table->string('name');
            $table->integer('price');
            $table->integer('duration');
            $table->string('description');
            $table->string('address');
            $table->string('location')->nullable();
            $table->string('phone');
            $table->string('work_hours');
            $table->string('break_hours');
            $table->boolean('visible');
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
        Schema::dropIfExists('services');
    }
}
