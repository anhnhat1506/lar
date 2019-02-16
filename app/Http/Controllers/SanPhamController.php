<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\SanPham;
class SanPhamController extends Controller
{
    //
    public function all(){
        $dssp = SanPham::all();
        dd($dssp);
    }
    public function insert(){
        $sp = new SanPham();
        $sp->ten_san_pham = 'banh my';
        $sp->gia_ban = 10000;
        $sp->save();
    }
    public function delete($product_id){
        $sp = SanPham::where('san_pham_id',$product_id);
        $sp->delete();
    }
    public function update($product_id){
        $sp = SanPham::where('san_pham_id',$product_id);
        $sp->update([
            'ten_san_pham'=>'keo ngot',
            'gia_ban'=>5000
        ]);
    }
}
