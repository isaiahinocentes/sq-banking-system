<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Library\ClassFactory as CF;

class Log extends BaseModel
{
    //Fillable columns
    protected $fillable = [
        //'id',
        'sender_id',
        'recipient_id',
        'transaction_type',
        'amount',
        'remarks'
        //,'timestamps'
    ];

    //Data Validations
    public function validate_create(&$data = null){
        
        $result = null;

        if($data !== null){
            $recipient_id = $data['recipient_id'];
            
            //Use self ID
            if($recipient_id == auth()->user()->id){
                return $result = array(
                    'status'    => 'error',
                    'messages'  => 'Can not use Self Account Number',
                    'code'      => 0
                );
            }

            $Recipient = CF::model('User')->find($recipient_id);
            
            //If the recipient id doesn't exist
            if($Recipient == null){
                return $result = array(
                    'status'    => 'error',
                    'messages'  => 'Recipient Doesn\' exists!',
                    'code'      => 0
                );
            }

            //Check if Amount > Balance
            if($data['amount'] > auth()->user()->balance or 
                auth()->user()->balance <= 0){
                return $result = array(
                    'status'    => 'error',
                    'messages'  => 'Amount entered is greater than balance or no balance left',
                    'code'      => 0
                );
            }

            //Add Sender id to data
            if(!isset($data['sender_id'])){
                $data = array_add($data, 'sender_id', auth()->user()->id);
            }
            
            //Add transaction_type
            if(!isset($data['transaction_type'])){
                $data = array_add($data, 'transaction_type', 'fund transfer');
            }

            //ONLY SUCCESS PROCESS
            //-----Continue to insert to database----
            return $result = array(
                'status'    => 'success',
                'messages'  => 'Success validation',
                'code'      => 200
            );
        } else {
            return $result = array(
                'status'    => 'error',
                'messages'  => 'Null Data At Validation',
                'code'      => 0
            );
        }
    }

    //BaseModel function
    public static function getInstance($data){
        return ( isset($data['id']) ) ? Log::find($data['id']) : new Log() ;
    }

    //Eloquent Relationships
    public function Logs(){
		return $this->hasMany('Logs');
	}
}
