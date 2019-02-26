<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BTMangController extends Controller
{
    //
    public function tao_chuoi(){
        $a = "Socola, Keo, Banh, Kem, Mut, Oi";
        $b = explode(", ",$a);
        var_dump($b);
    }
    public function chuoi(){
        $b = ["Socola", "Keo", "Banh", "Kem", "Mut"];
        $c = implode(", ",$b);
        var_dump($c);
    }
}
