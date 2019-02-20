<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SinhVien extends Model
{
    protected $table = 'sinh_vien';
    public function hoc_phans(){
        return $this->belongsToMany('App\HocPhan','dang_ky_hoc_phan','hoc_phan_id','sinh_vien_id');
    }
}
