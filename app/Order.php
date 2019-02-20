<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = 'order';
    public function products(){
        return $this->belongsToMany('App\Product','orderdetail','order_id','product_id')->withPivot([
            'quantity',
            'created_at',
            'created_at'
        ]);
    }
}
