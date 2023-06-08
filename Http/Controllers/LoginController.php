<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;


class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function loginuser(Request $request){
        if(Auth::attempt($request->only('username','password'))){
            return redirect('datamahasiswaadmin');
        }
        return redirect('login');
    }

    public function register(){
        return view('register');
    }

    public function registeruser(Request $request){
        User::create([
            'username'=>$request->username,
            'email_user'=>$request->email_user,
            'password'=>bcrypt($request->password),
            'remember_token'=>Str::random(60),
        ]);
        return redirect('/login');
    }
    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}
