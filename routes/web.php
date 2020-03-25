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


Route::get('/projeto/{id}', 'ProjetoController@verProjeto');
Route::get('/projetos/cadastrar', 'ProjetoController@create')->name('cadastar-projeto');
Route::post('/projetos/store','ProjetoController@create') ->name('store-projeto');