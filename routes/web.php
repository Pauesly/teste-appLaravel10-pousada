<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [SiteController::class, 'index'])->name('site.index');

Route::get('/produto/{slug}', [SiteController::class, 'details'])->name('site/details');

Route::get('categoria/{id}', [SiteCController::class, 'categoria'])->name('site.categoria');



//dois parametros
Route::get('/produto/{id}/{outro}', function ($id, $outro) {
    return "o ID do produto é: ".$id. " e outro É: ".$outro;
});

//Parametros opcionais
Route::get('/opcional/{id}/{outro?}', function ($id, $outro = '') {
    return "o ID do produto é: ".$id. " e outro É: ".$outro;
});

//Redirecionar
Route::get('/sobre', function () {
    return redirect('/');
});

Route::redirect('/nada', '/');

//Só renderizar uma pagina (codigo mais simples)
// rota + View
Route::view('/nadatambem', 'welcome');

//Rota nomeadas
Route::get('/news', function(){
    return view('news');
})->name('noticias');

Route::get('/novidades', function(){
    return redirect()->route('noticias');
});

// GRUPOS DE ROTAS
Route::group([
    'prefix' => 'admin', // prefixo da rota - Navegação das barras
    'as' => 'admin' // nome, caso as rotas sejam nomeadas
], function(){

    Route::get('dashboard', function(){
        return "dashboard"; // rota - admin/dashboard
    })->name('dashboard'); // rota nomeada - admin/dashboard

    Route::get('users', function(){
        return "users";  // rota - admin/users
    })->name('users'); //rota nomeada - admin/users
});


// MANDANDO PRO CONTROLER -> declarar uso do referido controller

//Chamada basica
Route::get('/cliente', [ClienteController::class, 'cliente']); // parametros: nome no browser / controlador / métido do controller

//Passando parametros
Route::get('/cliente/{id}', [ClienteController::class, 'show']);

Route::get('/produto', [ProdutoController::class, 'index']);


Route::view('/login', 'login.form')->name('login.form');
Route::post('/auth', [LoginController::class, 'auth'])->name('login.auth');



Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard')->middleware('auth');

Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');






