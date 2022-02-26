<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\LeitorController;
use App\Http\Controllers\EmprestimoController;

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



Route::prefix('/admin')->group(function(){

       
    Route::resource('livro', LivroController::class);
    Route::resource('leitor', LeitorController::class);
    Route::resource('emprestimo', EmprestimoController::class);

    Route::post('/buscaLivro', [App\Http\Controllers\LivroController::class, 'buscaLivro'])->name('livro.buscaLivro');
    Route::get('/buscaLivro', [App\Http\Controllers\LivroController::class, 'buscaLivro'])->name('livro.buscaLivro');

});

Route::get('/', function () {
    return view('app.admin.livro.index');
});