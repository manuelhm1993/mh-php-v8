<?php

require_once "Persona.php";
require_once "Traits/Europeo.php";

class Aleman extends Persona {
    use Europeo; // Forma de implementar o heredar de un trait
}
