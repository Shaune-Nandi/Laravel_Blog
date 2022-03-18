@extends('layouts.app')
@section('Body_Content')
    <h2><center>THE BLOG</center></h2>

    </script>
    <br><hr><br>
    @if(session('logout_flash'))
        <div class="alert alert-primary">
            <center>{{ session('logout_flash') }}</center>                        
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex justify-content-center">
                <a href="/posts">
                    <button class="btn p-5 m-5">
                        Show all posts
                    </button>
                </a>
            </div>

            <div class="col-md-6 d-flex justify-content-center">
                <a href="/posts/posts-table">
                    <button class="btn p-5 m-5">
                        admin actions
                    </button>
                </a>
            </div>
        </div>
    </div>

@endsection

