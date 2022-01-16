<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Cviebrock\EloquentTaggable\Taggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

class Question extends Model
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

    protected $table = 'questions';

    protected $guarded = ['id'];

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function category()
    {
        return $this->belongsTo(QuestionCategory::class, 'question_category_id');
    }

    public function author()
    {
        return $this->belongsTo(Models\User::class, 'user_id');
    }

    public function getBlogcategoryAttribute()
    {
        return $this->category->pluck('id');
    }

    public function likedBy(User $user)
    {
        return $this->likes->contains('user_id', $user->id);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
