<?php

$cadena = "Holu";

// Declaración de expresión regular básica
$expresion = "/hol[aeiou]/i";

echo (preg_match($expresion, $cadena)) ? 'Cumple' : 'No cumple';
