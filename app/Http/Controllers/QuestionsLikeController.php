<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionsLikeController extends Controller
{
    public function __construct()
{
    $this->middleware(['user']);
}
    public function store(Question $question, Request $request)
    {
        if ($question->likedBy($request->user())) {
            return response(null, 409);
        }
        $question->likes()->create([
            'user_id' => $request->user()->id
        ]);

        return back();
    }

    public function destroy(Question $question, Request $request)
    {
        $request->user()->likes()->where('question_id', $question->id)->delete();
        return back();
    }
}
