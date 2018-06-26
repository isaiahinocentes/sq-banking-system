<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library\ClassFactory as CF;

class TransferController extends Controller
{
    public function query(Request $request){
        $data = $request->all();

        $result = CF::model('Log')->validate_create($data);
        
        if($result['id'] == 200){
            $result = CF::model('Log')->saveData($data);
            
            if($result['id'] == 200){
                //Update your balance

                //Update the recipients' balance

                return redirect()->route('user-logs')
                    ->with('result', $result);
            }

        }

        return redirect()->back()
            ->withInput($request->input())
            ->withErrors($result);
    }
}
