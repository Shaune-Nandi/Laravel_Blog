@extends('layouts.app')
 
@section('Page_Title', 'Edit Post')

@section('Body_Content')
    <form action="/posts/posts-table/update/{{ $post->id }}" method="post">
    @csrf        
    
        <input type="text" class="form-control" name="id" value="{{ $post->id }}" hidden>
        <div class="form-group  mb-3">
            <label for="Post_Title">Post Title</label>
            <input type="text" class="form-control" name="Post_Title" value="{{ $post->Post_Title }}">
        </div>
        <div class="form-group  mb-3">
            <label for="Post_Description">Post Description</label>
            <textarea class="form-control" name="Post_Description" rows="15">{{ $post->Post_Description }}</textarea>
        </div>
        <div class="form-group  mb-3">
            <label for="Post_User_ID">Post User ID</label>
            <input type="number" class="form-control" name="Post_User_ID" value="{{ $post->Post_User_ID }}">
        </div>
        <center><button type="submit" class="btn btn-primary  mb-3">Update</button></center>
    </form>

@endsection