<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengurus;

class PengurusController extends Controller
{
    public function pengurus(){
        $pengurus = Pengurus::all();
    }
}
