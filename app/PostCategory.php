<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostCategory extends Model
{

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'post_categories';

    protected $guarded = ['id'];

    public function post()
    {
        return $this->hasMany(Post::class);
    }
}
