<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyaccountController extends Controller
{
    //boite de reception
    public function inbox()
    {
        //$items = progsms::all();
        return view('inbox.inbox');
    }
}
