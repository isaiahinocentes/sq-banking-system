<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWithdrawsTable extends Migration
{
    public function up()
    {
        Schema::create('withdraws', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('account_no');
            $table->string('account');
            $table->float('amount');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('withdraws');
    }
}
