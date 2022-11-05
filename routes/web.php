<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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


Route::get('/',[RegisterController::class,'index']);
Route::post('register',[RegisterController::class,'create'])->name('CreateUser');

Route::get('/login',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'login'])->name('LoginUser');

Route::get('dashboard',function(){
    return view('dashboard');
});