<?php

namespace App\Http\Controllers\v2;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Models\admin\Course;
use App\Models\admin\Feedback;
use App\Models\Team;
class FrontController extends Controller
{
// ------------------------------ front page ------------------------------


// -----------------------------home page show details----------------------
    public function front()
    {

        $courses = Course::all();
        $feedbacks = Feedback::all();
        $teams = Team::all();
        $blogs=Gallery::all();
        return view("front.v2.index", compact('courses',"feedbacks",'teams','blogs'));

    }


    // -------------------------home page show details end----------------------


    //-------------------------------courses show-------------------------------
    public function showcourses(){

        $courses = Course::all();
        return view("front.v2.courses", compact('courses'));



    }


      //-------------------------------courses show end-------------------------------



      //----------------------------single courses details-----------------------------
    public function course_info($id){

        $courses = Course::findOrFail($id);
        return view("front.v2.single-course", compact('courses'));
    }

    //----------------------------single courses details end-----------------------------

   //-----------------------------Teams details------------------------------------------
   public function team(){

    $teams = Team::all();
    return view("front.v2.team", compact('teams'));
}


public function footer()
{

    return view('front.v2.contractus');
}



public function showassigntrainer()
{



}









// ------------------------------ front page ------------------------------
}
