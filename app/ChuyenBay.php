<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChuyenBay extends Model
{
    //
    protected $table = "chuyen_bay";
    public $timestamps = true;
    protected $fillable =['ten_chuyen_bay','gia_chuyen','chat_luong'];
}
