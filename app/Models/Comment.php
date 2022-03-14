<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function post()
    {
        return $this->belongsTo(Post::class, 'Comment_Post_ID');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'Comment_User_ID');
    }

    protected $fillable = [
        'Comment_Description', 'Comment_Post_ID', 'Comment_User_ID'
    ];
}
