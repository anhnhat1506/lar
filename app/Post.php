<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table='post';
    public $timestamps = true;
    
    //1 post co nhieu comment
    public function comments(){
        return $this->hasMany('App\Comment');
    }
}
