<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    //
    protected $table = 'san_pham'; //model SanPham tuong tac/tuong ung voi bang 'san_pham' trong co so du lieu
    public $timestamps = true; //tao ra 2 cot ban dau mac dinh la: created_at, updated_at 
}
