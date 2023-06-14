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
| Aqui é onde você pode registrar as rotas da aplicação web. Essas rotas
| são carregadas pelo RouteServiceProvider em um grupo que contém o
| middleware "web". Agora, crie algo incrível!
|
*/

// Rota inicial
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

// Rota do painel de controle (dashboard)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

// Rotas relacionadas aos clientes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::prefix('clientes')->group(function () {
        // Listar clientes
        Route::get('listclient', [clienteController::class, 'list'])->name('listclient');
        
        // Registrar novo cliente
        Route::get('registerclient', [clienteController::class, 'new'])->name('registerclient');
        Route::post('registerclient', [clienteController::class, 'salvarnovo'])->name('registerclient');
        
        // Editar cliente
        Route::post('edit', [clienteController::class, 'edit']);
        
        // Excluir cliente
        Route::get('delete/{id}', [clienteController::class, 'delete'])->name('deleteclient');
    });
});

// Rota para cadastrar
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/cadastrar', function () {
        return Inertia::render('cadastrar');
    })->name('cadastrar');
});

// Rotas relacionadas ao perfil do usuário
Route::middleware('auth')->group(function () {
    // Editar perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    
    // Excluir perfil
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rotas relacionadas aos marmitex
Route::middleware(['auth', 'verified'])->group(function () {
    Route::prefix('marmitex')->group(function () {
        // Listar marmitex
        Route::get('list', [marmitexController::class, 'list'])->name('listmarmitex');
        
        // Registrar novo marmitex
        Route::get('register', [marmitexController::class, 'new'])->name('registermarmitex');
        Route::post('register', [marmitexController::class, 'salvarnovo'])->name('registermarmitex');
        
        // Editar marmitex
        Route::post('edit', [marmitexController::class, 'edit']);
        
        // Excluir marmitex
        Route::post('delete', [marmitexController::class, 'delete']);
    });
});

Route::get('nossosclientes', function(){
    return view('clientes');
})->name('nossosclientes');

Route::get('time', function(){
    return view('time');
})->name('time');

Route::get('listguest', [marmitexController::class, 'listGuest'])->name('listguest');

require __DIR__.'/auth.php';