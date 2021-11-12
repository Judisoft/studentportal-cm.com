<?php

namespace App\Repositories\Questions;

use App\Models\Questions\Question;
use InfyOm\Generator\Common\BaseRepository;

class QuestionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Question::class;
    }
}
