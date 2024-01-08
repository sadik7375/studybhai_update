<?php

namespace App\Http\Controllers;

use App\Models\admin\AssignCourse;
use Illuminate\Http\Request;

class assigncourseController extends Controller
{
    
    public function store(Request $request)
    {

        $request->validate([
            'course_id' => 'required|numeric',
            'trainer_id' => 'required|numeric',
        ]);

        AssignCourse::create([
            'course_id' => $request->input('course_id'),
            'trainer_id' => $request->input('trainer_id'),
          
        ]);
        return redirect()->route('courseassign', ['course_id' => $request->input('course_id')])->with('success', 'course assign successfully');

    }
    


}
