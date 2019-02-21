<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HocPhan;
class HocPhanController extends Controller
{
    //
    public function all(){
        $hoc_phan = HocPhan::all();
        $data=[
            'hoc_phan' =>$hoc_phan
        ];
        return View('HocPhan.all',$data);
    }
    public function add(){
        return View('HocPhan.add');
    }
    public function add_proccess(Request $request){
        $hoc_phan=new HocPhan();
        $hoc_phan->name = $request->get('name');
        $hoc_phan->save();
        return redirect('hocphan/all');
    }
}
