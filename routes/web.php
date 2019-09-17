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

Route::get('/bantin', function () {
    return view('vulon.vu');
});

Route::get('/right', function () {
    return view('trangchitietleft');
});



Route::get('/member', function () {
    return view('vulon.member');
});
Route::get('/vetini', function () {
    return view('vulon.vetiniword');
});


Route::get('/ve', function () {
    return view('vulon.ve');
});