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

Route::get('/product/resistencia1k', function() {
    return view('productos/resistencia1k');
});

Route::get('/product/resistencia330', function() {
    return view('productos/resistencia330');
});

Route::get('/product/jumpers-mm', function() {
    return view('productos/dp-mm');
});

Route::get('/product/led-bicolor', function() {
    return view('productos/led-bicolor');
});

Route::get('/product/led-rojo', function() {
    return view('productos/led-rojo');
});

Route::get('/product/led-azul', function() {
    return view('productos/led-azul');
});
