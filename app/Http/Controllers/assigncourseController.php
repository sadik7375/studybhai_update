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


        $existingAssignment = AssignCourse::where('course_id', $request->input('course_id'))
            ->where('trainer_id', $request->input('trainer_id'))
            ->exists();

        if ($existingAssignment) {

            return redirect()->route('courseassign', ['course_id' => $request->input('course_id')])
                ->with('error', 'This course is already assigned to the selected trainer.');
        }


        AssignCourse::create([
            'course_id' => $request->input('course_id'),
            'trainer_id' => $request->input('trainer_id'),

        ]);

        return redirect()->route('courseassign', ['course_id' => $request->input('course_id')])
            ->with('success', 'Course assigned successfully');
    }




    public function showAssignedCourses()
    {

        $assignedCourses = AssignCourse::with(['course', 'trainer'])->get();

        return view('admin.admin-content.assigncourse.viewAssignCourses', ['assignedCourses' => $assignedCourses]);
    }



    public function deleteAssignCourse($assignCourse)
    {
       $deleteassignCourse= AssignCourse::find($assignCourse);

       $deleteassignCourse->delete();
    }






}
