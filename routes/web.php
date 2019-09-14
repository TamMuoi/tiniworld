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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('sinh_nhat', function () {
    return view('sinh_nhat');
})->name('sinh_nhat');
Route::get('tin_tv', function () {
    return view('tin_tv');
})->name('tin_tv');
Route::get('tin_tini', function () {
    return view('tin_tini');
})->name('tin_tini');
Route::get('/', function () {
    return view('trang-chu');
})->name('trang-chu');
Route::get('/diadiem', function () {
    return view('diadiem.diadiem');
});
Route::get('/chitietleft', function () {
    return view('diadiem.trangchitietleft');
});

