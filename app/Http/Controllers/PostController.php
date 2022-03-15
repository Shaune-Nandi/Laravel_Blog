<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function index()
    {
        //$posts = Post::all();
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('post', compact('posts'));
    }
//ff

    public function posts_table(){
        $posts = Post::all();
        return view('posts_table', ['posts' => $posts]);
    }



    
    public function create(){
        return view('create_post');
    }




    public function store(){
        request()->validate([
            'Post_Title' => 'required',
            'Post_Description' => 'required',
            'Post_User_ID' => 'required'
        ]);

        Post::create([
            'Post_Title' => request('Post_Title'),
            'Post_Description' => request('Post_Description'),
            'Post_User_ID' => request('Post_User_ID')
        ]);

        return redirect('/posts/posts-table');
    }







    public function update(Request $request, Post $post)
    {

        //dd(request()->all());

        request()->validate([
            'Post_Title' => 'required',
            'Post_Description' => 'required',
            'Post_User_ID' => 'required'
        ]);

        $post->update([
            'Post_Title' => request('Post_Title'),
            'Post_Description' => request('Post_Description'),
            'Post_User_ID' => request('Post_User_ID')
        ]);

        return redirect('posts/posts-table');
    }




    public function show(Post $post)
    {
	    //return $post;
        return view('individual_post', ['post' => $post]);
    }







    public function posts_table_actions(Request $request, Post $post){
        if (request()->btn_view)        
        {
            $post = Post::find(request('id'));
            return view('individual_post', ['post' => $post]);
        }

        
        elseif (request()->btn_update)
        {
            return view('edit_post', ['post' => $post]);
        }


        elseif (request()->btn_delete)
        {
            $post = Post::find(request('id'));
            $post->delete($post);
            return redirect('/posts/posts-table');
        }
    }
}
