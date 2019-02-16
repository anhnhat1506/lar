<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaPhe extends Model
{
    //
    protected $table = "ca_phe";
    public $timestamps = true;
    //cho hep crud
    protected $fillable = ['ten_ca_phe','gia_ban','mo_ta'];
}
