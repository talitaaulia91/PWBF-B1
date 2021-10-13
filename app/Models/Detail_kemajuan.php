<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_kemajuan extends Model
{
    use HasFactory;
    protected $table = 'detail_kemajuan';


    public function kemajuan(){
        return $this->belongsTo('App\Models\Kemajuan', 'id_kemajuan');
    }


    public function bab(){
        return $this->belongsTo('App\Models\Bab', 'id_bab');
    }




}