<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuestionCategory extends Model
{

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'question_categories';

    protected $guarded = ['id'];

    public function question()
    {
        return $this->hasMany(Question::class);
    }
}
