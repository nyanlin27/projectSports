<?php

namespace App\Http\Controllers;

use App\League;
use App\Match;
use App\Team;
use Illuminate\Http\Request;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matches = Match::orderBy('id', 'desc')->get();
        // dd($matches);
        return view('backend.matches.index', compact('matches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = Team::all();
        // dd($teams);
        return view('backend.matches.create', compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required|min:3',
            'match_date' => 'required',
            'match_time' => 'required',
            'team_id' => 'required',
            'otherteam_id' => 'required',
            'description' => 'required|min:3',
        ]);

        // Store Data
        $match = new Match();
        $match->name = $request->name;
        $match->match_date = $request->match_date;
        $match->match_time = $request->match_time;
        $match->team_id = $request->team_id;
        $match->otherteam_id = $request->otherteam_id;
        $match->description = $request->description;
        $match->save();
        // redirect
        return redirect()->route('matches.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function show(Match $match)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function edit(Match $match)
    {
        $teams = Team::all();
        return view('backend.matches.edit', compact('match', 'teams'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Match $match)
    {
        // Validation
        $request->validate([
            'name' => 'required|min:3',
            'match_date' => 'required',
            'match_time' => 'required',
            'team_id' => 'required',
            'otherteam_id' => 'required',
            'description' => 'required|min:3',
        ]);

        // Store Data
        $match->name = $request->name;
        $match->match_date = $request->match_date;
        $match->match_time = $request->match_time;
        $match->team_id = $request->team_id;
        $match->otherteam_id = $request->otherteam_id;
        $match->description = $request->description;
        $match->save();
        // redirect
        return redirect()->route('matches.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function destroy(Match $match)
    {
        $match->delete();
        return redirect()->route('matches.index');
    }
}
