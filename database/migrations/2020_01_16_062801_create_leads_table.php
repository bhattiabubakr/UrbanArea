<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->bigInteger('project_id')->nullable()->unsigned();
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->bigInteger('plot_id')->nullable()->unsigned();
            $table->foreign('plot_id')->references('id')->on('plots')->onDelete('cascade');
            $table->bigInteger('house_id')->nullable()->unsigned();
            $table->foreign('house_id')->references('id')->on('houses')->onDelete('cascade');
            $table->bigInteger('flat_id')->nullable()->unsigned();
            $table->foreign('flat_id')->references('id')->on('flats')->onDelete('cascade');
            $table->bigInteger('office_id')->nullable()->unsigned();
            $table->foreign('office_id')->references('id')->on('offices')->onDelete('cascade');
            $table->bigInteger('shop_id')->nullable()->unsigned();
            $table->foreign('shop_id')->references('id')->on('shops')->onDelete('cascade');
            $table->bigInteger('farmhouse_id')->nullable()->unsigned();
            $table->foreign('farmhouse_id')->references('id')->on('farmhouses')->onDelete('cascade');
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
        Schema::dropIfExists('leads');
    }
}
