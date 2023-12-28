<?php

namespace App\Http\Controllers;

use App\Models\admin\Course;
use App\Models\admin\Feedback;
use App\Models\Team;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function front(){
        $courses = Course::all();
        $feedbacks = Feedback::all();
        return view("front.front", compact('courses',"feedbacks"));
    }

    public function course_info($id){

        $course = Course::findOrFail($id);
        return view("front.single-course", compact('course'));
    }

    public function team(){

        $teams = Team::all();
        return view("front.team", compact('teams'));
    }


    public function userprofile()
    {
        return view('userprofile.userprofile');
    }

    public function usercourse()
    {
        return view('userprofile.usercourse');
    }






}
