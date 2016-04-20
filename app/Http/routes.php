<?php

Route::get('/', function () {
    return view('veterinaria.index');
});

Route::get('/registrarusuario', function () {
    return view('veterinaria.registrarusuario');
});

Route::get('/iniciarsesion', function () {
    return view('veterinaria.iniciarsesion');
});

Route::post('/registrousuario', 'UsuarioController@store');

Route::post('/login', 'LoginController@store');

Route::group(['middleware' => ['administrador']], function(){
	get('/administrador','AdministradorController@index');
	get('/logout','AdministradorController@logout');
	get('/administrador/mascota','MascotaController@index');
	post('/registrarmascota','MascotaController@store');
	get('/datosmascota/{id}', 'MascotaController@show');
});
