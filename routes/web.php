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


Route::get('/', function () {
    return view('trang-chu');
})->name('trang-chu');

Route::get('khuyen-mai', function () {
    return view('khuyen-mai');
});
Route::get('chiTiet-km', function () {
    return view('chiTiet-km');
});