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


Auth::routes();

Route::get('/', 'SiteController@index')->name('/');

Route::get('login', function(){
    return redirect()->route('/');
});

Route::post('login', 'Auth\\LoginController@login')->name('login');

Route::get('register', function(){
    return redirect()->route('/');
})->name('register');


Route::name('site.')->group(function(){
    
    Route::get('/home', 'SiteController@index')->name('home');
    Route::get('/sobre-nos', 'SiteController@sobre')->name('sobre');
    Route::get('/contatos', 'SiteController@contatos')->name('contatos');
    Route::get('/categoria-de-consulta/{especialidade}', 'SiteController@categoriaDeConsulta')->name('categoriaDeConsulta');

    Route::resource('Mensagens', 'MessageController', ['except'=>['show', 'create', 'edit', 'update', 'index']])->names('messages')->parameters(["Mensagens"=>'message']);

});


Route::namespace('Admin')->prefix('Administrador')->name('admin.')->middleware('can:acesso-administrador')->group(function(){
    
    Route::resource('users', 'UsersController', ['except'=>['show', 'create', 'store']])->names('users');
    Route::resource('posts', 'PostController', ['except'=>['show']])->names('posts');

    Route::resource('especialidades', 'EspecialidadeController')->names('especialidades');

});

Route::prefix('Secretario')->name('manager.')->middleware('can:acesso-secretario')->group(function(){

    Route::resource('CategoriasMensagens', 'MessageCategoryController')->names('message_categories')->parameters(["CategoriasMensagens"=>'messageCategory']);

    Route::resource('Mensagens', 'MessageController', ['except'=>['show', 'create', 'edit']])->names('messages')->parameters(["Mensagens"=>'message']);
    Route::put('Mensagens/tornarPublica/{message}', 'MessageController@bePublic')->name('messages.bepublic');
    Route::put('Mensagens/tornarPrivado/{message}', 'MessageController@bePrivate')->name('messages.beprivate');

});

Route::prefix('Medico')->name('doctor.')->middleware('can:acesso-medico')->group(function(){

    //todas as rotas que possam envolver o medico quando logado

});

Route::prefix('Paciente')->name('paciente.')->middleware('can:acesso-paciente')->group(function(){

    // todas as rotas que possam envolver um paciente

});

Route::get('home', function(){ return view('home'); })->middleware('auth')->name('dashboard');
