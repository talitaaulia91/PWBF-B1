<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Santri;



class SantriController extends Controller
{
    public function santri(){
        $santri = Santri::all();

        return view('dashboard.tabelSantri', ['santri' => $santri]);
    }



}

