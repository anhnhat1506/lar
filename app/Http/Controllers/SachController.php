<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NXB;
use App\Sach;
class SachController extends Controller
{
    //
    public function all(){
        $ds_sach = Sach::all();
        $data = [
            'ds_sach'=>$ds_sach
        ];
        return View('Sach.all');
    }
    public function add(){
        return View('Sach.add');
    }
    public function insert(Request $request){
        $sach = new Sach();
        $sach->name = $request->get("name");
        $sach->save();
        return redirect('sach_nxb/all');
    }
}
