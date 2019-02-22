<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sach extends Model
{
    //
    protected $table = 'sach';
    public function nxbs(){
        return $this->belongsToMany('App\NXB','sach_nxb','nxb_id','sach_id');
    }
}
