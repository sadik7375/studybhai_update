<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Team;
use App\Models\admin\AssignCourse;
use Illuminate\Http\Request;

class TeamController extends Controller
{

    public function trainerList(): string
    {
        return "data";



    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();

        // Filter teams to get only trainers
        $trainers = $teams->where('category', 'trainer');

        return view('admin.admin-content.team.view', compact('teams', 'trainers'));
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
        $this->validate($request, [
            'name' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif',

            'profession' => 'required',
            'expertise' => 'string',
            'category' => 'string',
            'address' => 'string',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'phone_number' => 'required|string'
        ]);

        // Create user
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'phone_number' => $request->input('phone_number'),
            'role' => 't'
        ]);

        // Create team
        $team = auth()->user()->team()->create([
            'name' => $request->input('name'),
            'image' => $request->file('image')->store('photos'),

            'profession' => $request->input('profession'),
            'expertise' => $request->input('expertise'),
            'category' => $request->input('category'),
            'address' => $request->input('address'),
            't_id' => $user->id,
        ]);

        session()->flash('success', 'Team Member Info Added Successfully');
        return back();
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        global $id;
        $trainer = Team::find($id);

        return view('trainer-profile', compact('trainer'));
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Team $team)
    {
        $inputs = request()->validate([
            'name' => 'required',
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
//    public function __construct()
//    {
//        $this->middleware(['auth', 'trainer']);
//    }



    public function assigncoursesShow()
    {
        $user = auth()->user();


        $trainer = Team::where('t_id', $user->id)->first();

        if (!$trainer) {
            abort(404, 'Trainer not found');
        }


        $assignedCourses = $trainer->assignedCourses;
        $courseCounts = [];


        foreach ($assignedCourses as $course) {
            $numberOfStudents = $course->orders()->count();
            $courseCounts[] = [
                'course' => $course,
                'numberOfStudents' => $numberOfStudents,
            ];
        }


        return view('trainerprofile.assignCourses', compact('assignedCourses','courseCounts'));
    }

public function showTrainerProfile()
{
  return view('trainerprofile.trainerprofile');


}



}
