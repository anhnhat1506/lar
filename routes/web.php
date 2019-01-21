<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//khi ma truy cap vao trang web goc domain thi vao thang view welcome ma khong di qua controller/action
Route::get('/', function () {
    $data = [
        'name' => 'Samantha',
        'foods' => ['banh my', 'com chien', 'pho', 'my goi']
    ];
    return view('welcome',$data);
});


Route::get('/Product/get_all','ProductController@get_all');
Route::get('/blog/all','BlogController@fn_all');