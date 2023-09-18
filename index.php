<?php 
// Funciones definidas por nosotros
function factorial($value) {
    $factorial = 1;
    
    for ($i = 1; $i <= $value; $i++) { 
        $factorial *= $i;
    }

    echo "El factorial de $value es: $factorial";
    echo "<br>";
}

// Llamada de función
factorial(0);
factorial(9);
