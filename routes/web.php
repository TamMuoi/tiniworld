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
Route::get('/diadiem', function () {
    return view('diadiem.diadiem');
});
Route::get('/chitietleft', function () {
    return view('diadiem.trangchitietleft');
});

