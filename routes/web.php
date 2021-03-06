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
    return view('welcome');
});

Route::get('/index', function () {
    return view('frontend.index');
});

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/product_list', function () {
    return view('frontend.product_list');
});

Route::get('/single-product', function () {
    return view('frontend.single-product');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=>'admin','middleware'=>['auth']],
function () {

    route::resource('jeniskitab','jeniskitabController');
    route::resource('barang','barangController');
    route::resource('detailpenjualan','detailpenjualanController');
    route::resource('penjualan','penjualanController');
    route::resource('pembeli','pembeliController');


}
);
