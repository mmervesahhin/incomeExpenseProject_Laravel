<?php

use App\Http\Controllers\IncomeExpense;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('/check',[App\Http\Controllers\LoginController::class,'check'])->name('check');

Route::get('/logout',[App\Http\Controllers\Logout::class,'logout'])->name('logout');

Route::group(['middleware'=>['AuthCheck']],function(){
    Route::get('/auth', [MainController::class,'auth'])->name('auth');
    Route::get('/board', [MainController::class,'board'])->name('board');
    Route::post('/auth', [IncomeExpense::class,'addIncomeExpense'])->name('saveIncomeExpense');
    Route::get('/login', [MainController::class,'login'])->name('login');
    Route::get('/register', [MainController::class,'register'])->name('register');
    Route::post('/login',[App\Http\Controllers\Registration::class,'addMember'])->name('registered');
});
