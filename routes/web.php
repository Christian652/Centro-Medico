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
    return view('index');
})->name('/');

Auth::routes();

Route::get('/home', 'SiteController@index')->name('home');
Route::get('/sobre-nos', 'SiteController@sobre')->name('sobre');
Route::get('/contatos', 'SiteController@contatos')->name('contatos');


Route::namespace('Admin')->prefix('Admin')->name('admin.')->middleware('can:acesso-administrador')->group(function(){
    
    Route::resource('users', 'UsersController', ['except'=>['show', 'create', 'store']]);

});

Route::prefix('Secretario')->name('manager.')->middleware('can:acesso-secretario')->group(function(){

    //todas as rotas que possam envolver o secretario quando logado

});

Route::prefix('Medico')->name('doctor.')->middleware('can:acesso-medico')->group(function(){

    //todas as rotas que possam envolver o medico quando logado

});

Route::prefix('Paciente')->name('paciente.')->middleware('can:acesso-paciente')->group(function(){

    // todas as rotas que possam envolver um paciente

});

