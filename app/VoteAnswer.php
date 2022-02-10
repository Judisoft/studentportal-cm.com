<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VoteAnswer extends Model
{
    protected $fillable = ['user_id'];
    protected $table = 'vote_answers';
}
