<?php

namespace App\Http\Controllers;

use App\League;
use App\Team;
use Illuminate\Http\Request;

class LeagueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leagues = League::orderBy('id', 'desc')->get();
        // dd($posts);
        return view('backend.leagues.index', compact('leagues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.leagues.create');
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
            'country' => 'required|min:2',
            'photo' => 'required|mimes:png,jpg,jpeg'
        ]);
        //  Upload
        if ($request->file()) {
            // File Name Change
            $fileName = time() . '_' . $request->photo->getClientOriginalName();
            //categoryimg change
            $filePath = $request->file('photo')->storeAs('leagueimg', $fileName, 'public');
            $path = '/storage/' . $filePath;
        }
        // Store Data
        $league = new League;
        $league->name = $request->name;
        $league->country = $request->country;
        $league->photo = $path;
        $league->save();
        // redirect
        return redirect()->route('leagues.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\League  $league
     * @return \Illuminate\Http\Response
     */
    public function show(League $league)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\League  $league
     * @return \Illuminate\Http\Response
     */
    public function edit(League $league)
    {
        return view('backend.leagues.edit', compact('league'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\League  $league
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, League $league)
    {
        // dd($request);
        // Validation
        $request->validate([
            'name' => 'required|min:3',
            'country' => 'required|min:2',
            'photo' => 'sometimes|mimes:png,jpg,jpeg'
        ]);
        //  Upload
        if ($request->file()) {
            // File Name Change
            $fileName = time() . '_' . $request->photo->getClientOriginalName();
            //categoryimg change
            $filePath = $request->file('photo')->storeAs('leagueimg', $fileName, 'public');
            $path = '/storage/' . $filePath;
            $league->photo = $path;
        }
        // Store Data
        $league->name = $request->name;
        $league->country = $request->country;
        $league->save();
        // redirect
        return redirect()->route('leagues.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\League  $league
     * @return \Illuminate\Http\Response
     */
    public function destroy(League $league)
    {
        $league->delete();
        return redirect()->route('leagues.index');
    }
}
