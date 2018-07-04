<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimeDepositsTable extends Migration
{
    public function up()
    {
        Schema::create('time_deposits', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('account_number');
            $table->float('initial_amount');
            $table->float('interest_rate');
            $table->integer('min_year');
            $table->string('status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('time_deposits');
    }
}
