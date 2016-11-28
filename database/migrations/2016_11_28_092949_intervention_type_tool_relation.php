<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InterventionTypeToolRelation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intervention_type_tool', function (Blueprint $table){
            $table->increments('id');
            $table->integer('intervention_type_id')->unsigned()->index();
            $table->integer('tool_id')->unsigned()->index();
            $table->foreign('intervention_type_id')->references('id')->on('intervention_types');
            $table->foreign('tool_id')->references('id')->on('tools');
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
