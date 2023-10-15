<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    function check(Request $request){
        $request->validate([
            'username'=>'required|min:5|max:15',
            'password'=>'required'
        ]);

        $userInfo=Users::where('username','=',$request->username)->first();

        if(!$userInfo){
            return back()->with('fail','There is no user with this username');
        }else{
            if(Hash::check($request->password,$userInfo->password)){
                $request->session()->put('LoggedUser',$userInfo->id);
                return redirect('/auth');
            }else{
                return back()->with('fail','Incorrect password');
            }
        }
    }
}
