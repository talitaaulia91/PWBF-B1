<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peran;
use Illuminate\Support\Facades\DB;

class PeranController extends Controller
{
    public function peran(){
        return view('dashboard.tabelPeran', [
            $peran = Peran::all(),
            'peran' => $peran
        ]);
    }

    public function createPeran()
    {
        return view('dashboard.create.createPeran', [
            "title" => "Peran"
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'peran' => 'required|min:3|max:50',
        ]);

        Peran::create($validatedData);

        $request->session()->flash('success','RInput success!');

        return redirect('/peran');
    }

    public function destroy($id)
    {
        Peran::find($id)->delete();

        return redirect('/peran')->with('deletePeran','Delete success!');
    }

    public function edit($id)
    {
        return view('dashboard.edit.editPeran', [
            'peran'     => Peran::find($id),
            "title"     => Peran::find($id)->peran
        ]);
    }

    public function update(Request $request, Peran $pengurus){
        $validatedData = $request->validate([
            'peran' => 'required|min:3|max:50',
        ]);
        DB::table('peran')->where('id', $request->id)->update([
            'peran' => $request->peran,
        ]);

        return redirect('/peran');
    }
}