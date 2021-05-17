<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->bigInteger('area_id')->unsigned();
            $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');
            $table->bigInteger('amenity_id')->unsigned();
            $table->foreign('amenity_id')->references('id')->on('amenities')->onDelete('cascade');
            $table->text('description');
            $table->text('investment_reasons');
            $table->string('featured_image');
            $table->string('videos');
            $table->string('gallery_images');
            $table->boolean('favourite');
            $table->string('address');
            $table->string('location_advantages');
            $table->string('payment_plan');
            $table->string('map');
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
        Schema::dropIfExists('projects');
    }
}
