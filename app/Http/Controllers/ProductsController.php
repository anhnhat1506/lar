<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
class ProductsController extends Controller
{
    //
    public function index(){
        if(!session()->has('shop_cart')){
            session()->put('shop_cart',[]);
        }
        $products = Products::all();
        $data = [
            'products' => $products
        ];
        return View('Products.products',$data);
    }
    public function cart(){
        if(!session()->has('shop_cart')){
            session()->put('shop_cart',[]);
        }
        return View('Products.cart');
    }   
    //id san pham
    // moi id san pham dde xac dinh duy nhat 1 item trong gio hang
    public function addToCart($id){
        $products = Products::find($id);
        if (!$products) {
            # code...
            abort(404);
        }
        $cart = session()->get('shop_cart');
        //neu ma cart rong thi chi them 1 san pham
        if (!$cart) {
            # code...
            $cart=[
                $id => [ //key value
                    "name" => $products->name,
                    "quantity" => 1,
                    "price" => $products->price,
                    "photo" =>$products->photo
                ]
            ];            
            session()->put('shop_cart',$cart);
            return redirect()->back()->with('Thành công', 'Sản phẩm này đã được thêm vào giỏ hàng của bạn');
            //xy ly xong
        }
        //con neu da co san pham trong gio hang thi cap nhat so luong
        if (isset($cart[$id])) {
            # code...
            $cart[$id]['quantity']++;
            session()->put('shop_cart',$cart);
            return redirect()->back()->with('Thành công', 'Sản phẩm này được thêm thành công vào giỏ hàng của bạn nhé');

            //xu ly xong
        }
        //chua co san pham trong gio hang
        $cart[$id]=[
            "name" => $products->name,
            "quantity" =>1,
            "price" => $products->price,
            "photo" =>$products->photo
        ];
        session()->put('shop_cart',$cart);
        return redirect()->back()->with('Thành công nhé','Sản phẩm này đã được thêm vào giỏ hàng của bạn nhé');
    }
    public function destroy(){
        session()->forget('shop_cart');
        return redirect()->back();
    }
    public function update(Request $request){
        if ($request->id and $request->quantity) {
            # code...
            $cart = session()->get('shop_cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('shop_cart',$cart);
            session()->flash('Thành công','Giỏ hàng của bạn cập nhật thành công');

            return response()->json([
                'ket_qua' => true,
                'thong_diep' => 'Đã cập nhật thành công'
            ]);
        }
        return response()->json([
            'ket_qua' => false,
            'thong_diep' => 'Cập nhật thất bại'
        ]);
    }
    public function remove_product(Request $request){
        if ($request->id) {
            # code...
            $cart = session()->get('shop_cart');
            if(isset($cart[$request->id])){
                unset($cart[$request->id]);
                session()->put('shop_cart',$cart);
            }
        session()->flash('Xóa thành công','Sản phẩm đã được xóa trong giỏ hàng này');
        }
    }
}
