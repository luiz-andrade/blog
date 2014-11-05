<?php

Route::get('/', function()
{
	return View::make('home/principal');
});

Route::get('principal', 'HomeController@principal');

Route::resource('comentario', 'ComentarioController');
Route::resource('categoria', 'CategoriaController');
//Route::resource('home', 'BlogController', array('except'=>array(show)));


