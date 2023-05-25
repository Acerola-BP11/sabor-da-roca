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
    return view('welcome');
});

Route::get('/index', function () {
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
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
