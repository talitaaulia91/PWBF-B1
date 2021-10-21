<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kemajuan;

class KemajuanController extends Controller
{
    public function kemajuan(){
        $kemajuan = Kemajuan::all();

        return view('dashboard.tabelKemajuan', ['kemajuan' => $kemajuan]);
    }
}
