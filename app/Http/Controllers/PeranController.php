<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peran;

class PeranController extends Controller
{
    public function peran(){
        $peran = Peran::all();
    }
}
