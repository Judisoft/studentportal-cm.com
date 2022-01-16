<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostComment extends Model
{

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'post_comments';

    protected $guarded = ['id'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
