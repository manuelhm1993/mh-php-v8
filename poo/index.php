<?php

// Requerir la clase Persona en este documento
require_once "Clases/Persona.php";

$chileno = new Chileno;
$venezolano = new Venezolano;

$chileno->setApellidos('Henriquez', 'Moreno');
$venezolano->setApellidos('Henriquez', 'Moreno');

// Al haber sobreescrito el método, se llama al de la clase hijo, los apellidos invertidos
echo $chileno->getApellidos();

echo "<br>";

// Llama al método heredado del padre, apellidos en el orden correcto
echo $venezolano->getApellidos();
