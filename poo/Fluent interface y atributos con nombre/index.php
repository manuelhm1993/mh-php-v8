<?php

require_once "Humano.php";

$humano = new Humano;

$humano->setNombre('Manuel');
$humano->setApellidos('Henriquez', 'Moreno');
$humano->setDNI('123456789');

$humano->imprimirDatos();
