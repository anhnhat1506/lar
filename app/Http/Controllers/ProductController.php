<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB; //su dung namespace DB tuong tac csdl mysql
class ProductController extends Controller
{
    //action get_all
    function get_all(){
        $all_products = DB::table('product')->get();
        $gia_cao_nhat = DB::table('product')->max('price');
        $data = [
            'products' => $all_products,
            'gia_cao_nhat' => $gia_cao_nhat
        ];
        return View('Product.get_all',$data);

    }
}
