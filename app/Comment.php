<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table = 'comment';
    public $timestamps = true;
    protected $fillable =['title','content','by'];
    //1 comment chi thuoc ve 1 post
    public function post(){
        return $this->belongsTo('App\Post');
    }
}
