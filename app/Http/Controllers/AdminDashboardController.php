<?php
namespace App\Http\Controllers;

//use App\Models\admin\Course;
use App\Models\Orders;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminDashboardController extends Controller
{
    public function index()
    {
        $coursesCount = DB::table('courses')->count();
        $studentsCount = Orders::count();
        $trainersCount = Team::count();
        $orders = Orders::all(); // Or use your own query to fetch orders

        $totalRevenue = $orders->sum('amount');

        return view('dashboard.adminindex', compact('coursesCount', 'studentsCount', 'trainersCount', 'totalRevenue', 'orders'));
    }
}
