<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kemajuan extends Model
{
   protected $table = 'kemajuan';

   public function santri(){
    return $this->belongsTo('App\Models\Santri', 'id_santri');
}

public function pengurus(){
    return $this->belongsTo('App\Models\Pengurus', 'id_pengurus');
}




}
