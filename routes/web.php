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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

//User
Route::get('/user/prfle_user','profileUser@prof_index')->name('prfle_user');
Route::get('/user/prfle_user/{id}','profileUser@del_data');
Route::get('profile','profileUser@edit_index');
Route::post('profile','profileUser@updateAccount');



//OUTERWEAR
Route::get('/outerwear/dropdead','outerwear@dropdead');

Route::get('/outerwear/horizon','outerwear@horizon')->name('horizon');

Route::get('/outerwear/tenue','outerwear@tenue')->name('tenue');


//FOOTWEAR
Route::get('/footwear/vans','footwear@vans_ctlg');

Route::get('/footwear/piero','footwear@piero_ctlg')->name('piero');

Route::get('/footwear/gmx','footwear@gmx')->name('gmx');



//PESAN
Route::get('/order/pesan/{id}','PesanController@index');

Route::post('/order/pesan/{id}','PesanController@pesan');


//CHECKOUT
Route::get('check-out', 'PesanController@check_out');
Route::delete('check-out/{id}', 'PesanController@delete');
//Route::get('konfirmasi-check-out/{id}', 'PesanController@confirmation');
Route::get('konfirmasi-check-out', 'PesanController@konfirmasi');


//history pemesanan
Route::get('history', 'history_ctrl@index');
Route::get('history/{id}', 'history_ctrl@detail');


//Detail Pemesanan
//Route::get();

