<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail_kemajuan;
use App\Models\Kemajuan;

class DetailKemajuanController extends Controller
{
    public function index($id)
    {
        return view('dashboard.show.tabelDetailKemajuan', [
            'detail_kemajuan'            => Detail_Kemajuan::where('id_kemajuan', $id)->with('bab')->get(),
            'santri'            => Kemajuan::find($id)->santri->nama,
            'santriid'          => Kemajuan::find($id)->santri->id,
            'id'                => Kemajuan::find($id)->id,
        ]);
    }
}
