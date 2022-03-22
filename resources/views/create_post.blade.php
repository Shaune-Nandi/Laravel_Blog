@extends('layouts.app')
 
@section('Page_Title', 'Create New Post')

@section('Body_Content')
    <form action="{{ __('/posts') }}" method="post">
    @csrf        
        <div class="form-group">
            <label for="Post_Title">Post Title</label>
            <input type="text" class="form-control" name="Post_Title">
        </div>
        <div class="form-group">
            <label for="Post_Description">Post Description</label>
            <textarea class="form-control" name="Post_Description" rows="10"></textarea>
        </div>
        <div class="form-group">
            <label for="Post_User_ID" hidden>Post User ID</label>
            <input type="number" class="form-control" name="Post_User_ID" value="{{ auth()->user()->id }}" readonly hidden>
        </div><br>
        <center><button type="submit" class="btn btn-primary">Create post</button></center>
    </form>

@endsection