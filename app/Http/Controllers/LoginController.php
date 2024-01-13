<?php

namespace App\Http\Controllers;

use App\Models\User;
use  Session;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check())
        {
            return redirect('home');
        }
        else
        {
            return view('login');
        }
    }
    public function register (){
        return view('register');
    }
    public function registeruser(Request $request){
        User::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'password' => bcrypt($request->password),
            //'remember_token' => Str::random(60),
            'role' =>$request->role,
        ]);
        return redirect('/login');
    }

    public function loginaksi(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data))
        {
            return redirect('home');
        }
    }

    public function logoutaksi()
    {
        Auth::logout();
        return redirect('/');
    }
}
