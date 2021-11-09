<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class signup extends Controller
{
    public function signup(){
        return view('signup');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name'   => 'required|min:3|max:50',
            'gender'        => 'required',
            'tgl_lhr'       => 'required',
            'kota_lhr'      => 'required|max:40',
            'nama_ortu'     => 'required|min:3|max:50',
            'alamat_ortu'   => 'required|max:100',
            'hp'            => 'required',
            'email'         => 'required|email:dns|unique:santri',
            'password'      => 'required||min:8|max:32'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        Santri::create($validatedData);
        User::create($validatedData);

        $request->session()->flash('success','Registrasi Berhasil! Silahkan Login');

        return redirect('/signin');
    }

    
}
