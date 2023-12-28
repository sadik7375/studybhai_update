<?php

namespace App\Http\Controllers;

use App\Models\admin\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        return view("admin.admin-content.course.view", compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.admin-content.course.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $inputs = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif',
            'duration' => 'nullable|string',
            'price' => 'nullable|string',
            'discounted_price' => 'nullable|string',
            'timeline' => 'nullable|string',
            'class_starts' => 'nullable|string',
            'admission_ends' => 'nullable|string',
            'foundation' => 'nullable|string',
            'intermediate' => 'nullable|string',
            'advanced' => 'nullable|string',
            'availability' => 'nullable|string',
        ]);


        if (request('image')) {
            $inputs['image'] = request('image')->store('photos');
        }

        auth()->user()->course_creation()->create($inputs);
        session()->flash("success", "Course Created Successfully");
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\admin\Course $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\admin\Course $course
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view("admin.admin-content.course.edit", compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\admin\Course $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $inputs = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|mimes:jpeg,jpg,png,gif',
            'duration' => 'nullable|string',
            'price' => 'nullable|string',
            'discounted_price' => 'nullable|string',
            'timeline' => 'nullable|string',
            'class_starts' => 'nullable|string',
            'admission_ends' => 'nullable|string',
            'foundation' => 'nullable|string',
            'intermediate' => 'nullable|string',
            'advanced' => 'nullable|string',
            'availability' => 'nullable|string',
        ]);


        if (request('image')) {
            $inputs['image'] = request('image')->store('photos');
        }else{
            $inputs['image'] = $course->image;
        }

        $course->update($inputs);
        session()->flash("success", "Course Updated Successfully");
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\admin\Course $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();
        session()->flash("success", "Course Successfully Deleted");
        return back();
    }
}
