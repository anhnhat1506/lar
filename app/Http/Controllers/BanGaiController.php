<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BanGai;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
class BanGaiController extends Controller
{
    //
    public function all(){
        $ds_ban_gai= BanGai::all();
        $data=[
            'ds_ban_gai'=>$ds_ban_gai
        ];
        return View('BanGai.all',$data);
    }
    public function add(Request $request){
        return View('BanGai.add');
    }
    public function insert(Request $request){
        $input = $request->all();
        $rules = [
            'ten_ban_gai' => 'required|min:5|max:100',
            'chi_phi_cua' => 'required|min:5|max:100',
            'cam_giac' => 'required|min:5|max:1000'
        ];
        $messages = [
            'required' => 'Vui lòng nhập vào \':attribute\''
        ];
        $validator = validator::make($input, $rules, $messages);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $ban_gai = new BanGai();
        $ban_gai->ten_ban_gai = $request->get("ten_ban_gai");
        $ban_gai->chi_phi_cua = $request->get("chi_phi_cua");
        $ban_gai->cam_giac = $request->get("cam_giac");
        $ban_gai->save();
        return redirect('bangai/all');
    }
    public function edit($id){
        $ban_gai=BanGai::find($id);
        $data=[
            'ban_gai'=>$ban_gai
        ];
        return View('BanGai.edit',$data);
    }
    public function update(Request $request){
        $ban_gai=BanGai::find($request->get("id"));
        $ban_gai->update([
            'ten_ban_gai'=>$request->get("ten_ban_gai"),
            'chi_phi_cua'=>$request->get("chi_phi_cua"),
            'cam_giac'=>$request->get("cam_giac")
        ]);
        return redirect('bangai/all');
    }
    public function delete(Request $request){
        $ban_gai=BanGai::find($request->get("id"));
        $ban_gai->delete();
        return redirect("bangai/all");
    }
}
