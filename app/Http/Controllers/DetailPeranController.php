<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail_peran;

class DetailPeranController extends Controller
{
   public function detail_peran(){
       $detail_peran = Detail_peran::all();
   }
}
