<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Cviebrock\EloquentTaggable\Taggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

    use SoftDeletes;

    use Sluggable;
    use SluggableScopeHelpers;
    use Taggable;

    protected $dates = ['deleted_at'];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    protected $table = 'posts';

    protected $guarded = ['id'];

    public function comments()
    {
        return $this->hasMany(PostComment::class);
    }
    public function category()
    {
        return $this->belongsTo(PostCategory::class, 'post_category_id');
    }
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function getPostcategoryAttribute()
    {
        return $this->category->pluck('id');
    }
}
