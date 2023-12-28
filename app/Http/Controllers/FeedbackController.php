<?php

namespace App\Http\Controllers;

use App\Models\admin\Course;
use App\Models\admin\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $feedbacks = Feedback::all();
        return view("admin.admin-content.feedback.view", compact('feedbacks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.admin-content.feedback.create");
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
        ]);


        if (request('image')) {
            $inputs['image'] = request('image')->store('photos');
        }

        auth()->user()->feedback()->create($inputs);
        session()->flash("success", "Feedback Added Successfully");
        return redirect()->route('feedback.index');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\admin\Feedback $feedback
     * @return \Illuminate\Http\Response
     */
    public function show(Feedback $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\admin\Feedback $feedback
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Feedback $feedback)
    {
        return view("admin.admin-content.feedback.edit", compact('feedback'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\admin\Feedback $feedback
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Feedback $feedback)
    {
        $inputs = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif',
        ]);


        if (request('image')) {
            $inputs['image'] = request('image')->store('photos');
        } else {
            $inputs['image'] = $feedback->image;
        }

        $feedback->update($inputs);
        session()->flash("success", "Feedback Updated Successfully");
        return redirect()->route('feedback.index');
        //dd
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\admin\Feedback $feedback
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Feedback $feedback)
    {
        $feedback->delete();
        session()->flash("success", "Feedback Deleted Successfully");
        return back();

    }
}
