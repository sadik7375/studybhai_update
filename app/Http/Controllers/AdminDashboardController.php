<?php
namespace App\Http\Controllers;

use App\Models\Admin\Course;
use App\Models\Orders;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;


class AdminDashboardController extends Controller
{
    public function index()
    {
        $coursesCount = Course::count();
        $studentsCount = Orders::count();
        $trainersCount = Team::count();
        $orders = Orders::all(); // Or use your own query to fetch orders

        $totalRevenue = $orders->sum('amount');

        return view('dashboard.adminindex', compact('coursesCount', 'studentsCount', 'trainersCount', 'totalRevenue', 'orders'));
    }
}
