<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CaPhe;
use Carbon\Carbon;
class CaPheController extends Controller
{
    //
    public function all(){
        $dsss_cf= CaPhe::all();
        $data=[
            'ds_caphe'=>$dsss_cf
        ];
        return View('CaPhe.all',$data);
    }
    //get
    public function add(Request $request){
        return View('CaPhe.add');
    }
    //post
    public function insert(Request $request){
        $cf = new CaPhe;
        $cf->ten_ca_phe = $request->get("ten_ca_phe");
        $cf->gia_ban = $request->get("gia_ban");
        $cf->mo_ta = $request->get("mo_ta");
        $cf->save();
        return redirect('caphe/all');
    }
    //get
    public function edit($id){
        $cf = CaPhe::find($id);
        $data = [
            'ca_phe'=>$cf
        ];
        return View('CaPhe.edit',$data);
    }
    //post
    public function update(Request $request){
        $cf = CaPhe::find($request->get("id"));
        $cf->update([
            'ten_ca_phe'=>$request->get("ten_ca_phe"),
            'gia_ban'=>$request->get("gia_ban"),
            'mo_ta'=>$request->get("mo_ta"),
        ]);
        return redirect('caphe/all');
    }
    //post
    public function delete(Request $request){
        $sp_cf=CaPhe::find($request->get("id"));
        $sp_cf->delete();
        return redirect('caphe/all');
    }
}
