<?php

namespace App\Models\Questions;

use Illuminate\Database\Eloquent\Model;



class Question extends Model
{

    public $table = 'Questions';
    


    public $fillable = [
        'title'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
