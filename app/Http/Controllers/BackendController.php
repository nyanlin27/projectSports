<?php

namespace App\Http\Controllers;

use \App\League;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function dashboard($value = '')
    {
        return view('dashboard');
        // $leagues = League::orderBy('id', 'desc')->get();
        // dd($posts);
        // return view('dashboard', compact('leagues'));
    }
}
