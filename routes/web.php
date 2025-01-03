<?php 
///Web se encarga de recibir todas las peticiones que hagamos en nuestra aplicación y manipularalas
 use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Holaaaaaa';
});

?>