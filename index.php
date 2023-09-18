<?php 

$a = 1;

// Expresión match a partir de php 8, simplifica el switch en casos de evaluación simple
$resultado = match($a) {
    1 => 'Lunes',
    2 => 'Martes',
    3 => 'Miércoles',
    4 => 'Jueves',
    5 => 'Viernes',
    6 => 'Sábado',
    7 => 'Domingo',
    default => 'Opción no válida',
};

echo $resultado;
echo "<br>";
