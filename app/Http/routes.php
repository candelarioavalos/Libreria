<?php

Route::get('/', function () {

	return view('home');

});

Route::post('/form', 'ambientesController@show');

//Controladores
Route::get('/controller', 'ambientesController@index');
