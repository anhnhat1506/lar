<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    //
    protected $table ='classroom';
    public $timestamps = true;
    public function students(){
        return $this->hasMany('App\Student','class_id','id');
    }
}
