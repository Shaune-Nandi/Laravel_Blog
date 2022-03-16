@extends('layouts.app')

@section('Page_Title')
    User Register
@endsection

@section('Body_Content')
    <form action="{{ __('/register') }}" method="POST">
        @csrf     
        <center><h3 class="mt-5">Register</h3></center>  
        <div class="form-group mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
        </div>
        <div class="form-group mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
        </div>
        <div class="form-group mb-3">
            <label for="role">Role</label>
            <input type="text" class="form-control" name="role" value="{{ old('role') }}">
        </div>
        <div class="form-group mb-3">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <center><button type="submit" class="btn btn-primary mb-3">Register</button></center>
    </form>

@endsection
