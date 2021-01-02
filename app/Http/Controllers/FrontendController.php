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

    public function championleague($value = '')
    {
        return view('frontend.champion_league');
    }
    public function europaleague($value = '')
    {
        return view('frontend.europa_league');
    }
    public function premierleague($value = '')
    {
        return view('frontend.premier_league');
    }

    public function laliga($value = '')
    {
        return view('frontend.laliga');
    }
    public function serie_a($value = '')
    {
        return view('frontend.serie_a');
    }
    public function bundesliga($value = '')
    {
        return view('frontend.bundesliga');
    }
    public function ligue_1($value = '')
    {
        return view('frontend.ligue_1');
    }

    public function modern_news($value = '')
    {
        return view('frontend.modern_news');
    }
    public function blog_news($value = '')
    {
        return view('frontend.blog_news');
    }
    public function grid_news($value = '')
    {
        return view('frontend.Grid_news');
    }
<<<<<<< HEAD
=======


    public function shop_gallery($value = '')
    {
        return view('frontend.shop_gallery');
    }
    public function shop_discount($value = '')
    {
        return view('frontend.shop_discount');
    }

    public function contact($value = '')
    {
        return view('frontend.contact');
    }

    public function faq($value = '')
    {
        return view('frontend.faq');
    }
    public function example($value = '')
    {
        return view('frontend.example');
    }
    public function premier_league_table($value = '')
    {
        return view('frontend.premier_league_table');
    }
    public function laliga_table($value = '')
    {
        return view('frontend.laliga_table');
    }
    public function bundesliga_table($value = '')
    {
        return view('frontend.bundesliga_table');
    }
    public function serie_a_table($value = '')
    {
        return view('frontend.serie-a_table');
    }
    public function ligue_1_table($value = '')
    {
        return view('frontend.ligue_1_table');
    }

    public function champion_league_table($value = '')
    {
        return view('frontend.champion_league_table');
    }

    public function europa_league_table($value = '')
    {
        return view('frontend.europa_league_table');
    }
    





    




    
>>>>>>> 136cb395f04377472342a19d494227172e359f8d
}
