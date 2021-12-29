<?php

namespace App\Http\Controllers;

use App\Models\Kemajuan;
use Illuminate\Http\Request;
use App\Models\Detail_kemajuan;
use App\Models\Bab;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DetailKemajuanController extends Controller
{
    public function index($id)
    {
        return view('dashboard.show.tabelDetailKemajuan', [
            'detail_kemajuan'           => Detail_Kemajuan::where('id_kemajuan', $id)->with('bab')->get(),
            'santri'            => Kemajuan::find($id)->santri->nama,
            'santriid'          => Kemajuan::find($id)->santri->id,
            'id'                => Kemajuan::find($id)->id,
        ]);
    }



    public function createKemajuan($id)
    {
        return view('dashboard.create.createDetailKemajuan', [
            'kemajuan'   => Kemajuan::find($id),
            'bab'        => Bab::find($id),
            "title"      => "Kemajuan"
        ]);
    }


    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_kemajuan'   => 'required',
            'id_bab'        => 'required',
            'keterangan'    => 'required',
        ]);

        Detail_kemajuan::create($validatedData);

        $request->session()->flash('success','Kemajuan Berhasil Ditambahkan!');

        return redirect('/kemajuan');
    }






    public function edit($id) {
        return view('dashboard.edit.editDetailKemajuan', [
            'detailKemajuan'  => Detail_kemajuan::find($id),
            "title"           => Detail_kemajuan::find($id)->detail_kemajuan
        ]);
    }





    public function update(Request $request, Detail_kemajuan $detail_kemajuan){
        DB::table('detail_kemajuan')->where('id',$request->id)->update([
            'id_pengurus' => $request->id_pengurus,
            'status'      => $request->status
        ]);

        return redirect('/kemajuan');
    }







    public function destroy($id)
    {
       Detail_kemajuan::find($id)->delete();

        return redirect('/kemajuan')->with('delete_detail_kemajuan','Delete success!');
    }
}
