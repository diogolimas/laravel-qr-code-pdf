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
Route::get('/projetos','ProjetoController@index');

Route::get('projeto/verQrCode/{id}','ProjetoController@irParaPaginaQrCode');
Route::get('/projeto/{id}', 'ProjetoController@gerarQrCode');
Route::get('/projeto/{codigo}/visualizar', 'ProjetoController@verProjeto');
Route::get('/projetos/cadastrar', 'ProjetoController@create')->name('cadastar-projeto');
Route::post('/projetos/store','ProjetoController@store') ->name('store-projeto');