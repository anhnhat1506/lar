<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LopHoc extends Model
{
    //
    protected $table = 'lop_hoc';
    public $timestamps = true;
    public function hoc_tros(){
        return $this->hasMany('App\HocTro');
    }
}
