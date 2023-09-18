<?php 

declare(strict_types=1); // Declaración de tipos estricta

// Definir el tipo de datos a recibir y a devolver
function sumarEnteros(int $valor1, int $valor2): int | float {
    return ($valor1 + $valor2) / 2;
}

$resultado = sumarEnteros(2, 5);

echo $resultado;
