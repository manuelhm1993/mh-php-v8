<?php

require_once "Persona.php";
require_once "Traits/LatinoAmericano.php";

class Venezolano extends Persona {
    use LatinoAmericano; // Forma de implementar o heredar de un trait

    private string $municipio;
    private string $estado;

    public function setMunicipio(string $municipio): void {
        $this->municipio = $this->darFormatoEntrada($municipio);
    }

    public function setEstado(string $estado): void {
        $this->estado = $this->darFormatoEntrada($estado);
    }

    public function getMunicipio(): string { 
        return $this->darFormatoSalida($this->municipio);
    }

    public function getEstado(): string { 
        return $this->darFormatoSalida($this->estado);
    }

    // Extender el alcance de un método
    public function setApellidos(string $apellido1, string $apellido2): void {
        // Llamar al método padre para ejecutar el comportamiento original
        parent::setApellidos($this->darFormatoEntrada($apellido1), $this->darFormatoEntrada($apellido2));

        // Extender el alcance
        echo "Apellidos asignados correctamente - venezolano";
        echo "<br>";
    }
}