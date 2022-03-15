@extends('layouts.app')

@section('Page_Title', 'All Posts')

@section('Body_Content')
    @php $count = 0; @endphp
    @foreach ($posts as $post)
    
        @php
            $count = $count+1;
        @endphp
        
        <a class="card hover-shadow border p-3 mt-3 mb-5 text-reset" href="/posts/{{ $post->id }}">
            <div class="card-header">
                <h5 class="b-1">{{ $post->Post_Title }}</h5>
                <small>
                    <span class="float-start">Posted on: {{ $post->created_at }}</span>
                    <span class="float-end">Author: {{ $post->user->name }} </span>
                </small>
            </div>
            
            <div class="card-body">
                <p class="card-text">{{ Str::words($post->Post_Description, 70) }}</p>
            </div>

            <div class="card-footer">
                <h6>Comments</h6>
                @foreach($post->comments as $comment)
                    <p class="px-5">{{ $comment->Comment_Description }}</p>
                @endforeach
            </div>
        </a>

    
    @endforeach
@endsection

@section('Count')
    @php echo "Showing " . @$count . " Posts"; @endphp   
@endsection
