<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    // Display the form to upload an image
    public function create()
    {
        return view("admin.admin-content.gallery.create");
    }

    // Store the uploaded image and its title
    public function store(Request $request)
    {

        $input = $request->validate([
            'title' => 'required|max:255',
            'image' => 'required|mimes:jpeg,jpg,png,gif',
            'description' => 'required',
        ]);


        if (request('image')) {
            $input['image'] = request('image')->store('photos');
        }

        // Create a new gallery entry
        Gallery::create($input);

        return redirect()->route('gallery.index')
            ->with('success', 'Image uploaded successfully.');
    }

    // Display the gallery
    public function index()
    {
        $galleries = Gallery::all();
        return view('front.v2.gallery', compact('galleries'));
    }


    public function view()
    {
         $galleries = Gallery::all();
        return view('admin.admin-content.gallery.view', compact('galleries'));
    }



        public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('admin.admin-content.gallery.edit', compact('gallery'));
    }



    public function details($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('front.v2.gallerydetails', compact('gallery'));
    }






    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // optional update for image
            'description' => 'required'
        ]);

        // Update the title
        $gallery->title = $request->title;
        $gallery->description = $request->description;

        // Update the image if a new one is provided
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
           $input= request('image')->store('photos');
            $gallery->image =$input;
        }

        $gallery->save();

        return redirect()->route('gallery.edit')
            ->with('success', 'Gallery item updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();
        return redirect()->route('gallery.edit')
            ->with('success', 'Gallery item deleted successfully.');
    }




}
