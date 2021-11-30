<?php

namespace App\Http\Controllers;

use App\Models\Kemajuan;
use App\Models\Santri;
use Illuminate\Http\Request;


class KemajuanController extends Controller
{
    public function kemajuan(Santri $id){
        $kemajuan = Kemajuan::all();

        return view('dashboard.show.tabelKemajuan', [
            'kemajuan' => Kemajuan::where('id_santri', $id->id)-> get(),
            'idSantri' => Santri::find($id)]
        );
    }
}
