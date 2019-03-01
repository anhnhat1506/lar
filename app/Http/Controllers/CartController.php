<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class CartController extends Controller
{
    //
    public function add_to_cart(Request $request){
        if(!session()->has('cart')){
            //khoi tao cart
            session()->put('cart', [
                'dssp'=>[],
                'total'=>0
            ]);
        }
        $cart = session()->get('cart');
        $product_id = $request->get("product_id");
        //b1: lay san pham tu db
        $product_db = Product::find($product_id);

        $trung = false;
        foreach($cart['dssp'] as &$sp_cart){
           if($sp_cart['product_id'] == $product_id){
                $trung = true;
                $sp_cart['quantity']+=1;
                $sp_cart['thanh_tien']=$sp_cart['quantity']*$sp_cart['product_price'];
                break;
           } 
        }
        //them moi khi chua co san pham do
        if($trung == false){
            $cart['dssp'][] = [
                'product_name'=>$product_db->name,
                'product_price'=>$product_db->price,
                'product_image'=>$product_db->image,
                'thanh_tien'=>$product_db->price,
                'quantity'=>1,
                'product_id'=>$product_id 
            ];
        }
        $total = 0;
        foreach($cart['dssp'] as $sp_cart){
            $total += $sp_cart['thanh_tien'];
        }
        $cart['total'] = $total;
        session()->forget('cart');
        session()->put('cart',$cart);
        return redirect('cart/index');
    }
    public function index(){
        if(!session()->has('cart')){
            //khoi tao cart
            session()->put('cart', [
                'dssp'=>[],
                'total'=>0
            ]);
        }
        $cart =  session()->get('cart');
        $view_data = [
            'cart' => $cart
        ];

        return View('Cart.index',$view_data);
    }
    public function delete_all_cart(){
        if(session()->has('cart')){
            //khoi tao cart
            session()->forget('cart');
        }
        return View('Cart.index');
    }
}

