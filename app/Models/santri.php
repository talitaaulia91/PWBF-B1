<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;
    protected $table = 'santri';


    public function kemajuan(){
        return $this->hasMany('App\Models\Kemajuan','id');
    }


}
