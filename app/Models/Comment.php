<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'parent_id',
        'blog_id',
        'user_id',
        'auther_id',
        'comment',
    ];

}
