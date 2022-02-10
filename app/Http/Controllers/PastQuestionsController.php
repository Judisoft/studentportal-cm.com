<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PastQuestion;
use App\Http\Requests\PastQuestionsRequest;
use App\Institution;
use App\Models\User;
use Webpatser\Uuid\Uuid;

class PastQuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $past_questions = PastQuestion::all(); //->toJson();
        $normal_sessions = PastQuestion::where('type', 'normal session')->get();
        $continuose_assessments = PastQuestion::where('type', 'continuose assessment')->get();
        $tutorials = PastQuestion::where('type', 'tutorial')->get();
        $supplementary_questions = PastQuestion::where('type', 'supplementary question')->get();
        //return dd($past_questions);
        return view('resources.past-questions.index', compact('past_questions', 'normal_sessions', 'continuose_assessments', 'tutorials', 'supplementary_questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $institutions = Institution::all();
        $user_departments = User::distinct()->get();
        return view('resources.past-questions.create', compact('institutions', 'user_departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\PastQuestionsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PastQuestionsRequest $request)
    {
        $question = new PastQuestion;
        $question->uuid = 21243;
        $question->institution = $request->input('institution');
        $question->department = $request->input('department');
        $question->title = $request->input('title');
        $question->instructor = $request->input('instructor');
        $question->type = $request->input('type');
        $question->year = $request->input('year');
        $question->question_file = time().'.'.$request->question_file;
        $question->save();
    
        return back()->with('success', "Question uploaded successfully");
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
        return view('resources.past-questions.edit');
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
