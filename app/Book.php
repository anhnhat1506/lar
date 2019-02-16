<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $table = "book";
    public $timestamps = true;
    protected $fillable = ['ten_sach','gia_ban','mo_ta'];
}
