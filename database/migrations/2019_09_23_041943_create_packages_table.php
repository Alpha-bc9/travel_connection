<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('packages', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->unsignedBigInteger('company_id');

        //     $table->string('name');
        //     $table->string('photo');
        //     $table->string('price');
        //     $table->string('duration');
        //     $table->string('hotel');
        //     $table->boolean('meal');
        //     $table->text('description');
        //     $table->bigInteger('like');
        //     $table->timestamps();

        //     $table->unsignedBigInteger('departure_id');
        //     $table->unsignedBigInteger('destination_id');
        //     $table->foreign('departure_id')->references('id')->on('cities');
        //     $table->foreign('destination_id')->references('id')->on('cities');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
}
