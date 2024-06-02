<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('cursos', function(){
    return "Bienvenido a la pagina de cursos";
});

Route::get('cursos/create', function () {
    return "En esta pagina podras crear un curso";
});

//Unica ruta con dos posibles salidas
Route::get('cursos/{curso}/{categoria?}', function ($curso,$categoria = null) {
    if ($categoria) {
        return "Bienvenido al curso $curso de categoria $categoria";
    } else {
        return "Bienvenido al curso $curso";
    }
});

