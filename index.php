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

// Constantes predefinidas de PHP
echo "<br>";
echo "Mi versión de php es: " . PHP_VERSION;
echo "<br>";
echo "Versión de php más reciente: " . PHP_MAJOR_VERSION;
echo "<br>";
echo "Versión de php más antigua: " . PHP_MINOR_VERSION;
echo "<br>";
echo "Versión de php actualmente publicada: " . PHP_RELEASE_VERSION;
echo "<br>";
echo "Esta versión corre en el SO: " . PHP_OS;
echo "<br>";
echo "Ruta del directorio de extensiones: " . PEAR_EXTENSION_DIR;
echo "<br>";
echo "API del servidor de compilación: " . PHP_SAPI;
 