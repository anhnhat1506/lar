<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChuyenBay;
use Carbon\Carbon;
class ChuyenBayController extends Controller
{
    //lay tat ca thong tin csdl chuyen bay
    public function all(){
        $ds_chuyen_bay = ChuyenBay::all();
        $data=[
            'ds_chuyen_bay'=>$ds_chuyen_bay
        ];
        return View('ChuyenBay.all',$data);
    }
    //them chuyen bay phuong thuc get
    public function add(Request $request){
        return View('ChuyenBay.add');
    }
    //sau do phuong thuc post
    public function insert(Request $request){
        $chuyen_bay = new ChuyenBay();
        $chuyen_bay->ten_chuyen_bay = $request->get("ten_chuyen_bay");
        $chuyen_bay->gia_chuyen = $request->get("gia_chuyen");
        $chuyen_bay->chat_luong = $request->get("chat_luong");
        $chuyen_bay->save();
        return redirect('chuyenbay/all');
    }
    public function edit($id){
        $chuyen_bay = ChuyenBay::find($id);
        $data = [
            'chuyen_bay'=>$chuyen_bay
        ];
        return View('ChuyenBay.edit',$data);
    }
    public function update(Request $request){
        $chuyen_bay= ChuyenBay::find($request->get("id"));
        $chuyen_bay->update([
            'ten_chuyen_bay'=>$request->get("ten_chuyen_bay"),
            'gia_chuyen'=>$request->get("gia_chuyen"),
            'chat_luong'=>$request->get("chat_luong")
        ]);
        return redirect('chuyenbay/all');
    }
    public function delete(Request $request){
        $chuyen_bay= ChuyenBay::find($request->get("id"));
        $chuyen_bay->delete();
        return redirect("chuyenbay/all");
    }
}
