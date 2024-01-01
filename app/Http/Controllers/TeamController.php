<?php

namespace App\Http\Controllers;

use App\Models\Team;
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
        $teams = Team::all();
        return view('admin.admin-content.team.view', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admin-content.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = request()->validate([
            'name' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif',
            'institution' => 'string',
            'profession' => 'required',
            'expertise' => 'string',
            'category' => 'string',
            'address' => 'string'
        ]);

        if (request('image')) {
            $inputs['image'] = request('image')->store('photos');
        }

        auth()
            ->user()
            ->team()
            ->create($inputs);
        session()->flash('success', 'Team Member Info Added Successfully');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('admin.admin-content.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $inputs = request()->validate([
            'title' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif',
            'profession' => 'required',
            'expertise' => 'string',
            'category' => 'string',
        ]);

        if (request('image')) {
            $inputs['image'] = request('image')->store('photos');
        } else {
            $inputs['image'] = $team->image;
        }

        $team->update($inputs);
        session()->flash('success', 'Team Member Info Updated Successfully');
        return redirect()->route('team.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->delete();
        session()->flash('success', 'Team member Successfully Deleted');
        return back();
    }
}
