<?php

namespace App\Http\Controllers;

use App\Models\Bab;
use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class BabController extends Controller
{

    public function index(Buku $id)
    {
        return view('dashboard.show.tabelBab', [
            'bab'   => Bab::where('id_buku', $id->id)->get(),
            'buku' => $id,
            "title" => "Buku",
        ]);
    }

    

    public function createBab($id)
    {
        return view('dashboard.create.createBab', [
            'buku' => Buku::find($id),
            "title" => "Bab"
        ]);
    }



    public function store(Request $request){
        $validatedData = $request->validate([
            'bab'           => 'required|max:50',
            'judul'         => 'required|max:100',
            'id_buku'       => 'required',
            'keterangan'    => 'required',
        ]);

        Bab::create($validatedData);

        $request->session()->flash('successBab','Bab Berhasil Ditambahkan');

        return redirect('/buku');
    }


    public function destroy($id){
        Bab::find($id)->delete();

        return redirect('/buku')->with('deleteBab','Delete success!');
    }



    public function edit($id) {
        return view('dashboard.edit.editBab', [
            'bab'  => Bab::find($id),
            "title" => Bab::find($id)->bab
        ]);
    }




    public function update(Request $request, Bab $bab) {
        DB::table('bab')->where('id',$request->id)->update([
            'judul'          => $request->judul,
            'keterangan'    => $request->keterangan
        ]);

        return redirect('/buku');
    }


}
