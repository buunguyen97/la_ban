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

Route::get('/', function () {
    return view('admin.trangchu');
});
Route::group(['prefix'=>'khachhang'],function (){

        //admin/theloai/sua
        Route::get('danhsach','CustomerList@getDanhSach');

        Route::get('sua/{id}','CustomerList@getSua');
        Route::post('sua/{id}','CustomerList@postSua');

        Route::get('them','CustomerList@getThem');
        Route::post('them','CustomerList@postThem');

        Route::get('xoa/{id}','CustomerList@getXoa');
    });