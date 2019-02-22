<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sach;
use App\NXB;
class SachNXBController extends Controller
{
    //
    public function all(){
        $sach = Sach::withCount('nxbs')->having('nxbs_count','>',0)->get();
        //dd($sach);
        $data = [
            'sach' =>$sach
        ];
        return View('SachNXB.all',$data);
    }
    public function add(){
        $sach= Sach::all();
        $nxb = NXB::all();
        $data=[
            'sach' => $sach,
            'nxb' => $nxb
        ];
        return View('SachNXB.add',$data);
    }
    public function insert(Request $request){
        $sach_id =  $request->get("sach_id");
        $nxb_ids = $request->get("nxb_id");
        $ds_sach_nxb = Sach::find($sach_id)->nxbs()->attach(NXB::find($nxb_ids));
        return redirect('sach_nxb/all');
    }
    public function edit($id){
        $sach = Sach::find($id);
        $nxb = NXB::all();
        $all_nxb_id_of_sach = [];
        foreach($sach->nxbs as $item){
            $all_nxb_id_of_sach[] = $item->id;
        }
        $data = [
            'sach' => $sach,
            'nxb' =>$nxb,
            'all_nxb_id_of_sach' => $all_nxb_id_of_sach
        ];
        return View('SachNXB.edit',$data);
    }
    public function update(Request $request){
        $sach = Sach::find($request->get("sach_id"));
        $new_nxbs = NXB::find($request->get("nxb_id"));
        $sach->nxbs()->detach($sach->nxbs);
        $sach->nxbs()->attach($new_nxbs);
        return redirect('sach_nxb/all');
    }
}
