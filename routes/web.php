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


Route::get('product/get_all','ProductController@get_all');
Route::get('blog/all','BlogController@fn_all');

//product detail
Route::get('product/detail/{product_id?}','ProductController@detail');
//category
Route::get('category/get_cate','CategoryController@get_cate');
Route::get('category/detail/{category_id?}','CategoryController@detail');
//brand
Route::get('brand/get_brand','BrandController@get_brand');
Route::get('brand/detail/{brand_id?}','BrandController@detail');
//demo
//Route::get('/user/{id?}',);
//test git //cssssssssssssss
//j
//-------hoc sinh---------
//danh sach hoc sinh
Route::get('hocsinh/index','HocSinhController@index');
//them hoc sinh
//formx
Route::get('hocsinh/add','HocSinhController@add')->name('form_them_hoc_sinh');
Route::post('hocsinh/add','HocSinhController@add_proccess');
//xu ly du lieu them post len
Route::get('sinhvien/add', 'SinhVienController@add');
Route::post('sinhvien/add', 'SinhVienController@add_proccess');


//thay doi ngon ngu mac dinh
Route::get('locale/set/{lang_code}','LocaleController@set');