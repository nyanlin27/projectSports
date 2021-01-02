<?php

namespace App\Http\Controllers;

use App\Result;
use App\Match;
use App\Team;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::orderBy('id', 'desc')->get();
        $results = Result::orderBy('id', 'desc')->get();
        return view('backend.results.index', compact('teams', 'results'));
        // dd($matches);
        // return view('backend.matches.index', compact('matches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $leagues = League::all();
        $teams = Team::all();
        $matches = Match::all();
        // dd($teams);
        return view('backend.results.create', compact('matches', 'teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        // Validation
        $request->validate([
            'match_id' => 'required',
            'hometeam_id' => 'required',
            'awayteam_id' => 'required',
            'home_goal'=>'required',
            'away_goal'=>'required',
        ]);

        // Store Data
        $result = new Result();
        $result->match_id = $request->match_id;
        $result->hometeam_id = $request->hometeam_id;
        $result->awayteam_id = $request->awayteam_id;
        $result->home_goal = $request->home_goal;
        $result->away_goal = $request->away_goal;
        $result->save();
        // redirect
        return redirect()->route('results.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function show(Result $result)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function edit(Result $result)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Result $result)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function destroy(Result $result)
    {
        //
    }
}
