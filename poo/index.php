<?php

// No es necesario requerir los archivos en todos los documentos como en los módulos de javascript, con una vez basta
require_once "Clases/Herencia/Persona.php";
require_once "Clases/Herencia/Venezolano.php";
require_once "Clases/Herencia/Chileno.php";

$chileno = new Chileno;

$chileno->setApellidos('Henriquez', 'Moreno');

echo $chileno->getApellidos();
