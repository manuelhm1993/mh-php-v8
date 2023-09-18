<?php 

// Array asociativo multidimensional
$datos = [ // Dimensión 1
    [ // Dimensión 2
        'nombre'    => 'Manuel Henriquez',
        'email'     => 'manuel@mhenriquez.com',
        'celular'   => '0424-1234567',
        'direccion' => [ // Dimensión 3
            'pais'   => 'Venezuela',
            'ciudad' => 'Maracaibo',
        ],
    ],
    [
        'nombre'  => 'Fanny Carvajal',
        'email'   => 'fanny@mhenriquez.com',
        'celular' => '0424-1234567',
        'direccion' => [
            'pais'   => 'Venezuela',
            'ciudad' => 'Maracaibo',
        ],
    ],
    [
        'nombre'  => 'Julio Calderón',
        'email'   => 'julio@mhenriquez.com',
        'celular' => '0424-1234567',
        'direccion' => [
            'pais'   => 'Venezuela',
            'ciudad' => 'Maracaibo',
        ],
    ],
];

// Iterar todos los datos del array
foreach($datos as $usuario) {
    echo "- Nombre: {$usuario['nombre']}"; // Interpolación compleja
    echo "<br>";
    echo "- Correo: {$usuario['email']}"; // Interpolación compleja
    echo "<br>";
    echo "- Celular: {$usuario['celular']}"; // Interpolación compleja
    echo "<br>";
    echo "<hr>";
}
