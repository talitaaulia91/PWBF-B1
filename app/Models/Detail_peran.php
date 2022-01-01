<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_peran extends Model
{
    use HasFactory;
   protected $table = 'detail_peran';
   protected $guarded = ['id'];

   public function pengurus(){
    return $this->belongsTo('App\Models\Pengurus', 'id_pengurus');
}

public function peran(){
    return $this->belongsTo('App\Models\Peran', 'id_peran');
}



}
