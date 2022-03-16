<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function create(){
        return view('user_registration');
    }

    public function store(){
        //dd(request()->all());
        $userDetails = request()->validate(
            [
            'name' => 'required',
            'email' => ['required', 'email'],
            'role' => 'required',
            'password' => 'required'
            ]
        );

        $userDetails['password'] = bcrypt($userDetails['password']);

        $user = User::create($userDetails);

        auth()->login($user);

        return redirect('/posts');
    }



    public function login(){

        return view('login');
    }

    public function login_store(){
        $userDetails = request()->validate(
            [
            'email' => ['required', 'email'],
            'password' => 'required'
            ]
        );

        if(auth()->attempt($userDetails)){
            session()->regenerate();
            return redirect('/posts');
        }
        return view('/login');

    }




    public function logout(){
        auth()->logout();

        return redirect('/');
    }
}
