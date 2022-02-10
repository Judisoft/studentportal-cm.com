<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Like extends Model
{
    protected $fillable = [
        'user_id'
    ];
}
