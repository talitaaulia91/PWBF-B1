<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bab extends Model
{
    use HasFactory;
    protected $table = 'bab';


    public function buku(){
        return $this->belongsTo('App\Models\Buku', 'id_buku');
    }

    public function detail_kemajuan(){
        return $this->hasMany('App\Models\Detail_kemajuan', 'id');
    }




}
