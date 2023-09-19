<?php

$cadena = "Av. La candelaria 123";

// Declaración de expresión regular básica
$expresion = "/^av/i";

echo (preg_match($expresion, $cadena)) ? 'Cumple' : 'No cumple';
