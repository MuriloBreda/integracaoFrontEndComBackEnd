<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NivelAcessoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nivel-acesso/cadastro', [NivelAcessoController::class, 'cadastro'])->name('nivel-acesso.cadastro');
