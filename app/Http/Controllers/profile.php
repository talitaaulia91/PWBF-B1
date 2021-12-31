<?php

namespace App\Http\Controllers;
use App\Models\santri;
use App\Models\User;
use Illuminate\Http\Request;


class profile extends Controller
{


    public function profile(){
        $id =   auth()->user()->id_santri;
        $santri = santri::find($id);
       
        // dd($santri);

        return view('profile', ['santri' => $santri]);

        


    }




}
