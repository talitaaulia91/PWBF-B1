<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Mockery\Generator\StringManipulation\Pass\Pass;

class signin extends Controller
{

    public function signin(){
        return view('signin');
    }



    public function authenticate(Request $request)
    {
        $credentials = $request -> validate([
            'email'         => 'required|email:dns',
            'password'      => 'required',
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        };
        
        return back()->with('loginError', 'Login Gagal!');
    }



    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }





}

