<?php

use App\Http\Controllers\NivelAcessoController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

// Rotas do nivel de acesso
// ===============================  NÍVEL DE ACESSO ==============================================


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Rota de cadastro
Route::get('/nivel-acesso/cadastro',[NivelAcessoController::class, 'cadastro'])
->name('nivel-acesso.cadastro');

// Rota de salvar
Route::post('/nivel-acesso/salvar', [NivelAcessoController::class, 'add'])
->name('nivel-acesso.salvar');

// Rota de listar
Route::get('/nivel-acesso/listar', [NivelAcessoController::class, 'listar'])
->name('nivel-acesso.listar');

// Rota de deletar
Route::delete('/nivel-acesso/deletar/{id}', [NivelAcessoController::class, 'deletar'])
->name('nivel-acesso.deletar');

// Rota de atualização
Route::get('/nivel-acesso/atualizar/{id}', [NivelAcessoController::class, 'atualizar'])
->name('nivel-acesso.atualizar');

// Rota de edição 
Route::put('nivel-acesso/update/{id}', [NivelAcessoController::class, 'update'])
->name('nivel-acesso.update');

// =============================== USUÁRIOS ==============================================

// Rotas de cadastro
Route::get('/usuarios/cadastro', [UsuariosController::class, 'cadastro'])
->name('usuarios.cadastro');

// Rota de salvar
Route::post('/usuarios/salvar', [UsuariosController::class, 'add'])
->name('usuarios.salvar');

// Rota de listar
Route::get('usuarios/listar', [UsuariosController::class, 'listar'])
->name('usuarios.listar');

// Rota de deletar
Route::delete('/usuarios/deletar/{id}', [UsuariosController::class, 'deletar'])
->name('usuarios.deletar');

// Rota de atualização
Route::get('/usuarios/atualizar/{id}', [UsuariosController::class, 'atualizar'])
->name('usuarios.atualizar');

// Rota de edição 
Route::put('usuarios/update/{id}', [UsuariosController::class, 'update'])
->name('usuarios.update');
