<?php

// Requerir la clase Persona en este documento
require_once "Clases/Persona.php";

$venezolano = new Venezolano;
$chileno = new Chileno;

$venezolano->setNombre('MaNuEl');

var_dump($venezolano);
var_dump($chileno);
