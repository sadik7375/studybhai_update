<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\admin\Course;
class showBuyCourses extends Controller
{

    public function index()
    {
        $user = auth()->user();

        $purchasedCourses = $user->orders()->where('status', 'Processing')->get();



        return view('userprofile.usercourse', compact('user', 'purchasedCourses'));
        // // dd( compact('user', 'purchasedCourses'));

    }


}
