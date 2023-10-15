<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Type;
use App\Models\Type_Info;

class IncomeExpense extends Controller
{
    function addIncomeExpense(Request $request){
        $request->validate([
            "date"=>"required",
            'value' => [
                'required',
                'regex:/^\$[0-9]+$/'
            ]
        ]);

        $type=new Type;
        $type->date=$request->date;
        $type->value=$request->value;
        $type->notes=$request->notes;
        $type->userID=$request->userID;
        $type->category=$request->category;
        $type->in_exType=$request->type;
        $type->active=true;

        $type->save();

        if($type){
            $data=['LoggedUserInfo'=>Users::where('id','=',session('LoggedUser'))->first()];
            return view('auth',$data);
        }else{

        }
    }
}
