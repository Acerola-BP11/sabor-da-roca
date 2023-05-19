<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', function () {
    return view('index');
});

Route::get('/menu', function(){
    return view('menu');
});

Route::get('/pedido', function(){
    return view('pedido');
});

Route::get('/galeria', function(){
    return view('galeria');
});

Route::get('/time', function(){
    return view('time');
});

Route::get('/noticias', function(){
    return view('noticias');
});

Route::get('/contato', function(){
    return view('contato');
});