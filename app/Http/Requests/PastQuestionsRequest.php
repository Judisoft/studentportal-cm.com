<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PastQuestionsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'institution' => 'required',
            'department' => 'required',
            'title' => 'required',
            'instructor' => 'nullable',
            'type' => 'required',
            'year' => 'required',
            'question_file' => 'required|max:5000'
        ];
    }
}
