<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Santri;



class SantriController extends Controller
{
    public function santri(){
        $santri = Santri::all();

        return view('dashboard.tabelSantri', ['santri' => $santri]);
    }


    public function destroy($id)
    {
        Santri::find($id)->delete();

        return redirect('/santri')->with('deleteSantri','Delete success!');
    }



}

