<?php

$cadena = "Holu";

// Declaración de expresión regular básica
$expresion = "/hol*/i";

echo (preg_match($expresion, $cadena)) ? 'Cumple' : 'No cumple';
