<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('frontend/frontend_master');
// });

// For Forntend
Route::get('/','FrontendController@index')->name('homepage');

//Matches
Route::get('championleague','FrontendController@championleague')->name('championleague');
Route::get('europaleague','FrontendController@europaleague')->name('europaleague');
Route::get('premierleague','FrontendController@premierleague')->name('premierleague');
Route::get('laliga','FrontendController@laliga')->name('laliga');
Route::get('bundesliga','FrontendController@bundesliga')->name('bundesliga');
Route::get('serie_a','FrontendController@serie_a')->name('serie_a');
Route::get('ligue_1','FrontendController@ligue_1')->name('ligue_1');

//News
Route::get('modern_news','FrontendController@modern_news')->name('modern_news');
Route::get('blog_news','FrontendController@blog_news')->name('blog_news');
Route::get('grid_news','FrontendController@grid_news')->name('grid_news');


//shops
Route::get('shop_gallery','FrontendController@shop_gallery')->name('shop_gallery');
Route::get('shop_discount','FrontendController@shop_discount')->name('shop_discount');
Route::get('example','FrontendController@example')->name('example');

//contact
Route::get('contact','FrontendController@contact')->name('contact');
Route::get('faq','FrontendController@faq')->name('faq');
Route::get('premier_league_table','FrontendController@premier_league_table')->name('premier_league_table');
Route::get('laliga_table','FrontendController@laliga_table')->name('laliga_table');
Route::get('laliga_table','FrontendController@laliga_table')->name('laliga_table');
Route::get('serie-a_table','FrontendController@serie_a_table')->name('serie_a_table');
Route::get('ligue_1_table','FrontendController@ligue_1_table')->name('ligue_1_table');
Route::get('bundesliga_table','FrontendController@bundesliga_table')->name('bundesliga_table');

Route::get('champion_league_table','FrontendController@champion_league_table')->name('champion_league_table');


Route::get('europa_league_table','FrontendController@europa_league_table')->name('europa_league_table');

// For Backend
Route::get('dashboard', 'BackendController@dashboard')->name('dashboardpage');
Route::resource('posts', 'PostController');
Route::resource('leagues', 'LeagueController');
Route::resource('teams', 'TeamController');
Route::resource('matches', 'MatchController');
Route::resource('results', 'ResultController');

