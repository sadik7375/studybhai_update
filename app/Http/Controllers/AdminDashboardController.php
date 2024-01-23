<?php
namespace App\Http\Controllers;

use App\Models\admin\Course;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $coursesCount = Course::count();
        $studentsCount = User::count();
//        $totalAmountPaid = Course::sum('amount_paid');
//        $totalAmountPayable = Course::sum('amount_payable');

        return view('dashboard.adminindex', compact('coursesCount', 'studentsCount'));

    }
}
