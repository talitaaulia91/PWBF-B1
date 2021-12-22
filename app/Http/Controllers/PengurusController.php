<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pengurus;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PengurusController extends Controller
{
    public function pengurus(){
        return view('dashboard.tabelPengurus', [
            $pengurus = Pengurus::all(),
            'pengurus' => $pengurus
        ]);
    }


    public function createPengurus()
    {
        return view('dashboard.create.createPengurus', [
            "title" => "Pengurus"
        ]);
    }




    
    public function store(Request $request){
        $validatedData = $request->validate([
            'nama_pengurus' => 'required|min:3|max:50',
            'gender'        => 'required',
            'hp'            => 'required',
            'email'         => 'required|email:dns',
            'password'      => 'required||min:8|max:32',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        Pengurus::create($validatedData);

        $idpengurus = Pengurus::latest()->first()->id;

        DB::table('users')->insert([
            'id_pengurus'   => $idpengurus,
            'name'          => $validatedData['nama_pengurus'],
            'email'         => $validatedData['email'],
            'password'      => $validatedData['password'],
            'role'          => 'Pengurus',
        ]);

        $request->session()->flash('success','Registrasi Berhasil!');

        return redirect('/pengurus');
    }


    public function destroy($id)
    {
        Pengurus::find($id)->delete();
        User::where('id_pengurus', $id)->delete();
        

        return redirect('/pengurus')->with('deletePengurus','Delete success!');
    }


    public function edit($id){
        return view('dashboard.edit.editPengurus',[
            'pengurus'  => Pengurus::find($id),
            "title"     => Pengurus::find($id)->pengurus
        ]);
    }


    public function update(Request $request, Pengurus $pengurus){
        $validatedData = $request->validate([
            'nama_pengurus' => 'required|min:3|max:50',
            'hp'            => 'required',
            'email'         => 'required|email:dns',
            'password'      => 'required||min:8|max:32',
        ]);
        DB::table('pengurus')->where('id', $request->id)->update([
            'nama_pengurus' => $request->nama_pengurus,
            'hp'            => $request->hp,
            'email'         => $request->email,
            'password'      => Hash::make($request->newPassword)
        ]);

        return redirect('/pengurus');
    }


   





}
