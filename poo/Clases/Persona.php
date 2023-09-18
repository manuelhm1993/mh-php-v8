<?php

class Persona {
    // Propiedades
    private string $nombre; 
    private ?string $apellido; // Nullable
    private int $edad;

    // Métodos
    // 
    // Constructor
    public function __construct(string $nombre, ?string $apellido, int $edad) {
        $this->nombre   = $this->darFormatoEntrada($nombre);
        $this->apellido = $this->darFormatoEntrada((!is_null($apellido)) ? $apellido : '');
        $this->edad     = $edad;
    }

    // Getters
    public function getNombre(): string { 
        return $this->darFormatoSalida($this->nombre);
    }

    public function getApellido(): ?string { // Devuelve string o null
        return $this->darFormatoSalida($this->apellido);
    }

    public function getEdad(): int {
        return $this->edad;
    }

    // Setters
    public function setNombre(string $nombre): void {
        $this->nombre = $this->darFormatoEntrada($nombre);
    }

    public function setApellido(string $apellido): void {
        $this->apellido = $this->darFormatoEntrada($apellido);
    }

    public function setEdad(int $edad): void {
        $this->edad = $edad;
    }

    // Comportamientos
    private function darFormatoEntrada(string $cadena): string {
        return strtolower($cadena);
    }

    private function darFormatoSalida(string $cadena): string {
        return ucwords($cadena);
    }
}