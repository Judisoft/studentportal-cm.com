<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CourseRequest;
use App\Http\Controllers\Redirect;
use App\Course;
use DOMDocument;
use Sentinel;
use File;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('resources.courses.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resources.courses.create');
    }

 /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CourseRequest $request)
    {

        $course = new Course($request->all());

        if ($file = $request->file('cover_image')) {
            $extension = $file->extension();
            $folderName = '/uploads/courses/';
            $destinationPath = public_path() . $folderName;
            $safeName = str_random(10) . '.' . $extension;
            $file->move($destinationPath, $safeName);

            //delete old cover_image if exists
            if (File::exists(public_path() . $folderName . $course->cover_image)) {
                File::delete(public_path() . $folderName . $course->cover_image);
            }
            //save new file path into db
            $course->cover_image =url('/').'/uploads/courses/'.$safeName;
        }
        $course->user_id = Sentinel::getUser()->id;
        $course->save();

        if ($course->id) {
            return redirect('resources/courses/create')->with('success', 'Course posted successfully');
        } else {
            return redirect('resources/courses/create')->withInput()->with('error', trans('Course post failed'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
