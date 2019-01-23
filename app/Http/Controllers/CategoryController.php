<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class CategoryController extends Controller
{
    //
    function get_cate(){
        $all_cate = DB::select('select * from category');
        $data=[
            'category' => $all_cate,
            'description'=> '<strong>Hello world strong!</strong>'
        ];
        return View('Category.cate',$data);

    }
    function detail($category_id=0){
        $category = DB::select('select * from category where category_id=?',[$category_id]);
        $data=[
            'category' =>$category[0],
        ];
        return View('Category.detail',$data);
    }
}
