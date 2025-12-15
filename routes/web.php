<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
})->name("inicio");

Route::get('/posts', function () {
    return view('posts.listado'); //SESION 1 COMPLETADA
})->name("posts_listado");

Route::get('/posts/{id}', function ($id) {
    return view('posts.ficha', ['id' => $id]);
})->where("id", "[0-9]+")->name("posts_ficha"); // Sesion 2 ACT 1 COMPLETADA

use App\Http\Controllers\PostController;

Route::resource('algo', PostController::class)->only(['index', 'show', 'create', 'edit']);