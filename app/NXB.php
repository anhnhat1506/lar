<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NXB extends Model
{
    //
    protected $table = 'nxb';
    public function sachs(){
        return $this->belongsToMany('App\Sach','sach_nxb','nxb_id','sach_id');
    }
}
