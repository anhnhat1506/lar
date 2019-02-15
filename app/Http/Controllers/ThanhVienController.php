<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThanhVienController extends Controller
{
    //
    public function dang_ky(){
        return View('ThanhVien.dang_ky');
    }
    public function dang_ky_proccess(Request $request){
        $user_name = $request->get('user_name');
        $first_name = $request->get('first_name');
        $last_name = $request->get('last_name');
        $password = $request->get('password');
        $confirm_p = $request->get('confirm_p');
        $email = $request->get('email');
        $gioi_tinh = $request->get('gioi_tinh');
        $accept_term = $request->get('accept_term');
        var_dump($user_name);
        var_dump($first_name);
        var_dump($last_name);
        var_dump($password);
        var_dump($confirm_p);
        var_dump($email);
        var_dump($gioi_tinh);
        var_dump($accept_term);
    }
}
