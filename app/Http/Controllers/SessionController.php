<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    //

    public function index(){
        $errorMessage = session('error_message');
        return view("login.login", compact('errorMessage'));
    }

    public function login(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required'=>'Email wajib diisi',
            'password.required'=>'Password wajib diisi'
        ]);

        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password
        ];

        if(Auth::attempt($infologin)){
            return redirect('/account')->with('success', 'Log In successfully!');
        }else{
            return redirect('/')->with('error_message', 'Email atau password yang anda masukan salah');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
