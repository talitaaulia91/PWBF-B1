<?php

namespace App\Http\Controllers;

use App\Models\santri;
use App\Models\Kemajuan;
use App\Models\Pengurus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class KemajuanController extends Controller
{



    public function kemajuan(Santri $santri, $id)
    {
        return view('dashboard.show.tabelKemajuan', [
            'kemajuan'  => Kemajuan::where('id_santri', $id)->orderby('tanggal', 'desc')->with('pengurus')->get(),
            'title'     => Santri::find($id)->nama,
            'idsantri'  => Santri::find($id)->id,
            'counter'   => 1
        ]);
    }





    public function createKemajuan($id)
    {
        return view('dashboard.create.createKemajuan', [
            'santri'   => Santri::find($id),
            'pengurus' => Pengurus::find($id),
            "title"    => "Kemajuan"
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


    public function destroy($id)
    {
        Kemajuan::find($id)->delete();

        return redirect('/kemajuan')->with('delete_kemajuan','Delete success!');
    }




}
