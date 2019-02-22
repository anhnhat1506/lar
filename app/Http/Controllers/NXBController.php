<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NXB;
use App\Sach;
class NXBController extends Controller
{
    //
    public function all(){
        $ds_nxb = NXB::all();
        $data = [
            'ds_nxb' =>$ds_nxb
        ];
        return View('NXB.all');
    }
    public function add(){
        return View('NXB.add');
    }
    public function insert(Request $request){
        $nxb = new NXB();
        $nxb->name = $request->get("name");
        $nxb->save();
        return redirect('sach_nxb/all');
    }
}
