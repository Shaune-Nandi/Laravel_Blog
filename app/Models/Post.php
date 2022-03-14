<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function comments()
    {
        return $this->hasMany(Comment::class, 'Comment_Post_ID');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'Post_User_ID');
    }

    protected $fillable = [
        'Post_Title', 'Post_Description', 'Post_User_ID'
    ];
}
