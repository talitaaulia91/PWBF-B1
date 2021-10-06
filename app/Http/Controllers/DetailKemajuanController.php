<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail_kemajuan;

class DetailKemajuanController extends Controller
{
    public function detail_kemajuan(){
        $detail_kemajuan = Detail_kemajuan::all();
    }
}
