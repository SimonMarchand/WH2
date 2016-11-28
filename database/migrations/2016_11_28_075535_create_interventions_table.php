<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterventionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interventions', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('startTime')->nullable();
            $table->dateTime('endTime')->nullable();
            $table->string('reportLink')->nullable();
            $table->string('signatureLink')->nullable();
            $table->string('comment')->nullable();
            $table->boolean('isOver')->default(false);

            //Clés étrangères
            $table->integer('machine_id')->unsigned()->index();

            $table->timestamps();

            $table->foreign('machine_id')->references('id')->on('machines');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interventions');
    }
}
