<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\santri;



class SantriController extends Controller
{
    public function index(){
        $santri = santri::all();
        return view('home', ['hpos'=>$santri]);
        // return view('home');
    }






}

