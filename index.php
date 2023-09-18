<?php 

// Ejercicio del árbol de navidad
$filas = 10;

for ($i = 1; $i <= $filas; $i++) { 
    for ($j = 0; $j < $i; $j++) { 
        echo "*";
    }
    echo "<br>";
}
