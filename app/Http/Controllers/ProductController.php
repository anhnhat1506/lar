<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use DB; //su dung namespace DB tuong tac csdl mysql
class ProductController extends Controller
{
    //action get_all
    function get_all(){
        $all_products = DB::select('select * from product',[]);
        $data = [
            'products' => $all_products,
        ];
        return View('Product.get_all',$data);

    }

    //action detail
    function detail($product_id=0){
        //database qiuery
        $product = DB::select('select * from product where product_id=?',[$product_id]); //tra ve  1 mang
        $data = [
            'product' => $product[0], //lay ra san pham dau tien
        ];
        return View('Product.detail',$data);
    }
}
