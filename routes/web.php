<?php
use App\Http\Middleware\CheckAge;
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

Route::get('/home/set_up_session','HomeController@set_up_session');

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

//-------hoc sinh---------
//danh sach hoc sinh
Route::get('hocsinh/index','HocSinhController@index');
//them hoc sinh
//formx
Route::get('hocsinh/add','HocSinhController@add')->name('form_them_hoc_sinh');
Route::post('hocsinh/add','HocSinhController@add_proccess');
//xu ly du lieu them post len

//xu ly dang ky thanh vien
Route::get('thanhvien/dang_ky','ThanhVienController@dang_ky');
Route::post('thanhvien/dang_ky_proccess','ThanhVienController@dang_ky_proccess');
//
Route::get('text/add','TextController@khac_nhau');

//san pham
Route::get('sanpham/all','SanPhamController@all');
Route::get('sanpham/insert','SanPhamController@insert');
Route::get('sanpham/delete/{id}','SanPhamController@delete');
Route::get('sanpham/update/{id}','SanPhamController@update');
//san pham cf
Route::get('caphe/all','CaPheController@all');
Route::get('caphe/add','CaPheController@add');
Route::post('caphe/insert','CaPheController@insert');
//edit
Route::get('caphe/edit/{id}','CaPheController@edit');
Route::post('caphe/update','CaPheController@update');
Route::post('caphe/delete','CaPheController@delete');


//Sach
//show ra tất cả sách đang có trong csdl
Route::get('book/all','BookController@all');
//thêm sách mới
Route::get('book/add','BookController@add');
Route::post('book/insert','BookController@insert');
//chỉnh sửa sp
Route::get('book/edit/{id}','BookController@edit');
Route::post('book/update','BookController@update');
//xóa sản phẩm
Route::post('book/delete','BookController@delete');
//Chuyen bay
Route::get('chuyenbay/all','ChuyenBayController@all');
//them chuyen bay
Route::get('chuyenbay/add','ChuyenBayController@add');
Route::post('chuyenbay/insert','ChuyenBayController@insert');
//sua thong tin chuyen bay
Route::get('chuyenbay/edit/{id}','ChuyenBayController@edit');
Route::post('chuyenbay/update','ChuyenBayController@update');
//xoa thong tin chuyen bay
Route::post('chuyenbay/delete','ChuyenBayController@delete');

//ds nguoi choi danh bai
Route::get('danhbai/all','DanhBaiController@all');
Route::get('danhbai/add','DanhBaiController@add');
Route::post('danhbai/insert','DanhBaiController@insert');
Route::get('danhbai/edit/{id}','DanhBaiController@edit');
Route::post('danhbai/update','DanhBaiController@update');
Route::post('danhbai/delete','DanhBaiController@delete');
///ds ban gai cu
Route::get('bangai/all','BanGaiController@all');
Route::get('bangai/add','BanGaiController@add');
Route::post('bangai/insert','BanGaiController@insert');
Route::get('bangai/edit/{id}','BanGaiController@edit');
Route::post('bangai/update','BanGaiController@update');
Route::post('bangai/delete','BanGaiController@delete');


//post
Route::get('post/all','PostController@all');
Route::get('post/insert_comment','PostController@insert_comment');
Route::get('post/insert_comment2','PostController@insert_comment2');
Route::get('post/insert_post_and_comments','PostController@insert_post_and_comments');
Route::get('post/add/{id}','PostController@add');
//Route::post('post/insert','PostController@insert');
Route::post('post/save_comment','PostController@save_comment');

//classroom-studentt
Route::get('classroom/all','ClassroomController@all');
Route::get('classroom/add','ClassroomController@add');
Route::post('classroom/insert_class','ClassroomController@insert_class');
//add student
Route::get('classroom/add_student','ClassroomController@add_student');
Route::post('classroom/add_student_proccess','ClassroomController@add_student_proccess');
Route::get('classroom/edit/{id}','ClassroomController@edit');
Route::post('classroom/update_student_proccess','ClassroomController@update_student_proccess');

//hoc phan'
Route::get('hocphan/all','HocPhanController@all');
Route::get('hocphan/add', 'HocPhanController@add');
Route::post('hocphan/add', 'HocPhanController@add_proccess');
Route::get('sinhvien/all', 'SinhVienController@all');
Route::get('sinhvien/add', 'SinhVienController@add');
Route::post('sinhvien/add', 'SinhVienController@add_proccess');
Route::get('dangkyhocphan/all','DangKyHocPhanController@all');
Route::get('dangkyhocphan/add','DangKyHocPhanController@add');
Route::post('dangkyhocphan/insert','DangKyHocPhanController@insert');
Route::get('dangkyhocphan/edit/{id}','DangKyHocPhanController@edit');
Route::post('dangkyhocphan/update','DangKyHocPhanController@update');
//sach-nxb
Route::get('sach/all','SachController@all');
Route::get('sach/add','SachController@add');
Route::post('sach/insert','SachController@insert');
Route::get('nxb/all','NXBController@all');
Route::get('nxb/add','NXBController@add');
Route::post('nxb/insert','NXBController@insert');
Route::get('sach_nxb/all','SachNXBController@all');
Route::get('sach_nxb/add','SachNXBController@add');
Route::post('sach_nxb/insert','SachNXBController@insert');
Route::get('sach_nxb/edit/{id}','SachNXBController@edit');
Route::post('sach_nxb/update','SachNXBController@update');
Route::get('btmang/tao_chuoi','BTMangController@tao_chuoi');
Route::get('btmang/chuoi','BTMangController@chuoi');

Route::get('locale/set','LocaleController@set');

//cart
Route::post('cart/add_to_cart','CartController@add_to_cart');
Route::get('cart/index','CartController@index');
Route::get('cart/delete_all_cart','CartController@delete_all_cart');
Route::get('/', 'ProductController@index'); 
Route::get('cart', 'ProductController@cart'); 
Route::get('add-to-cart/{id}', 'ProductController@addToCart');