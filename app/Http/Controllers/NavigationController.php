<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('user/log');
    }

    public function profile(){
        return view('user/profile');
    }
}
