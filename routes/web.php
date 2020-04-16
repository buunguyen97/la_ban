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


Route::get('admin/dangnhap','UserController@getdangnhapAdmin');
Route::post('admin/dangnhap','UserController@postdangnhapAdmin');
Route::get('admin/logout','UserController@getDangXuatAdmin');
Route::group(['prefix'=>'admin','middleware'=>'checkuser'],function () {
    Route::get('/', function () {
        return view('admin.trangchu');
    });
    Route::get('trangchu', function () {
        return view('admin.trangchu');
    });
    Route::group(['prefix' => 'khachhang'], function () {

        Route::get('danhsach', 'CustomerList@getDanhSach');
        Route::get('them', 'CustomerList@getThem');
        Route::post('them', 'CustomerList@postThem');

        Route::get('sua/{id}', 'CustomerList@getSua');
        Route::post('sua/{id}', 'CustomerList@postSua');

        Route::get('xoa/{id}', 'CustomerList@getXoa');
    });
    Route::group(['prefix' => 'bill'], function () {

        Route::get('danhsach', 'BillController@getDanhSach');
        Route::get('them', 'BillController@getThem');
        Route::post('them', 'BillController@postThem');

        Route::get('sua/{id}', 'BillController@getSua');
        Route::post('sua/{id}', 'BillController@postSua');

        Route::get('xoa/{id}', 'BillController@getXoa');
    });
    Route::group(['prefix' => 'chitietbill'], function () {

        Route::get('danhsach', 'ChitietBillController@getDanhSach');


        Route::get('sua/{id}', 'ChitietBillController@getSua');
        Route::post('sua/{id}', 'ChitietBillController@postSua');

        Route::get('xoa/{id}', 'ChitietBillController@getXoa');
    });
    Route::group(['prefix' => 'product'], function () {

        Route::get('danhsach', 'ProductController@getDanhSach');

        Route::get('them', 'ProductController@getThem');
        Route::post('them', 'ProductController@postThem');

        Route::get('sua/{id}', 'ProductController@getSua');
        Route::post('sua/{id}', 'ProductController@postSua');

        Route::get('xoa/{id}', 'ProductController@getXoa');
    });
    Route::group(['prefix' => 'type_product'], function () {

        Route::get('danhsach', 'TypeProductController@getDanhSach');

        Route::get('them', 'TypeProductController@getThem');
        Route::post('them', 'TypeProductController@postThem');

        Route::get('sua/{id}', 'TypeProductController@getSua');
        Route::post('sua/{id}', 'TypeProductController@postSua');

        Route::get('xoa/{id}', 'TypeProductController@getXoa');
    });
    Route::group(['prefix' => 'user'], function () {

        Route::get('danhsach', 'UserController@getDanhSach');

        Route::get('them', 'UserController@getThem');
        Route::post('them', 'UserController@postThem');

        Route::get('sua/{id}', 'UserController@getSua');
        Route::post('sua/{id}', 'UserController@postSua');

        Route::get('xoa/{id}', 'UserController@getXoa');
    });

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
