<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InterventionMachineRelation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('interventions', function (Blueprint $table){
            $table->dropForeign('interventions_machine_id_foreign');
            $table->dropColumn('machine_id');
        });

        Schema::create('intervention_machine', function (Blueprint $table){
            $table->increments('id');
            $table->integer('intervention_id')->unsigned()->index();
            $table->integer('machine_id')->unsigned()->index();
            $table->foreign('intervention_id')->references('id')->on('interventions');
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
        //
    }
}
