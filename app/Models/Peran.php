<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peran extends Model
{
    protected $table = 'peran';

    public function detail_peran(){
        return $this->hasMany('App\Models\Detail_peran','id');
    }


}
