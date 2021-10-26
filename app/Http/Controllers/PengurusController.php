<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengurus;

class PengurusController extends Controller
{
    public function pengurus(){
        $pengurus = Pengurus::all();

        return view('dashboard.tabelPengurus', ['pengurus' => $pengurus]);
    }


    public function createPengurus()
    {
        return view('dashboard.create.createPengurus', [
            "title" => "Pengurus"
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'nama'   => 'required|min:3|max:50',
            'email'         => 'required|email:dns|unique:santri',
            'hp'            => 'required',
            'gender'        => 'required',
            'password'      => 'required||min:8|max:32',
            
           
           
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        Pengurus::create($validatedData);

        $request->session()->flash('success','DAta berhasil ditambahkan!');

        return redirect('/tabelPengurus');
    
    }
}
