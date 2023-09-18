<?php 
define('CURSO', 'PHP 8 desde cero'); // Forma clásica de definir constantes
const USUARIO = 'MHenriquez'; // Esta es la forma de definir constantes de clase: private statis const y funciona fuera de una clase
const ANIMALES = [ // Array como constante a partir de PHP 7
    'Perro',
    'Gato',
    'Loro',
    'Tortuga',
];

// Comprobar si una constante está definida
if(defined('USUARIO')) {
    echo "El usuario está registrado";
}
else {
    echo "El usuario NO está registrado";
}
