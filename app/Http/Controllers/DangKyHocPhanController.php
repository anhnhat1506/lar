<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HocPhan;
use App\SinhVien;
class DangKyHocPhanController extends Controller
{
    //
    public function all(){
        //$sinh_vien= SinhVien::all();
        $sinh_vien= SinhVien::withCount('hoc_phans')->having('hoc_phans_count', '>', 0)->get();
        $data=[
            'sinh_vien' => $sinh_vien
        ];     
        
        return View('DangKyHocPhan.all',$data);
    }
    public function add(){
        $sinh_vien=SinhVien::all();
        $hoc_phan=HocPhan::all();
        $data=[
            'hoc_phan'=>$hoc_phan,
            'sinh_vien'=>$sinh_vien
        ];
        return View('DangKyHocPhan.add',$data);
    }
    public function insert(Request $request){ 
        $sinh_vien_id = $request->get('sinh_vien_id');
        $hoc_phan_ids = $request->get('hoc_phan_id');
        $ds_dang_ki = SinhVien::find($sinh_vien_id)->hoc_phans()->attach(HocPhan::find($hoc_phan_ids));
        return redirect('dangkyhocphan/all');
    }
    public function edit($id){
        //in_arrray($hp->id,$sinh_vien->hoc_phans);
        $sinh_vien= SinhVien::find($id);
        $hoc_phan=HocPhan::all();
        //dd($sinh_vien);
        $all_hoc_phan_id_of_sv = [];
        foreach($sinh_vien->hoc_phans as $item){
            $all_hoc_phan_id_of_sv[] = $item->id; 
        }
        $data=[
            'sinh_vien' => $sinh_vien,
            'hoc_phan' => $hoc_phan,
            'all_hoc_phan_id_of_sv' => $all_hoc_phan_id_of_sv
        ];
 
        return View('DangKyHocPhan.edit',$data);
    }
    public function update(Request $request){
        $sinh_vien = SinhVien::find($request->get("sinh_vien_id"));
        $new_hps = HocPhan::find($request->get("hoc_phan_id"));
        
        $sinh_vien->hoc_phans()->detach($sinh_vien->hoc_phans);
        $sinh_vien->hoc_phans()->attach($new_hps);
        return redirect('dangkyhocphan/all');
    }
}
