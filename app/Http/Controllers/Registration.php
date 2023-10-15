<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Users;

class Registration extends Controller
{
    function addMember(Request $request){
        $request->validate([
            "name"=>"required",
            "surname"=>"required",
            "username"=>"required|min:5|max:15|unique:users",
            "email"=>"required|email|unique:users",
            "phone"=>"required",
            'password' => [
                'required',
                'min:6',
                'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/'
            ]
        ]);

        $user=new Users;
        $user->name=$request->name;
        $user->surname=$request->surname;
        $user->username=$request->username;
        $user->email=$request->email;
        $user->active=true;
        $user->password=Hash::make($request->password);
        $user->phone=$request->phone;

        $save=$user->save();

        if($save){
            return view('login');
        }else{

        }

    }

   function deleteMember($id){

    }
}
