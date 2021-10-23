<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bab;

class BabController extends Controller
{
    public function bab(){
        $bab = Bab::all();

        return view('dashboard.tabelBab', ['bab' => $bab]);
    }

}
