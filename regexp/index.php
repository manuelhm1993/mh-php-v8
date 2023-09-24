<?php

$cadena = "Llegaré pronto que voy andando";

// Subpatrones de captura
$expresion = "/Llegaré pronto que voy (vol|and)ando/i";

// El subpatrón que coincide es enviado a un array llamado matches que se pasa como tercer parámetro de preg_match
echo (preg_match($expresion, $cadena, $matches)) ? 'Cumple' : 'No cumple';

// En la primera posición queda almacenada la cadena y en el siguiente el subpatrón coincidente, en este caso (and)
echo "<br>";
var_dump($matches);
