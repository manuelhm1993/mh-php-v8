<?php

use Namespaces\Carpeta1\Humano;
use Namespaces\Carpeta2\Humano as Humano2; // Importar las clases dentro del namespace y alias

require_once "Namespaces/Carpeta1/Humano.php";
require_once "Namespaces/Carpeta2/Humano.php"; // Requerir el archivo que incluye el namespace

// Colección de humanos
$humanos = [
    'manuel'  => new Humano,
    'desiree' => new Humano2,
];

// Iterar con foreach
foreach ($humanos as $humano) {
    $humano->saludar();
    echo "<br>";
}
