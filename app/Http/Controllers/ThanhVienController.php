<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\DangKyThanhVienRequest;
//1. khai vao thu vien validator
//use Illuminate\Support\Facades\Validator;
use Validator;
class ThanhVienController extends Controller
{
    //
    public function dang_ky(){
        return View('ThanhVien.dang_ky');
    }
    //Request $request la gia tri form gui len
    public function dang_ky_proccess(Request $request){
        //tạo một mẫu validation cho Request
        $rules = [
            'email' => 'required|email|max:255', //bat buoc, phai la email, do dai toi da 2
        ];
        $validator = Validator::make($request->all(),$rules);
        //kiểm tra nếu form nhập không hợp lệ
        if ($validator->fails()) {
            //redirect()->back() trở về trang form gửi trước
            //->withErrors($validator) kèm theo mảng lỗi $errors 
            //->withInput() gửi kèm form đã nhập trước đó gửi lên
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
            //trường hợp hợp lệ
            //với thao tác đăng ký thì bước tiếp theo có thể là lưu vào csdl sau đó redirect về trang chủ
            dd($request->all());
        }
    }
}
