<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersTableColumnNameChange extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function ($table) {
            $table->renameColumn('first_name', 'firstName');
            $table->renameColumn('last_name', 'lastName');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function ($table) {
            $table->renameColumn('firstName', 'first_name');
            $table->renameColumn('lastName', 'last_name');
        });
    }
}
