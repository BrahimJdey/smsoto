<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportsController extends Controller
{
    //My feature messages
    public function featuresms()
    {
        //$items = progsms::all();
        return view('Report.featuresms');
    }


     //Sandbox
     public function sandbox()
     {
         //$items = progsms::all();
         return view('Report.sandbox');
     }
}
