<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){

    $incomeExpenses = IncomeExpense::where('userID', auth()->user()->id)->get();

    return view('income-expenses.index', compact('incomeExpenses'));
    }
}
