<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class BrandController extends Controller
{
    //
    function get_brand(){
        $all_brand = DB::select('select * from brand');
        $data = [
            'brand' => $all_brand,
        ];
        return View('Brand.brand',$data);
    }
    function detail($brand_id=0){
        $brand=DB::select('select * from brand where brand_id=?',[$brand_id]);
        $data = [
            'brand'=> $brand[0],
        ];
        return View('Brand.detail',$data);
    }
}
