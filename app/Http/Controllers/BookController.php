<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
class BookController extends Controller
{
    //
    public function all(){
        $ds_book = Book::all();
        $data=[
            'ds_book'=>$ds_book
        ];
        return View('Book.all',$data);
    }
    public function add(Request $request){  
        return View('Book.add');
    }
    public function insert(Request $request){
        $input = $request->all();
        $rules = [
            'ten_sach'=> 'required|min:3|max:255',
            'ten_sach'=> 'required|min:3|max:255',
            'ten_sach'=> 'required|min:3|max:255',
        ];
        $messages = [
            'required' => 'Please check :attribute',
        ];
        $validator = validator::make($input, $rules, $messages);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $sp = new Book();
        $sp->ten_sach = $request->get("ten_sach");
        $sp->gia_ban = $request->get("gia_ban");
        $sp->mo_ta = $request->get("mo_ta");
        $sp->save();
        return redirect('book/all');
    }
    public function delete(Request $request){
        $sp = Book::find($request->get("id"));
        $sp->delete();
        return redirect('book/all');
    }
    //chỉnh sửa sản phẩm
    //phương thức get lấy chi tiết sản phẩm validator ra form
    public function edit($id){
        $sp = Book::find($id);
        $data = [
            'book'=>$sp
        ];
        return View('Book.edit',$data);
    }
    //phương thức post gửi lại tất cả chi tiết sản phẩm đã sửa lên form rồi trả về giá trị đã đổi về lại book/all
    public function update(Request $request){
        $sp= Book::find($request->get("id"));
        $sp->update([
            'ten_sach'=>$request->get("ten_sach"),
            'gia_ban'=>$request->get("gia_ban"),
            'mo_ta'=>$request->get("mo_ta")
        ]);
        return redirect('book/all');
    }
}
