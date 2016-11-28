<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InterventionTechnicianRelation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('interventions', function (Blueprint $table){
            $table->dropForeign('interventions_technician_id_foreign');
            $table->dropColumn('technician_id');
        });

        Schema::create('intervention_technician', function (Blueprint $table){
            $table->increments('id');
            $table->integer('intervention_id')->unsigned()->index();
            $table->integer('technician_id')->unsigned()->index();
            $table->foreign('intervention_id')->references('id')->on('interventions');
            $table->foreign('technician_id')->references('id')->on('technicians');
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
