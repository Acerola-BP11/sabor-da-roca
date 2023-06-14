<?php

use App\Http\Controllers\clienteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\marmitexController;
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
        Route::get('listclient', 'list')->name('listclient');
        Route::get('registerclient', 'new')->name('registerclient');
        Route::post('registerclient', 'salvar_novo')->name('registerclient');
        Route::post('/clientes/edit', 'edit');
        Route::post('clientes/delete', 'delete');
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

// POST
Route::post('registermarmitex', [marmitexController::class, 'salvarnovo'])
->middleware(['auth', 'verified']);

Route::post('registerclient', [clienteController::class, 'salvarnovo'])
->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';