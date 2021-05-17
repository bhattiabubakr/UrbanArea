<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->bigInteger('type_id')->unsigned();
            $table->string('covered');
            $table->bigInteger('size_id')->unsigned();
            $table->string('beds');
            $table->string('baths');
            $table->string('kitchen');
            $table->string('drawing');
            $table->string('dining');
            $table->bigInteger('area_id')->unsigned();
            $table->bigInteger('city_id')->unsigned();
            $table->bigInteger('amenity_id')->unsigned();
            $table->bigInteger('feature_id')->unsigned();
            $table->string('featured');
            $table->string('image');
            $table->string('amount');
            $table->timestamps();

            $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');
            $table->foreign('size_id')->references('id')->on('sizes')->onDelete('cascade');
            $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->foreign('amenity_id')->references('id')->on('amenities')->onDelete('cascade');
            $table->foreign('feature_id')->references('id')->on('features')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('houses');
    }
}
