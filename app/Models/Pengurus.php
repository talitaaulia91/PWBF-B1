<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    use HasFactory;
    protected $table = 'pengurus';
    protected $guarded = ['id'];


    public function detail_peran(){
        return $this->hasMany('App\Models\Detail_peran','id');
    }



}
