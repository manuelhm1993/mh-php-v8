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
