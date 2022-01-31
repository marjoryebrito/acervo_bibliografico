<?php

use Illuminate\Support\Facades\Route;

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


/*Na versão 8.x do Laravel utilizar:
Route::get('/', [\App\Http\Controller\PrincipalController::class, 'principal']);
*/
//use App\Http\Controllers\IndexController;
Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('cliente.index');
Route::get('/sobre-nos', [App\Http\Controllers\SobreNosController::class, 'sobrenos'])->name('cliente.sobrenos');
Route::get('/contato', [App\Http\Controllers\ContatoController::class, 'contato'])->name('cliente.contato');
Route::get('/acervo', [App\Http\Controllers\AcervoController::class, 'acervo'])->name('cliente.acervo');

Route::prefix('/admin')->group(function(){
    Route::get('/', [App\Http\Controllers\IndexAdminController::class, 'index'])->name('admin.index');
});

