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
Route::get('/','HomeController@home');
Route::group(['prefix' => 'home'], function () {
    Route::get('/','HomeController@home')->name('home');
});
Route::group(['prefix' => 'cadastro'], function () {
    Route::get('/', 'CadastroController@cadastro')->name('cadastro');
    Route::post('/cadastra', 'CadastroController@cadastra')->name('cadastra');
    Route::get('/cadastrado', 'CadastroController@cadastrado')->name('cadastrado');
});
Route::group(['prefix' => 'login'], function () {
    Route::get('/', 'LoginController@login')->name('login');
    Route::post('/logar', 'LoginController@logar')->name('logar');
    Route::get('/logado', 'LoginController@logado')->name('logado');
});
Route::group(['prefix' => 'cardapio'], function () {
    Route::get('/', 'CardapioController@cardapio')->name('cardapio');
});
Route::group(['prefix' => 'promocao'], function () {
    Route::get('/', 'PromocaoController@promocao')->name('promocao');
});