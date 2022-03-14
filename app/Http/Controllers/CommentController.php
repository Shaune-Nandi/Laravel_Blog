<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store (Request $request, Post $post)
    {
        request()->validate([
            'comment_text' => 'required',
            'Comment_User_ID' => 'required'
        ]);

        Comment::create([
            'Comment_Description' => request('comment_text'),
            'Comment_Post_ID' => $post->id,
            'Comment_User_ID' => request('Comment_User_ID')
        ]);

        return redirect('/posts');    
    }
}
