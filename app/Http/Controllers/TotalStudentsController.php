<?php

namespace App\Http\Controllers;

use App\Models\User;

class TotalStudentsController extends Controller
{
    public function show()
    {
        // Fetch all students
        $students = User::all();

        // Pass the students to the view
        return view('admin.admin-content.course.totalStudents', compact('students'));
    }
}
