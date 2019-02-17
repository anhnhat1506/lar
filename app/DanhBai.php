<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DanhBai extends Model
{
    //
    protected $table = "danh_bai";
    public $timestamps = true;
    protected $fillable=['ten_nguoi_thang','tien_thang','mo_ta'];
}
