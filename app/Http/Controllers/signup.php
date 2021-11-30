<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Santri;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;


class signup extends Controller
{
    public function signup(){
        return view('signup');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name'          => 'required|min:3|max:50',
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

        $santri_id = Santri::latest()->first()->id;

        DB::table('users')->insert([
            'id_santri'     => $santri_id,
            'name'          => $validatedData['name'],
            'role'          => 'santri',
            'email'         => $validatedData['email'],
            'password'      => $validatedData['password']
        ]);

      
        

        $request->session()->flash('success','Registrasi Berhasil! Silahkan Login');

        return redirect('/signin');
    
    }
}
