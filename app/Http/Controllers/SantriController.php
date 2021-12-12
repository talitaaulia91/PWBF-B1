<?php

namespace App\Http\Controllers;

use App\Models\santri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;



class SantriController extends Controller
{
    public function santri(){
        $santri = santri::all();

        return view('dashboard.tabelSantri', ['santri' => $santri]);
    }



    public function kemajuan(){
        $santri = santri::all();
        return view('dashboard.tabelKemajuan', ['santri' => $santri]);
    }



    public function destroy($id)
    {
        santri::find($id)->delete();

        return redirect('/santri')->with('deleteSantri','Delete success!');
    }


    public function edit($id){
        return view('dashboard.edit.editSantri',[
            'santri'  => santri::find($id),
            "title"     => Santri::find($id)->santri
        ]);
    }


    public function update(Request $request, Santri $santri){
        $validatedData = $request->validate([
            'name'          => 'required|min:3|max:50',
            'tgl_lhr'       => 'required',
            'kota_lhr'      => 'required|max:40',
            'nama_ortu'     => 'required|min:3|max:50',
            'hp'            => 'required',
            'email'         => 'required|email:dns',
            'password'      => 'required||min:8|max:32',
        ]);
        DB::table('santri')->where('id', $request->id)->update([
            'name'          => $request->name,
            'tgl_lhr'       => $request->tgl_lhr,
            'kota_lhr'      => $request->kota_lhr,
            'nama_ortu'     => $request->nama_ortu,
            'hp'            => $request->hp,
            'email'         => $request->email,
            'password'      => Hash::make($request->newPassword)
        ]);

        return redirect('/santri');
    }



}

