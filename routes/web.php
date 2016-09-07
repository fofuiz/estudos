<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/coxinha', function () { return 'Coxinha, coxinha, coxinha de galinha!'; });

Route::get('/perdigoto','PerdigotoController@index_01');
Route::get('/perdigato','PerdigotoController@index_02');
Route::get('/gravagato/{gato}','PerdigotoController@gravagato');
Route::get('/vergato','PerdigotoController@vergato');



Route::get('/filho', function () { return view('perdigoto', ['gato'=>'Filho']); });

Route::get('hero/{ativo}', 'HeroController@index');

Route::get('filtrahira/{gato}', function ($gato){ })->middleware('filtraHira:gato');

