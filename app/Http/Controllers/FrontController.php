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


     public function showcourses(){

        $courses = Course::all();
        return view("course.allcourseShow", compact('courses'));



    }



    public function assigncourseAndtrainerAssign(){

        $trainers = Team::all();
        return view("admin.admin-content.assigncourse.assign", compact('trainers'));
    }


    public function userprofile()
    {   $user = auth()->user();


        if ($user) {
        return view('userprofile.userprofile');
        }
        else{
            return redirect()->route('login'); // or any other action

        }
    }



    public function usercourse()
    {
        return view('userprofile.usercourse');
    }


    public function usersettings()
    {
        return view('userprofile.settings');
    }


    public function usereditProfile()
    {   $user = auth()->user();


        if ($user) {
        return view('userprofile.editProfile');
        }
        else{
            return redirect()->route('login');

        }
    }


    public function trainerProfile()
    {
        return view('trainerprofile.trainerprofile');

    }







}
