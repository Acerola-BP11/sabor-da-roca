<?php

use App\Http\Controllers\clienteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::controller(clienteController::class)->group(function () {
        Route::get('/clientes', 'list');
        Route::post('/clientes', 'salvar_novo');
        Route::post('/clientes/edit', 'edit');
        Route::post('/clientes/delete', 'delete');
    });
});

Route::get('/cadastrar', function () {
    return Inertia::render('cadastrar');
})->middleware(['auth', 'verified'])->name('cadastrar');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// GET
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/registermarmitex', function () {
    return Inertia::render('Marmitex/RegisterMarmitex');
})->middleware(['auth', 'verified'])->name('registermarmitex');

// Route::get('/listmarmitex', function () {
//     return Inertia::render('Marmitex/ListMarmitex');
// })->middleware(['auth', 'verified'])->name('listmarmitex');

Route::get('listmarmitex', [marmitexController::class, 'list'])
->middleware(['auth', 'verified'])->name('listmarmitex');

Route::get('/registerclient', function () {
    return Inertia::render('Clients/RegisterClient');
})->middleware(['auth', 'verified'])->name('registerclient');

Route::get('/listclient', function () {
    return Inertia::render('Clients/ListClient');
})->middleware(['auth', 'verified'])->name('listclient');

// POST
Route::post('registermarmitex', [marmitexController::class, 'salvarnovo'])
->middleware(['auth', 'verified']);

Route::post('registerclient', [clienteController::class, 'salvarnovo'])
->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';

Route::get('/home', function(){
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

Route::get('/clientes', function(){
    return view('clientes');
});

Route::get('/contato', function(){
    return view('contato');
});

