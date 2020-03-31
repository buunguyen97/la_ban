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
Route::group(['prefix'=>'admin'],function () {
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
});
