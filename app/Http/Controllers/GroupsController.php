<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\GroupRequest;
use App\Group;
use DOMDocument;
use Sentinel;
use File;

class GroupsController extends JoshController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $my_groups = Group::where('user_id', Sentinel::getUser()->id)->get();
        return view('collaboration.groups.index',compact('my_groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('collaboration.groups.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /* $this->validate($request, [
            'title' => 'required|min:3',
            'author' => 'required',
            'description' => 'required',
            'institution' => 'required',
            'user_id' => 'required',
            'image' => 'nullable'

        ]);
        */

        $group = new Group;
        $group->title = $request->input('title');
        $group->description = $request->input('description');
        $group->institution = Sentinel::getUser()->institution;
        $group->author = Sentinel::getUser()->full_name;
        $group->user_id = Sentinel::getUser()->id;
        $group->save();

        if ($group->id) {
            return redirect('collaboration/groups')->with('success', 'Group Created successfully');
        } else {
            return redirect('collaboration/groups')->withInput()->with('error', trans('Failed to create group'));
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
