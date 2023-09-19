<?php

require_once "Humano.php";

// Parámetros con nombre PHP 8, hace algo similar a los arrays asociativos, permite enviar argumentos en cualquier orden
$humano = new Humano(dni:'123456789' , apellidoPaterno:'Henriquez', nombre:'Manuel', apellidoMaterno:'Moreno');

$humano->imprimirDatos();
