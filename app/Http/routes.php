<?php

Route::get('/', function () {

	//return view('home');
	//return "Usando Git";
	return view('website.practica080316');

});

Route::get('/tienda', function(){
	return view('website.tienda');
});


Route::post('/form', 'ambientesController@store');

//Controladores
Route::get('/controller', 'ambientesController@index');
