<?php

// Requerir la clase Persona en este documento
require_once "Clases/Persona.php";

// Crear una colección de personas
$personas = [
    new Persona('Manuel', 'Henriquez', 30), 
    new Persona('Desireé', "Fernández", 22),
];

// Iterar el array
foreach ($personas as $persona) {
    echo "- Nombre: {$persona->getNombre()}";
    echo "<br>";
    echo "- Apellido: {$persona->getApellido()}";
    echo "<br>";
    echo "- Edad: {$persona->getEdad()}";
    echo "<hr>";
}
