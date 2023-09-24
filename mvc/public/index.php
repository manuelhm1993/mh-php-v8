<?php

require_once '../autoload.php';

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
