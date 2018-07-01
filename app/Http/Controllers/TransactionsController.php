<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionsController extends Controller
{
    public function depositForm(){
        return view('user/deposit');
    }

    public function withdrawForm(){
        return view('user/withdraw');
    }

    public function timedepositForm(){
        return view('user/timedeposit');
    }

    public function transferForm(){
        return view('user/transfer');
    }

    public function payBillsForm(){
        return view('user/paybills');
    }
}
