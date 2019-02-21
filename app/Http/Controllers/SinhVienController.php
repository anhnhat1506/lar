<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SinhVien;
class SinhVienController extends Controller
{
    //
    public function all(){
        $sinh_vien = SinhVien::all();
        $data=[
            'sinh_vien'=>$sinh_vien
        ];
        return View('SinhVien.all');
    }
    public function add(){
        return View('SinhVien.add');
    }
    public function add_proccess(Request $request){
        $sinh_vien=new SinhVien();
        $sinh_vien->name = $request->get('name');
        $sinh_vien->save();
        return redirect('sinhvien/all');
    }
}
