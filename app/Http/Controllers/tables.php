<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tables extends Controller
{
    public function tables(){
        return view('dashboard/tables');
    }
}
