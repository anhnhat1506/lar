<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
class LocaleController extends Controller
{
    //
    public function set($lang_code){
        //lang_code (en/vn)
        App::setLocale($lang_code);
        return redirect("/");
    }
}
