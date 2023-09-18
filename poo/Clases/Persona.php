<?php

class Persona {
    // Propiedades
    private string $nombre; 
    private string $apellido1, $apellido2; 
    private int $edad;

    // Métodos
    // 
    // Getters
    public function getNombre(): string { 
        return $this->darFormatoSalida($this->nombre);
    }

    public function getApellidos(): string { 
        // Concatenación con interpolación compleja
        return "{$this->darFormatoSalida($this->apellido1)} {$this->darFormatoSalida($this->apellido2)}";
    }

    public function getEdad(): int {
        return $this->edad;
    }

    // Setters
    public function setNombre(string $nombre): void {
        $this->nombre = $this->darFormatoEntrada($nombre);
    }

    public function setApellidos(string $apellido1, string $apellido2): void {
        $this->apellido1 = $this->darFormatoEntrada($apellido1);
        $this->apellido2 = $this->darFormatoEntrada($apellido2);
    }

    public function setEdad(int $edad): void {
        $this->edad = $edad;
    }

    // Usar protected para poder heredar estos métodos
    protected function darFormatoEntrada(string $cadena): string {
        return strtolower($cadena);
    }

    protected function darFormatoSalida(string $cadena): string {
        return ucwords($cadena);
    }
}

// Herencia
class Venezolano extends Persona {
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
}

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
