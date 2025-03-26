<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\DepartamentosController;
use App\Http\Controllers\ContatoController;

Route::get('/', function () {
    return view('Bem-Vindo a Etec Zona Leste');
});

Route::get('/', function(){ return PrincipalController::principal();})->name('site.index');
Route::get('/cursos', function(){ return CursosController::cursos();})->name('site.cursos');
Route::get('/departamentos', function(){ return DepartamentosController::departamentos();})->name('site.departamentos');
Route::get('/contato', function(){ return ContatoController::contato();})->name('site.contato');