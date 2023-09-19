<?php

require_once "Venezolano.php";
require_once "Chileno.php";
require_once "Aleman.php";

/**
 * Clase helper para instanciar personas
 */
class Genesis {
    private static array $personas;

    public static function getPersonas(): array {
        self::setPersonas();

        $asignarApellidos = function($persona) {
            $persona['persona']->setApellidos($persona['apellido1'], $persona['apellido2']);
            return $persona;
        };
        
        $personas = array_map($asignarApellidos, self::$personas);

        return $personas;
    }

    public static function mostrarPersonas(): void {
        $personas = self::getPersonas();

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
    }

    // No se puede iniciar una propiedad con expresiones new
    private static function setPersonas(): void {
        self::$personas = [
            [
                'persona'   => new Venezolano,
                'apellido1' => 'Henriquez',
                'apellido2' => 'Moreno'
            ],
            [
                'persona'   => new Chileno,
                'apellido1' => 'Pavez',
                'apellido2' => 'Contreras'
            ],
            [
                'persona'   => new Aleman,
                'apellido1' => 'Schmilinsky',
                'apellido2' => 'Rodriguez'
            ],
        ];
    }
}
