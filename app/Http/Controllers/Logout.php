<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Logout extends Controller
{
    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/login');
        }
    }
}
