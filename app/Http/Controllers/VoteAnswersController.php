<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;

class VoteAnswersController extends Controller
{
    public function __construct()
{
    $this->middleware(['user']);
}
    public function store(Answer $answer, Request $request)
    {
        if ($answer->likedBy($request->user())) {
            return response(null, 409);
        }
        $answer->vote_answers()->create([
            'user_id' => $request->user()->id
        ]);

        return back();
    }

    public function destroy(Answer $answer, Request $request)
    {
        $request->user()->vote_answers()->where('answer_id', $answer->id)->delete();
        return back();
    }
}
