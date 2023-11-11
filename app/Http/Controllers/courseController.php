<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class courseController extends Controller
{
    // The method is called index, create, etc... We are using the views
    public function index()
    {
        $courses = Course::all();

        return view('courses.index', ['courses' => $courses]);
    }

    public function create()
    {
        return view("courses.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'language' => 'required',
            'difficulty' => 'required',
            'instructor' => 'required',
            'email' => 'required',
        ]);

        $course = new Course;
        $course->title = $request->title;
        $course->description = $request->description;
        $course->language = $request->language;
        $course->difficulty = $request->difficulty;
        $course->instructor = $request->instructor;
        $course->email = $request->email;
        $course->email_verified_at = $request->email_verified_at;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('courseImage', 'public');
            $course->image_path = $imagePath;
        }

        $course->save();
        return redirect()->route('courses.index');
    }

    public function show($id)
    {
        $course = Course::find($id);

        return view("courses.show", compact('course'));
    }

    public function edit($id)
    {
        $course = Course::find($id);

        return view('courses.edit', ['course' => $course]);    
    }

    public function update(Request $request, $id)
    {
        $course = Course::find($id);

        $course->title = $request->title;
        $course->description = $request->description;
        $course->language = $request->language;
        $course->difficulty = $request->difficulty;
        $course->instructor = $request->instructor;
        $course->email = $request->email;

        $course->save();
        return redirect()->route('courses.index');    
    }

    public function destroy($id)
    {
        $course = Course::find($id);
        
        $course->delete();
        return redirect()->route('courses.index');
    }
}