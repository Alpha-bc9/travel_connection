<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('name');
            $table->String('title');
            $table->timestamps();
        });

        Schema::create('packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('depature');
            $table->unsignedBigInteger('destination');
            $table->foreign('depature')->references('id')->on('cities');
            $table->foreign('destination')->references('id')->on('cities');
            $table->string('name');
            $table->string('photo');
            $table->date('depature_date');
            $table->time('depature_time');
            $table->boolean('package_type');
            $table->string('price');
            $table->string('duration');
            $table->string('hotel');
            $table->boolean('meal');
            $table->text('description');
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
        Schema::dropIfExists('cities');
    }
}
