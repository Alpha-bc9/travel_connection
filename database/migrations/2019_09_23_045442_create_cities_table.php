<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            
            $table->unsignedBigInteger('departure');
            $table->unsignedBigInteger('destination');
            $table->foreign('departure')->references('id')->on('cities');
            $table->foreign('destination')->references('id')->on('cities');
            $table->string('name');
            $table->string('photo');
            $table->date('departure_date');
            $table->time('departure_time');
            $table->boolean('package_type');
            $table->string('price');
            $table->string('duration');
            $table->string('hotel');
            $table->boolean('meal');
            $table->text('description');
            $table->bigInteger('like');
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
