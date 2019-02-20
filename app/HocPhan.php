<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HocPhan extends Model
{
    protected $table = 'hoc_phan';
    public function sinh_viens(){
        return $this->belongsToMany('App\SinhVien','dang_ky_hoc_phan','hoc_phan_id','sinh_vien_id'); 

    }
}
