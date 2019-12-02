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

Route::group(['middleware'=>['guest']],function(){
    Route::get('/', 'Auth\LoginController@showLoginForm');
    Route::post('/login', 'Auth\LoginController@login')->name('login');
});

Route::group(['middleware'=>['auth']],function(){

    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

    Route::get('/main', function () {
        return view('contenido/contenido');
    })->name('main');

    Route::group(['middleware'=>['ProjectManager']],function(){
        Route::get('/proyectos', 'ProyectoController@index');
        Route::post('/proyectos/agregar', 'ProyectoController@agregar');
        Route::put('/proyectos/pausar', 'ProyectoController@pausar');
        Route::put('/proyectos/activar', 'ProyectoController@activar');
        Route::put('/proyectos/eliminar', 'ProyectoController@eliminar');
        Route::get('/proyectos/vista', 'ProyectoController@vista');
        Route::get('/user', 'UserController@index');
        Route::post('/user/registrar', 'UserController@store');
        Route::put('/user/actualizar', 'UserController@update');
        Route::put('/user/desactivar', 'UserController@desactivar');
        Route::put('/user/activar', 'UserController@activar');
    });
    
});




//Route::get('/home', 'HomeController@index')->name('home');

