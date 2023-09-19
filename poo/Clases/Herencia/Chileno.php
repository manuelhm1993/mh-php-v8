<?php

class Chileno extends Persona {
    private string $comuna;
    private string $region;

    public function setComuna(string $comuna): void {
        $this->comuna = $this->darFormatoEntrada($comuna);
    }

    public function setRegion(string $region): void {
        $this->region = $this->darFormatoEntrada($region);
    }

    public function getComuna(): string { 
        return $this->darFormatoSalida($this->comuna);
    }

    public function getRegion(): string { 
        return $this->darFormatoSalida($this->region);
    }

    // Sobreescritura de métodos, cambiar el comportamiento original
    public function setApellidos(string $apellido1, string $apellido2): void {
        // Como se está usando la encapsulación, se debe llamar al método set de la clase padre
        parent::setApellidos($this->darFormatoEntrada($apellido2), $this->darFormatoEntrada($apellido1));
    }
}