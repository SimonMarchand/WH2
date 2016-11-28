<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imageLink');
            $table->integer('intervention_id')->unsigned()->index();
            $table->timestamps();

            $table->foreign('intervention_id')->references('id')->on('interventions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('report_images');
    }
}
