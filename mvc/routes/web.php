<?php

use Lib\Route;

Route::get('/', function () {
    return [
        "title"   => "Home",
        "content" => "Hola desde la página principal",
    ];
});

Route::get('/contact', function () {
    return "Hola desde la página de contacto";
});

Route::get('/about', function () {
    return "Hola desde la página acerca de";
});

// Rutas con parámetros con nombre
Route::get('/courses/:slug', function ($slug) {
    return "Hola desde la página de cursos $slug";
});

Route::dispatch();
