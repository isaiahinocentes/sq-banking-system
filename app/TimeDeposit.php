<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeDeposit extends BaseModel
{
    /*
      $table->unsignedInteger('account_number');
        $table->float('initial_amount');
        $table->float('interest_rate');
        $table->integer('min_year');
        $table->string('status');
     */
    protected $fillable = [
        'account_number',
        'initial_amount',
        'interest_rate',
        'min_year',
        'status'
    ];

    public static function validate_create(array $data){
        $data['account_number'] = auth()->user()->id;
        $data['interest_rate'] = 0.05;
        $data['status'] = "active";
        return $data;
    }

    //BaseModel function
    public static function getInstance($data){
        return ( isset($data['id']) ) ? TimeDeposit::find($data['id']) : new TimeDeposit() ;
    }
}
