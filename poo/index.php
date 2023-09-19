<?php

require_once "Clases/Herencia/Genesis.php";

$personas = Genesis::getPersonas();

foreach ($personas as $persona) {
    echo $persona['persona']->getApellidos();
    echo "<br>";

    if($persona['persona'] instanceof Aleman) {
        $persona['persona']->saludoEuropeo(); // Método heredado del trait Europeo
    }
    else {
        $persona['persona']->saludoLatinoAmericano(); // Método heredado del trait LatinoAmericano
    }
    echo "<hr>";
}
