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
            $table->string('title');
            $table->string('description');
            $table->string('favourited')->nullable();
            //$table->unsignedBigInteger('prices');
            $table->unsignedBigInteger('category_id')->unsigned()->index();
            //$table->unsignedBigInteger('prices_id')->unsigned()->index();
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade');
            //$table->foreign('prices_id')->references('id')->on('prices')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return voids
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
