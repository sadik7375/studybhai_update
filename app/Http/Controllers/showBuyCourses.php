<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\admin\Course;
class showBuyCourses extends Controller
{

    public function index()
    {
//        $user = auth()->user();
//        $purchasedCourses = $user->orders()->where('status', 'Processing')->get();
//        return view('userprofile.usercourse', compact('user', 'purchasedCourses'));
        $user = auth()->user();

        if ($user) {
            $purchasedCourses = $user->orders()->where('status', 'Processing')->get();
            return view('userprofile.usercourse', compact('user', 'purchasedCourses'));
        } else {
            // Handle the case where the user is not found
            return redirect()->route('login'); // or any other action
        }

    }


}
