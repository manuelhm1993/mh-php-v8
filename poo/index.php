<?php

// Requerir la clase Persona en este documento
require_once "Clases/Persona.php";

// Instancia de clase
$persona = new Persona('Manuel', null, 30);

// Establecer el valor de una propiedad privada a través de un setter
$persona->setApellido('Henriquez');

// Llamar a sus métodos usando interpolación compleja
echo "- Nombre: {$persona->getNombre()}";
echo "<br>";
echo "- Apellido: {$persona->getApellido()}";
echo "<br>";
echo "- Edad: {$persona->getEdad()}";
echo "<br>";
