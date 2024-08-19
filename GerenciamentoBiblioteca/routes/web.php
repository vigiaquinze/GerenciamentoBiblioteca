<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmprestimoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\LivroController;
use App\Http\Middleware\LivroMiddleware;
use App\Models\Livro;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

// Rota para exibir a homePage
Route::get('',[HomeController::class,'index'])
->name('home');

// Rota para exibir o formulário de login
Route::get('/login', [UsuarioController::class, 'showLoginForm'])->
name('usuarios.login');

// Rota para processar o login
Route::post('/login', [UsuarioController::class, 'login'])->
name('usuarios.login');

// Rota para exibir o formulário de registro
Route::get('/registro', [UsuarioController::class, 'showRegistroForm'])->
name('usuarios.registro');

// Rota para processar o registro
Route::post('/registro', [UsuarioController::class, 'registro'])->
name('usuarios.registro');

// Rota para logout
Route::post('/logout', [UsuarioController::class, 'logout'])->
name('usuarios.logout');

// Rota para o dashboard, protegida por autenticação
Route::get('/dashboard', [DashboardController::class, 'index'])
->middleware('auth')->name('dashboard');

Route::resource('/livros',LivroController::class)->
middleware(LivroMiddleware::class)->except('show');

// Visualização de um produto específico
Route::get('livros/{livro}', [LivroController::class, 'show'])
->middleware('auth')->name('livros.show');

Route::post('emprestimo/add/{livro}', [EmprestimoController::class, 'add'])
->middleware('auth')->name('emprestimo.add');
