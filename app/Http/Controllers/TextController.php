<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TextController extends Controller
{
    //
    public function khac_nhau(){
        $text ="<strong>Haha</strong>";
        return View('Text.add',['text'=>$text]);
    }
}
