<?php

namespace App\Http\Controllers;

use App\Models\Peran;
use App\Models\Pengurus;
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


    public function createDetailPeran($id)
    {
        return view('dashboard.create.createDetailPeran', [
            'peran'      => Peran::all(),
            'pengurus'   => Pengurus::find($id),
            "title"      => $id
        ]);
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_pengurus'     => 'required',
            'id_peran'        => 'required'
        ]);

        Detail_peran::create($validatedData);
        return redirect('/pengurus');
    }


    public function destroy($id)
    {
       Detail_peran::find($id)->delete();

        return redirect('/peran')->with('delete_detail_peran','Delete success!');
    }





}
