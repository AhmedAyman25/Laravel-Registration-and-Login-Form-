<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
       $validate = $request->validate([
            'email' => 'required',
            'password' =>'required'
        ]);
        if($validate){
            $info = $request->only('email','password');
            if(Auth::attempt($info))
            {
                return redirect()->to('dashboard');
            }

            return redirect()->to('login');
        }



    }
}
