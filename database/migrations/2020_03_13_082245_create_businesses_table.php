<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->string('description');
            $table->string('address');
            $table->string('location')->nullable();
            $table->string('phone');
            $table->string('work_m_f');
            $table->string('work_sat');
            $table->string('work_sun');
            $table->string('currency');
            $table->boolean('show_tips');
            $table->string('logo_url')->nullable();
            $table->string('price_percent')->default('0');
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
        Schema::dropIfExists('businesses');
    }
}
