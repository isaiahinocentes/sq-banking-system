<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library\ClassFactory as CF;

class NavigationController extends Controller
{
    //Nandito yung mga balace, alert, notifications
    public function index(){
        return view('user/index'); //Return the Dashboard view
    }

    public function transfer(){
        return view('user/transfer');
    }

    public function logs(){
        $data = array (
            'transfers' => CF::model('Log')->all(),
            'withdraws' => CF::model('Withdraw')->all()->where('account_no','=', auth()->user()->id),
            'deposits' => CF::model('Deposit')->all()->where('account_no','=', auth()->user()->id),
            'timedeposits' => CF::model('TimeDeposit')->all()->where('account_number','=', auth()->user()->id)
            //, "paybills" => CF::model("PayBill")->all();
        );

        return view('user/log')
        ->with('data', $data);
    }

    public function profile(){
        $data = array (
            'timedeposits' => CF::model('TimeDeposit')->all()->where('account_number','=', auth()->user()->id)
        );

        return view('user/profile')
        ->with('data', $data);
    }
}
