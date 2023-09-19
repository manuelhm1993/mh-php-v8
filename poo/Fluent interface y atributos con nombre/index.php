<?php

require_once "Humano.php";

$humano = new Humano;

// Llamada de métodos tradicional
// $humano->setNombre('Manuel');
// $humano->setApellidos('Henriquez', 'Moreno');
// $humano->setDNI('123456789');

// $humano->imprimirDatos();

// Fluent interface o encadenamiento de métodos
$humano->setNombre('Manuel')
       ->setApellidos('Henriquez', 'Moreno')
       ->setDNI('123456789')
       ->imprimirDatos();