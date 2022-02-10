<?php

namespace App\Http\Controllers;

use App\Http\Controllers\JoshController;
use App\Question;
use App\Models\QuestionCategory;
use App\Answer;
use App\Http\Requests\AnswerRequest;
use App\Http\Requests\QuestionRequest;
use Response;
use Sentinel;
use Intervention\Image\Facades\Image;
use DOMDocument;

class UserQuestionsController extends JoshController
{


    private $tags;

    public function __construct()
    {
        parent::__construct();
        $this->tags = Question::allTags();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // Grab all the question
        $my_questions = Question::where('user_id', Sentinel::getUser()->id)->orderBy('id','desc')->get();
        // Show the page
        return view('academia.my-questions.index', compact('my_questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $questioncategory = QuestionCategory::pluck('title', 'id');
        //return var_dump($questioncategory);
        return view('academia.my-questions.create', compact('questioncategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(QuestionRequest $request)
    {

        $question = new Question($request->except('files', 'image', 'tags'));
        $message=$request->get('content');
        $dom = new DomDocument();
        $dom->loadHtml($message, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');

        // foreach <img> in the submited message
        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            // if the img source is 'data-url'
            if (preg_match('/data:image/', $src)) {
                // get the mimetype
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];
                // Generating a random filename
                $filename = uniqid();
                $filepath = "uploads/question/$filename.$mimetype";
                // @see http://image.intervention.io/api/
                $image = Image::make($src)
                    // resize if required
                    /* ->resize(300, 200) */
                    ->encode($mimetype, 100)  // encode file to the specified mimetype
                    ->save(public_path($filepath));
                $new_src = asset($filepath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
            } // <!--endif
        } // <!-
        $question->content = $dom->saveHTML();

        $picture = "";

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->extension()?: 'png';
            $picture = str_random(10) . '.' . $extension;
            $destinationPath = public_path() . '/uploads/question/';
            $file->move($destinationPath, $picture);
            $question->image = $picture;
        }
        $question->user_id = Sentinel::getUser()->id;
        $question->save();

        $question->tag($request->tags?$request->tags:'');

        if ($question->id) {
            return redirect('question')->with('success', 'Question posted successfully');
        } else {
            return Redirect::route('question')->withInput()->with('error', trans('Question post failed'));
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  Question $question
     * @return view
     */
    public function show(Question $question)
    {
        $answers = Question::find($question->id)->answers;

        return view('academia.my-questions.show', compact('question', 'answers', 'tags'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Question $question
     * @return view
     * @param $id
     */
    public function edit(Question $question, $id)
    {
        $questioncategory = QuestionCategory::pluck('title', 'id');
        $question = Question::find($id);
        //return print_r($question);
        return view('academia.my-questions.edit', compact('question', 'questioncategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Question $question
     * @return Response
     */
    public function update(QuestionRequest $request, Question $question)
    {
        $message=$request->get('content');
        libxml_use_internal_errors(true);
        $dom = new DomDocument();
        $dom->loadHtml($message, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');
        // foreach <img> in the submited message
        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            // if the img source is 'data-url'
            if (preg_match('/data:image/', $src)) {
                // get the mimetype
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];
                // Generating a random filename
                $filename = uniqid();
                info($filename);
                $filepath = "uploads/question/$filename.$mimetype";
                // @see http://image.intervention.io/api/
                $image = Image::make($src)
                    ->encode($mimetype, 100)  // encode file to the specified mimetype
                    ->save(public_path($filepath));
                $new_src = asset($filepath);
            } else {
                $new_src=$src;
            }
            $img->removeAttribute('src');
            $img->setAttribute('src', $new_src);
        } // <!-
        $question->content = $dom->saveHTML();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->extension()?: 'png';
            $picture = str_random(10) . '.' . $extension;
            $destinationPath = public_path() . '/uploads/question';
            $file->move($destinationPath, $picture);
            $question->image = $picture;
        }


        $question->retag($request->tags?$request->tags:'');

        if ($question->update($request->except('content', 'image', 'files', '_method', 'tags'))) {
            return redirect('academia.my-question/edit')->with('success', trans('question/message.success.update'));
        } else {
            return Redirect::route('academia.my-question/edit')->withInput()->with('error', trans('question/message.error.update'));
        }
    }

    /**
     * Remove question.
     *
     * @param  Question $question
     * @return Response
     */
    public function getModalDelete(Question $question)
    {
        $model = 'question';
        $confirm_route = $error = null;
        try {
            $confirm_route = route('questions.delete', ['id' => $question->id]);
            return view('admin.layouts.modal_confirmation', compact('error', 'model', 'confirm_route'));
        } catch (RoleNotFoundException $e) {
            $error = trans('question/message.error.destroy', compact('id'));
            return view('admin.layouts.modal_confirmation', compact('error', 'model', 'confirm_route'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Question $question
     * @return Response
     */
    public function destroy(Question $question)
    {
        if ($question->delete()) {
            return redirect('question')->with('success', trans('question/message.success.delete'));
        } else {
            return Redirect::route('question')->withInput()->with('error', trans('question/message.error.delete'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AnswerRequest $request
     * @param Question               $question
     *
     * @return Response
     */
    public function storeAnswer(AnswerRequest $request, Question $question)
    {
        $answers = new Answer($request->all());
        $answers->blog_id = $question->id;
        $answers->save();
        return redirect('question/' . $question->id);
    }
}
