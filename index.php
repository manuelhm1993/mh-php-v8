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

// Para acceder a los datos se usan los índices de las dimensiones
echo $datos[0]['direccion']['pais'];
