<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\santri;



class SantriController extends Controller
{
    public function santri(){
        $santri = santri::all();
    }






}

