<?php

namespace App\Http\Controllers;

use App\Models\Peran;
use App\Models\Detail_peran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DetailPeranController extends Controller
{
    public function index($id)
    {
        return view('dashboard.show.tabelPengurus', [
            'detail_peran'   => Detail_peran::where('id_peran', $id)->with('pengurus')->get(),

        ]);
    }
}
