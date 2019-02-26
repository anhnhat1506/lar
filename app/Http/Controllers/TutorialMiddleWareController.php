<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutorialMiddleWareController extends Controller
{
    //
    public function show(Request $request){
        return view('greeting');
    }
}
