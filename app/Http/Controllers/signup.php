<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\santri;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


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

        santri::create($validatedData);

        $santri_id = santri::latest()->first()->id;

        DB::table('users')->insert([
            'id_santri'     => $santri_id,
            'name'          => $validatedData['name'],
            'role'          => 'Santri',
            'email'         => $validatedData['email'],
            'password'      => $validatedData['password']
        ]);

    
        return redirect('/signin');
    
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'image' => 'image|file|max:5000'
        ]);

        // if($request->file('image')){
        //     if($request->oldImage){
        //         Storage::delete($request->oldImage);
        //     }
        //     $path = $request->file('image')->store('storage');
        // }

        $file = $request->file('image');
        $target_dir = "uploads/"; //lokasi
        $target_file = $target_dir . basename($_FILES["image"]["name"]); //tempat lokasi
        
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        //function pemindahan file
        $file->move($target_dir,$file->getClientOriginalName());


        DB::table('users')->where('id',$id)->update([
            'image'          => basename($_FILES["image"]["name"])
        ]);

        $request->session()->flash('success','Profil Berhasil Di-Update!');

        return redirect('/profile');
    }

}
