<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    /*public function index(){
        //set session
        echo "<pre>";
        var_dump(session()->all());
        echo "</pre>";
     
    }
    public function set_user($user_id, $email){
        $new_user = [
            'user_id'=>$user_id,
            'email' => $email
        ];
        session()->put('user',$new_user);
    }
    public function set_user2(Request $request){
        $new_user = [
            'user_id'=> $request->get('user_id'),
            'email' =>$request->get('email'),
        ];
        session()->put('user',$new_user);
    }
    public function clear_user(Request $request){
       if(session()->has('user')){
           session()->forget('user');
       }
    }
    public function session(){
        var_dump(session()->has('user'));
        if(session()->has('user')){
            var_dump(session()->get('user'));
        }
    }*/
    public function index(){
        echo "<pre>";
        var_dump(session()->all());
        echo "</pre>";
    }
    public function set_up_user($user_id,$email,$role){
        $newuser=[
            'user_id'=>$user_id,
            'email'=>$email,
            'role'=>$role
        ];
        session()->put('$user',$newuser);
    }
    public function set_up_session(){
        var_dump(session()->has('user'));
        if(session()->has('user')){
            var_dump(session()->get('user'));
        }
    }
    
}
