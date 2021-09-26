<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class postController extends Controller
{
    public function index(){
        return view('home', [
            "title" => "Home",
            "posts" => post::all()
        ]); 
    }
}
