<?php 

// Spread operator, puede ser usado para empaquetar argumentos variables en un array para la función o desempaquetar los 
// elementos de un array
function concatenar(...$palabras) {
    $sentencia = "";

    // $palabras se vuelve un array con todos los argumentos variables recibidos
    foreach ($palabras as $palabra) {
        $sentencia .= "$palabra "; 
    }

    return $sentencia;
}

echo concatenar('Me', 'cago', 'en', 'Maduro', 'malditos', 'todos');
