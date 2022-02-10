<?php

namespace App\Http\Controllers;

use App\Question;
use App\Answer;
use App\Models\User;
use App\Http\Requests\AnswerRequest;

class QuestionController extends JoshController
{


    private $tags;

    public function __construct()
    {
        parent::__construct();
        $this->tags = Question::allTags();
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Grab all the questions
        $latest_questions = Question::orderBy('id', 'desc')->take(10)->get();
        $questions = Question::paginate(25);
        $user = User::all();
        $tags = $this->tags;
        // Show the page
        return view('questions', compact('latest_questions', 'questions', 'tags', 'user'));
    }

    /**
     * @param  string $slug
     * @param Question $question
     * @return \Illuminate\View\View
     */
    public function getQuestion($slug = '')
    {

        $question = Question::where('slug', $slug)->first();
        if ($question) {
            $question->increment('views');
        } else {
            abort('404');
        }
        // get related questions
        $related_questions = Question::where('question_category_id', $question->question_category_id)->latest()->paginate(25);
        // Show the page
        return view('questionitem', compact('question', 'related_questions'));
    }

    /**
     * @param  $tag
     * @return \Illuminate\View\View
     */
    public function getQuestionTag($tag)
    {
        $questions = Question::withAnyTags($tag)->get();
        $tags = $this->tags;
        return view('question', compact('questions', 'tags'));
    }

    /**
     * @param  AnswerRequest $request
     * @param  Question               $question
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function storeAnswer(AnswerRequest $request, Question $question)
    {
        $questioncooment = new Answer($request->all());
        $questioncooment->question_id = $question->id;
        $questioncooment->save();
        return redirect('questionitem/' . $question->slug)->with('success', 'Answer posted successfully');
    }
}
