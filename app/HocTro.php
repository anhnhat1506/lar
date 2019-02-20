<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HocTro extends Model
{
    //
    protected $table = 'hoctro';
    public $timestamps = true;
    public function lophoc(){
        return $this->belongsTo('App\LopHoc');
    }
}
