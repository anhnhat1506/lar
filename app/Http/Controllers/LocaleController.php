<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
class LocaleController extends Controller
{
    //
    public function set(Request $request){
        //$request->get("locale") la gia tri en/vn
        $en_or_vn = $request->get("locale");
        session()->put('locale',$en_or_vn);
        return redirect("/");
    }
}
