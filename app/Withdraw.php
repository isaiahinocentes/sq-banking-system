<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Withdraw extends BaseModel
{
    protected $fillable = [
        'account_no',
        'account',
        'amount'
    ];

    public static function validateCreate($data) : array {
        $data['account_no'] = auth()->user()->id;
        $data['account'] = "savings";
        return $data;
    }

    //BaseModel function
    public static function getInstance($data){
        return ( isset($data['id']) ) ? Withdraw::find($data['id']) : new Withdraw() ;
    }
}
