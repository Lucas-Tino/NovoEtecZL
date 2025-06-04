<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
