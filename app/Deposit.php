<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deposit extends BaseModel
{

    protected $fillable = [
        'account_no',
        'name',
        'type',
        'amount'
    ];

    public static function create_deposit($data){
        if(!isset($data['type'])){
            $data['type'] = "deposit";
        }
        return $data;
    }

    //BaseModel function
    public static function getInstance($data){
        return ( isset($data['id']) ) ? Deposit::find($data['id']) : new Deposit() ;
    }
}
