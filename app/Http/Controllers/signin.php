<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Mockery\Generator\StringManipulation\Pass\Pass;

class signin extends Controller
{
    public function index() {
        return view('signin');
    }

    public function signin(){
        $dataUsers = User::all();
        
        $email = $_GET["email"];
        $pass = $_GET["password"];

        foreach ($dataUsers as $dataUser) {
            if ($email == $dataUser -> email) {
                if ($pass == $dataUser -> password) {
                    return view('layouts.dashboard');
                }
            }
        }
        
        return view('signin');
    }
}

