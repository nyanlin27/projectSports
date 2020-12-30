<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
     public function index($value = '')
    {
        return view('frontend.home');
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




    




    
}
