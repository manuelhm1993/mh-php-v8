<?php

// Requerir la clase Persona en este documento
require_once "Clases/Persona.php";

$chileno = new Chileno;

$chileno->setApellidos('Henriquez', 'Moreno');

// Al haber sobreescrito el método, se llama al de la clase hijo, los apellidos invertidos
echo $chileno->getApellidos();

echo "<br>";
echo "<br>";

$venezolano = new Venezolano;

$venezolano->setApellidos('Henriquez', 'Moreno');

// Llama al método heredado del padre, apellidos en el orden correcto
echo $venezolano->getApellidos();
