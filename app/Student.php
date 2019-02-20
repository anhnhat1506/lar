<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $table ='student';
    public $timestamps = true;
    protected $fillable = ['ten_sv','dtb'];
    public function classroom(){
        return $this->belongsTo('App\Classroom');
    }
}
