<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    function fn_all(){
        $blogs =[
            'blogs' => ['blog 1', 'blog 2', 'blog 3'],
            'blogs2' => 2
        ];
        return view("Blog.all",$blogs);
    }
}
