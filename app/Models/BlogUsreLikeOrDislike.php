<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogUsreLikeOrDislike extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'blog_id',
        'user_id',
        'like_or_dislike',
    ];
}
