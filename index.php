<?php 
// Función con retorno de valor y parámetro por defecto
function factorial($value = 0) {
    $factorial = 1;
    
    for ($i = 1; $i <= $value; $i++) { 
        $factorial *= $i;
    }

    return $factorial;
}

// Usar el valor por defecto
$factorial = factorial();

echo "El factorial de 0 es: $factorial";
echo "<br>";

$numero = 7;
$factorial = factorial($numero);

echo "El factorial de $numero es: $factorial";
echo "<br>";
