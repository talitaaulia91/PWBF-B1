<?php

namespace App\Http\Controllers;

use App\Models\santri;
use App\Models\Kemajuan;
use App\Models\Pengurus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class KemajuanController extends Controller
{
    public function kemajuan(Santri $id){
        $kemajuan = Kemajuan::all();

        return view('dashboard.show.tabelKemajuan', [
            'kemajuan' => Kemajuan::where('id_santri', $id->id)-> get(),
            'idSantri' => santri::find($id),
            'pengurus'  => Pengurus::find($id)
            ]);
    }

    public function createKemajuan($id)
    {
        return view('dashboard.create.createKemajuan', [
            'title'     => santri::find($id)->nama,
            'idsantri'  => santri::find($id)->id,
            'pengurus'  => Pengurus::find($id),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_santri'     => 'required',
            'id_pengurus'   => 'required',
            'tanggal'       => 'required',
            'status'        => 'required',
        ]);

        Kemajuan::create($validatedData);

        $request->session()->flash('success','Kemajuan Berhasil Ditambahkan!');

        return redirect('/kemajuan');
    }




}
