<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BanGai extends Model
{
    //
    protected $table = "ban_gai";
    public $timestamp = true;
    protected $fillable = ['ten_ban_gai','chi_phi_cua','cam_giac'];
}
