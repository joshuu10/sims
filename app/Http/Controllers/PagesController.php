<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function news(){
        return view('news');
    }

    public function createInvo(){
        return view('createInvo');
    }

    public function student(){
        return view('student');
    }

    public function profile(){
        return view('profile');
    }

    public function results(){
        return view('results');
    }
    
    public function security(){
        return view('security');
    }

    public function course(){
        return view('course');
    }

    public function messages(){
        return view('messages');
    }

    public function home(){
        return view('home');
    }

}
