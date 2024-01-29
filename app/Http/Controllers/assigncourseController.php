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



    public function showAssignedCourses()
    {

        $assignedCourses = AssignCourse::with(['course', 'trainer'])->get();

        return view('admin.admin-content.assigncourse.viewAssignCourses', ['assignedCourses' => $assignedCourses]);
    }



    public function deleteAssignCourse($assignCourse)
    {
       $deleteassignCourse= AssignCourse::find($assignCourse);

       $deleteassignCourse->delete();
=======
    public function deleteAssignCourse(AssignCourse $assignCourse)
    {

        $assignCourse->delete();



         return redirect()->route('assign.courses')->with('success', 'Assigned course deleted successfully');
    }




}
