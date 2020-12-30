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
Route::get('premierleague','FrontendController@premierleague')->name('premierleague');

// For Backend
Route::get('dashboard', 'BackendController@dashboard')->name('dashboardpage');
Route::resource('posts', 'PostController');
Route::resource('leagues', 'LeagueController');
Route::resource('teams', 'TeamController');
Route::resource('matches', 'MatchController');
Route::resource('results', 'ResultController');

