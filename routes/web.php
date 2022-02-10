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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/serie', 'SerieController@index')->name('listar_serie');
Route::get('/serie/cadastrar', 'SerieController@cadastrar')->name('cadastrar_serie');
Route::post('/serie/cadastrar', 'SerieController@salvar')->name('salvar_serie');
Route::delete('/serie/{id}', 'SerieController@destroy')->name('deletar_serie');
Route::get('/serie/editar/{serie}', 'SerieController@editar')->name('editar_serie');
Route::post('/serie/alterar/{serie}', 'SerieController@alterar')->name('alterar_serie');


Route::get('/filme', 'FilmeController@index')->name('listar_filme');
Route::get('/filme/cadastrar', 'FilmeController@cadastrar')->name('cadastrar_filme');
Route::post('/filme/cadastrar', 'FilmeController@salvar')->name('salvar_filme');
Route::delete('/filme/deletar/{id}', 'FilmeController@destroy')->name('deletar_filme');
Route::get('/filme/editar/{filme}', 'FilmeController@editar')->name('editar_filme');
Route::post('/filme/alterar/{filme}', 'FilmeController@alterar')->name('alterar_filme');

Route::get('/livro', 'LivroController@index')->name('listar_livro');
Route::get('/livro/cadastrar', 'LivroController@cadastrar')->name('cadastrar_livro');
Route::post('/livro/cadastrar', 'LivroController@salvar')->name('salvar_livro');
Route::delete('/livro/{id}', 'LivroController@destroy')->name('deletar_livro');
Route::get('/livro/editar/{livro}', 'LivroController@editar')->name('editar_livro');
Route::post('/livro/alterar/{livro}', 'LivroController@alterar')->name('alterar_livro');


