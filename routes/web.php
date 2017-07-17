<?php

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

Route::get('/', function () {
	return view('welcome');
});

Route::get('/produtos', 'ProdutoController@lista');

Route::get('/produtos/detalhes', 'ProdutoController@detalhes');

Route::get('/produtos/novo', 'ProdutoController@novo');

Route::post('/produtos/adiciona', 'ProdutoController@adiciona');

Route::get('/produtos/json', 'ProdutoController@listaJson');

Route::get('/produtos/remover/{id}', 'ProdutoController@remover');
