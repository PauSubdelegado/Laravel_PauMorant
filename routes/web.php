<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/posts', function () {
    return "Listado de posts"; //SESION 1 COMPLETADA
});

Route::get('/posts/{id}', function ($id) {
    return "Ficha del post $id"; 
})->where("id", "[0-9]+"); // Sesion 2 ACT 1 COMPLETADA
