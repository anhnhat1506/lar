<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use DB; //su dung namespace DB tuong tac csdl mysql
use App\Product;
class ProductController extends Controller
{
    //action get_all
    function get_all(){
        $all_products = Product::all();
        $data = [
            'products' => $all_products,
        ];
        return View('Product.get_all',$data);
    }
    public function index(){
        //kiểm tra xem session có tồn tại hay ko 
        //nếu có thì lấy nó thôi
        if(!session()->has('cart')){
            session()->put('cart',[]);
        }
        $products = Product::all();
        return view('products',compact('products'));
    }
    public function cart(){
        return view('cart');
    }
    public function addToCart($id){
        $product = Product::find($id);
        if (!$product) {
            # code...
            abort(404);          
        }
        $cart = session()->get('cart');
        //neu cart rong khi do cai nay la sp dau tien
        if (!$cart) {
            # code...
            $cart=[
                $id = [
                "name" => $product->name,
                "quantity" =>1,
                "price" => $product->price,
                "image" => $product->image
                    ]
                ];
            session()->put('cart',$cart);
            return redirect()->back()->with('Thành công','Sản phẩm được thêm thành công vào giỏ hàng');
        }
        //nếu cart không rỗng thì sau đó kiểm tra xem sản phẩm đó có tồn tại trong cart ko và tăng quantity
        if (isset($cart[$id])) {
            # code...
            $cart[$id]['quantity']++;
            session()->put('cart',$cart);
            return redirect()->back()->with('Thành công','Sản phẩm được thêm thành công vào giỏ hàng');
        }
        //nếu sản phẩm không có trong cart thì sau đó thêm vào cart với số lương  =1
        $cart[$id]=[
            "name" => $product->name,
            "quantity" =>1,
            "price" => $product->price,
            "image" => $product->image
        ];
        session()->put('cart',$cart);
        return redirect()->back()->with('Thành công','Sản phẩm được thêm thành công vào giỏ hàng');
    }
}
