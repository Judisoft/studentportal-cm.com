<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

class Answer extends Model
{

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'answers';

    protected $guarded = ['id'];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
    public function likedBy(User $user)
    {
        return $this->vote_answers->contains('user_id', $user->id);
    }

    public function vote_answers()
    {
        return $this->hasMany(VoteAnswer::class);
    }
}
