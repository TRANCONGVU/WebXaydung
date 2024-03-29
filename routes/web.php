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

Route::get('/', [
	'as' =>'trang-chu',
	'uses' => 'Controller_1@get_trangchu'
]);

Route::get('trang-chu', [
	'as' =>'trang-chu',
	'uses' => 'Controller_1@get_trangchu'
]);

Route::get('tintuc', [
	'as' =>'tintuc',
	'uses' => 'Controller_1@get_tintuc'
]);

Route::get('chitiettintuc', [
	'as' =>'chitiettintuc',
	'uses' => 'Controller_1@get_chitiettintuc'
]);

Route::get('gioithieu', [
	'as' =>'gioithieu',
	'uses' => 'Controller_1@get_gioithieu'
]);
Route::get('diendanxaydung', [
	'as' =>'diendanxaydung',
	'uses' => 'Controller_1@get_diendanxaydung'
]);
Route::get('dangtin', [
	'as' =>'dangtin',
	'uses' => 'Controller_1@get_dangtin'
]);
Route::get('diendankientruc', [
	'as' =>'diendankientruc',
	'uses' => 'Controller_1@get_diendankientruc'
]);
Route::get('diendannoithat', [
	'as' =>'diendannoithat',
	'uses' => 'Controller_1@get_diendannoithat'
]);
Route::get('diendanphongthuy', [
	'as' =>'diendanphongthuy',
	'uses' => 'Controller_1@get_diendanphongthuy'
]);
	


Route::get('hosothietke', [
	'as' =>'hosothietke',
	'uses' => 'Controller_1@get_hosothietke'
]);
Route::get('noithat', [
	'as' =>'noithat',
	'uses' => 'Controller_1@get_noithat'
]);
Route::get('nhadep', [
	'as' =>'nhadep',
	'uses' => 'Controller_1@get_nhadep'
]);
Route::get('tienich', [
	'as' =>'tienich',
	'uses' => 'Controller_1@get_tienich'
]);
Route::get('subnews', [
	'as' =>'subnews',
	'uses' => 'Controller_1@get_subnews'
]);
