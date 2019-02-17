<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DanhBai;
use Carbon\Carbon;
class DanhBaiController extends Controller
{
    //
    public function all(){
        $ds_nguoi_choi_thang = DanhBai::all();
        $data=[
            'ds_nguoi_choi_thang'=>$ds_nguoi_choi_thang
        ];
        return View('DanhBai.all',$data);
    }
    public function add(Request $request){
        return View('DanhBai.add');
    }
    public function insert(Request $request){
        $ds_nguoi_thang = new DanhBai();
        $ds_nguoi_thang->ten_nguoi_thang=$request->get("ten_nguoi_thang");
        $ds_nguoi_thang->tien_thang=$request->get("tien_thang");
        $ds_nguoi_thang->mo_ta=$request->get("mo_ta");
        $ds_nguoi_thang->save();
        return redirect('danhbai/all');
    }
    public function edit($id){
        $nguoi_thang = DanhBai::find($id);
        $data =[
            'nguoi_thang'=>$nguoi_thang
        ];
        return View('DanhBai.edit',$data);
    }
    public function update(Request $request){
        $nguoi_thang= DanhBai::find($request->get("id"));
        $nguoi_thang->update([
            'ten_nguoi_thang'=>$request->get("ten_nguoi_thang"),
            'tien_thang'=>$request->get("tien_thang"),
            'mo_ta'=>$request->get("mo_ta")
        ]);
        return redirect('danhbai/all');
    }
    public function delete(Request $request){
        $nguoi_thang= DanhBai::find($request->get("id"));
        $nguoi_thang->delete();
        return redirect("danhbai/all");
    }
}
