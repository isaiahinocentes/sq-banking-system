<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends BaseModel
{
    
    public static function getInstance($data){
        return ( isset($data['id']) ) ? Log::find($data['id']) : new Log() ;
    }
}
