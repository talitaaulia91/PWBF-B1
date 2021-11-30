<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    public function buku(){
        return view('dashboard.tabelBuku', [
            $buku = Buku::all(),
            'buku' => $buku
        ]);
    }


    public function createBuku()
    {
        return view('dashboard.create.createBuku', [
            "title" => "Buku"
        ]);
    }



    public function store(Request $request){
        $validatedData = $request->validate([
            'judul' => 'required|max:50',
            'keterangan'        => 'required',
        ]);


        Buku::create($validatedData);

        $request->session()->flash('success','Input success!');

        return redirect('/buku');
    }


    public function destroy($id)
    {
        Buku::find($id)->delete();

        return redirect('/buku')->with('deleteBuku','Delete success!');
    }


    public function edit($id)
    {
        return view('dashboard.edit.editBuku', [
            'buku'  => Buku::find($id),
            "title" => Buku::find($id)->buku
        ]);
    }

    public function update(Request $request, Buku $buku)
    {
        DB::table('buku')->where('id',$request->id)->update([
            'judul'          => $request->judul,
            'keterangan'    => $request->keterangan
        ]);

        return redirect('/buku');
    }


}
