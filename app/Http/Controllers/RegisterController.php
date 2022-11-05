<?php

namespace App\Http\Controllers;

use App\Models\UsersModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }
    public function create(Request $request){
        $validate = $request -> validate([
                'name' => 'required|max:30',
                'email' => 'required|unique|max:50',
                'password'=>'required|min:4|max15'
            ]);
            if($validate){
                $insert = UsersModel::create([
                    'name' => $request->name,
                    'email'=> $request->email,
                    'password'=>Hash::make($request->password),
                    'token' => Hash::make('123')
                    ]);
              }
        if($insert){

            return redirect()->back();
        }
    }
}
