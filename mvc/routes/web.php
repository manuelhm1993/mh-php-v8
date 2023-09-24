<?php

use Lib\Route;

Route::get('/', function () {
    echo "Hola desde la página principal";
});

Route::get('/contact', function () {
    echo "Hola desde la página de contacto";
});

Route::get('/about', function () {
    echo "Hola desde la página acerca de";
});

// Rutas con parámetros con nombre
Route::get('/courses/:slug', function ($slug) {
    echo "Hola desde la página de cursos $slug";
});

Route::dispatch();
