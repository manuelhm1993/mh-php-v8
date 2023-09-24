<?php

$cadena = "Llegaré pronto que voy andando";

// Subpatrones
$expresion = "/Llegaré pronto que voy (vol|and)ando/i";

echo (preg_match($expresion, $cadena)) ? 'Cumple' : 'No cumple';
