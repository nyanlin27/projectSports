<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
     public function index($value = '')
    {
        return view('frontend.home');
    }

    public function premierleague($value = '')
    {
        return view('frontend.match.premier_league');
    }


    
}
