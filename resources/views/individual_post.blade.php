@extends('layouts.app')
 
@section('Page_Title')
    Post #{{ $post->id }}
@endsection

@section('Body_Content_2')



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

            <div class="card-footer"><br>
                <center><h6>Comments</h6></center>
                @foreach($post->comments as $comment)
                    <div class="d-flex justify-content-start px-3">{{ $comment->Comment_Description }}</div>
                    <div class="d-flex justify-content-end px-3">
                        <p>Comment by <strong>{{ $comment->user->name }}</strong> ({{ now()->diffInHours($post->created_at) }} hours ago)</p>
                    </div>
                    <hr><br>
                @endforeach
            </div>
        </div>

@endsection

@section('Comments_2')
    <div class="card p-3 mt-3 mb-5">
        <form action="/posts/comments/{{ $post->id }}" method="post">
            @csrf
            Your comments:
            <textarea class="form-control" name="comment_text" id="comment_text" rows="14"></textarea>
            <input class="form-control" type="number" name="Comment_User_ID" value="{{ auth()->user()->id }}" readonly hidden>
            <center><button class="btn btn-success m-3" type="submit">Post Comment</button></center> 
        </form>
    </div>
@endsection
