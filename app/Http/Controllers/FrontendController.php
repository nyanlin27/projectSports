<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index($value = '')
    {
        $posts = Post::all();
        return view('frontend.home', compact('posts'));
    }

    public function premierleague($value = '')
    {
        return view('frontend.match.premier_league');
    }
}
