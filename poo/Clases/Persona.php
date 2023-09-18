<?php

class Persona {
    // Propiedades
    private string $nombre;
    private string $apellido;
    private int $edad;

    // Métodos
    // 
    // Constructor
    public function __construct(string $nombre, string $apellido, int $edad) {
        $this->nombre   = $nombre;
        $this->apellido = $apellido;
        $this->edad     = $edad;
    }

    // Getters
    public function getNombre(): string {
        return $this->nombre;
    }

    public function getApellido(): string {
        return $this->apellido;
    }

    public function getEdad(): int {
        return $this->edad;
    }
}