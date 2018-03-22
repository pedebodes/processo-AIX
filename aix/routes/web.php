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

    return redirect(route('login'));
});

Auth::routes();

Route::group(['middleware' => ['web']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('cursos', 'CursoController');
    Route::get('xml', ['uses' => 'CursoController@xml']);
    Route::post('carga', ['uses' => 'CursoController@carga']);
    Route::get('fudeu', ['uses' => 'AlunoController@fudeu']);
    
    Route::resource('alunos', 'AlunoController');
});