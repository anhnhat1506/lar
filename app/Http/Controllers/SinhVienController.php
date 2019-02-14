<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SinhVienController extends Controller
{
    //
    public function add(){
        return View('SinhVien.add');
    }
    public function add_proccess(Request $request){
       $ho_ten = $request->get('ho_ten');
       $nam_sinh = $request->get('nam_sinh');
       $lop = $request->get('lop');
       var_dump($ho_ten);
       var_dump($nam_sinh);
       var_dump($lop);
    }
}
