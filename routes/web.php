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
/* Rotas de Autenticação do Laravel */
Auth::routes();
/* Rotas da raiz Intranet */
Route::get('/', 'HomeController@index')->name('index');
Route::get('/noticia/{id}', 'HomeController@post')->name('news');
Route::get('/teste', 'HomeController@test')->name('test');
/* Rotas para o Painel */
Route::get('/home', function () { return redirect('/painel'); });
Route::get('/painel', 'HomeController@dashboard')->name('home');
Route::get('/painel/perfil', 'HomeController@perfil')->name('profile');

/* Rotas para o CRUD de Usuários */
Route::post('/painel/usuario/senha', 'UsersController@changePassword')->name('user.password');

/* Rotas para CRUD Noticias */
Route::post('/painel/noticia', 'PostsController@store')->name('post.store');
Route::get('/painel/noticia', 'PostsController@index')->name('post.index');
Route::get('/painel/noticia/adicionar', 'PostsController@create')->name('post.create');
Route::put('/painel/noticia/{id}', 'PostsController@update')->name('post.update');
Route::get('/painel/noticia/{id}', 'PostsController@show')->name('post.show');
Route::delete('/painel/noticia/{id}', 'PostsController@destroy')->name('post.destroy');
Route::get('/painel/noticia/{id}/editar', 'PostsController@edit')->name('post.edit');

/* Route::resource('post', 'PostsController'); */