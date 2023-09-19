<?php

$cadena = "Hola mundo ¿cómo estas?";

// Declaración de expresión regular básica
$expresion = "/mundo/";

echo (preg_match($expresion, $cadena)) ? 'Cumple' : 'No cumple';
