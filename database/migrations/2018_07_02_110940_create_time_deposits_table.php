<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimeDepositsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time_deposits', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('account_number');
            $table->float('initial_amount');
            $table->float('current_amount');
            $table->float('interest');
            $table->integer('min_year');
            $table->string('status');
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
        Schema::dropIfExists('time_deposits');
    }
}
