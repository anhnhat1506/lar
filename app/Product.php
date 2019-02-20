<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'product';
    public function orders(){
        return $this->belongsToMany('App\Order','orderdetail','product_id','order_id')->withPivot([
            'quantity',
            'created_at',
            'created_at'
        ]);
    }
}
