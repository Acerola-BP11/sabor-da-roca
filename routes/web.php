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
        Route::post('delete', [clienteController::class, 'delete']);
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
        Route::get('list', [MarmitexController::class, 'list'])->name('listmarmitex');
        
        // Registrar novo marmitex
        Route::get('register', [MarmitexController::class, 'new'])->name('registermarmitex');
        Route::post('register', [MarmitexController::class, 'salvarnovo']);
        
        // Editar marmitex
        Route::post('edit', [MarmitexController::class, 'edit']);
        
        // Excluir marmitex
        Route::post('delete', [MarmitexController::class, 'delete']);
    });
});


require __DIR__.'/auth.php';