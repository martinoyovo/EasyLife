<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commands', function (Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->string('address');
            $table->datetime('date');
            $table->unsignedBigInteger('mode_payment')->unsigned()->index();
            $table->unsignedBigInteger('user_id')->unsigned()->index();
            $table->unsignedBigInteger('service')->unsigned()->index();
            $table->unsignedBigInteger('price')->unsigned()->index();
            $table->foreign('mode_payment')->references('id')->on('mode_payments')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');
            $table->foreign('service')->references('id')->on('services')->onUpdate('cascade');
            $table->foreign('price')->references('id')->on('prices')->onUpdate('cascade');
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
        Schema::dropIfExists('commands');
    }
}
