<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HocSinhController extends Controller
{
    public function index(){
        return View('HocSinh.index');
    }
    //action
    public function add(){
        return View('HocSinh.add');
    }
    //post
    public function add_proccess(Request $request){
        $ten_hoc_sinh = $request->get('ten_hoc_sinh');
        var_dump($ten_hoc_sinh);
    }
       

}
