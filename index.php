<?php 

// Ejercicio de potencia
$base      = 10;
$exponente = 2;
$resultado = 1;

// Para $i = 1 mientras sea <= $exponente hacer
for ($i = 1; $i <= $exponente; $i++) { 
    $resultado *= $base;
}

echo "$base ^ $exponente = $resultado";
