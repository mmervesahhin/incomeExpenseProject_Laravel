<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function auth(){
        $data=['LoggedUserInfo'=>Users::where('id','=',session('LoggedUser'))->first()];
        return view('auth',$data);
    }

    function login(){
        return view('login');
    }

    function register(){
        return view('register');
    }

    function list(){
        return view('pages');
    }

    function board(){
        $data=['LoggedUserInfo'=>Users::where('id','=',session('LoggedUser'))->first()];
        return view('board',$data);
    }
}
