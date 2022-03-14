@extends('layouts.app')
 
@section('Page_Title')
    Post #{{ $post->id }}
@endsection

@section('Body_Content')



        <div class="card p-3 mt-3 mb-5">
            <div class="card-header">
                <h5 class="b-1">{{ $post->Post_Title }}</h5>
                <small>
                    <span class="float-start">Posted on: {{ $post->created_at }}</span>
                    <span class="float-end">Author: {{ $post->user->name }} </span>
                </small>
            </div>
            
            <div class="card-body">
                <p class="card-text">{{ $post->Post_Description }}</p>
            </div>

            <div class="card-footer">
                <h6>Comments</h6>
                @foreach($post->comments as $comment)
                        <div class="d-flex justify-content-start px-3">{{ $comment->Comment_Description }}</div>
                        <div class="d-flex justify-content-end px-3"><span>Comment by {{ $comment->user->name }} </span> </div>
                @endforeach
                <hr><br>
                <form action="/posts/comments/{{ $post->id }}" method="post">
                    @csrf
                    Enter your comment here:
                    <textarea class="form-control" name="comment_text" id="comment_text" rows="3"></textarea>
                    User ID: <strong class="text-danger">(***Temporary***)</strong><input class="form-control" type="number" name="Comment_User_ID">
                    <center><button class="btn btn-success m-3" type="submit">Save</button></center> 
                </form>
            </div>
        </div>

@endsection