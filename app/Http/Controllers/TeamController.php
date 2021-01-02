<?php

namespace App\Http\Controllers;

use App\Team;
use App\League;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::orderBy('id', 'desc')->get();
        // dd($teams);
        return view('backend.teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('backen  d.teams.create');
        $leagues = League::all();
        // dd($leagues);
        return view('backend.teams.create', compact('leagues'));
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
            'name' => 'required|min:3',
            'league_id' => 'required',
            'photo' => 'required|mimes:png,jpg,jpeg'
        ]);
        //  Upload
        if ($request->file()) {
            // File Name Change
            $fileName = time() . '_' . $request->photo->getClientOriginalName();
            //categoryimg change
            $filePath = $request->file('photo')->storeAs('teamimg', $fileName, 'public');
            $path = '/storage/' . $filePath;
        }
        // Store Data
        $team = new Team();
        $team->name = $request->name;
        $team->league_id = $request->league_id;
        $team->photo = $path;
        $team->save();
        // redirect
        return redirect()->route('teams.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        // $teams = Team::all();
        $leagues = League::all();
        return view('backend.teams.edit', compact('team', 'leagues'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        // dd($request);
        // Validation
        $request->validate([
            'name' => 'required|min:3',
            'league_id' => 'required',
            'photo' => 'sometimes|mimes:png,jpg,jpeg'
        ]);
        //  Upload
        if ($request->file()) {
            // File Name Change
            $fileName = time() . '_' . $request->photo->getClientOriginalName();
            //categoryimg change
            $filePath = $request->file('photo')->storeAs('teamimg', $fileName, 'public');
            $path = '/storage/' . $filePath;
            $team->photo = $path;
        }
        // Store Data
        $team->name = $request->name;
        $team->league_id = $request->league_id;
        $team->save();
        // redirect
        return redirect()->route('teams.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->delete();
        return redirect()->route('teams.index');
    }
}
