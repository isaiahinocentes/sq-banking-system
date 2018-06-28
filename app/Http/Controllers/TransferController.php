<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Library\ClassFactory as CF;

class TransferController extends Controller
{
    public function query(Request $request){
        $data = $request->all();
        
        $result = CF::model('Log')->validate_create($data);
        
        if($result['status'] == 'success'){
            
            //Begin Database Transaction
            DB::beginTransaction();
            
            $result = CF::model('Log')->saveData($data);

            if($result['status'] == 'success'){
                //Update your balance
                $result = User::updateBalance(auth()->user(), -$data['amount']);
                
                if($result['status'] == 'success'){
                    //Update the recipients' balance
                    $recipient = CF::model('User')->find($data['recipient_id']);
                    $result = User::updateBalance($recipient, $data['amount']);

                    if($result['status'] == 'success'){
                        DB::commit();
                        return redirect()->route('user-logs')
                            ->with('result', $result);
                    } else {
                        DB::rollback();
                    }
                } else {
                    DB::rollback();
                }
            } else {
                DB::rollback();
            }
        } 
        return redirect()->back()
            ->withInput($request->input())
            ->withErrors($result);
    }
}
