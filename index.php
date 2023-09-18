<?php 
define('CURSO', 'PHP 8 desde cero'); // Forma clásica de definir constantes
const USUARIO = 'MHenriquez'; // Esta es la forma de definir constantes de clase: private statis const y funciona fuera de una clase
const ANIMALES = [ // Array como constante
    'Perro',
    'Gato',
    'Loro',
    'Tortuga',
];

echo "- Curso: " . CURSO 
. "<br>"
. "- Usuario: " . USUARIO
. "<br>"
. "- Animal: " . ANIMALES[0];
