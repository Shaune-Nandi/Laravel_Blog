@extends('layouts.app')

@section('Page_Title')
    Login
@endsection

@if(session('Login_Message_Flash'))
    <div class="alert alert-info">
        <center>{{ session('Login_Message_Flash') }}</center>                        
    </div>
@endif


@section('Body_Content')
    <form action="{{ __('/login') }}" method="POST">
        @csrf     
        <center><h3 class="mt-5">Login</h3></center>  
        <div class="form-group mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
        </div>
        <div class="form-group mb-3">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <center><button type="submit" class="btn btn-primary mb-3">Login</button></center>
    </form>
@endsection