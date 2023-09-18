<?php

class Persona {
    // Propiedades
    private ?string $nombre;
    private ?string $apellido;
    private ?int $edad;

    // Métodos
    // 
    // Constructor
    public function __construct(?string $nombre = null, ?string $apellido = null, ?int $edad = null) {
        $this->nombre   = $nombre;
        $this->apellido = $apellido;
        $this->edad     = $edad;
    }

    // Getters
    public function getNombre(): ?string {
        return $this->nombre;
    }

    public function getApellido(): ?string {
        return $this->apellido;
    }

    public function getEdad(): ?int {
        return $this->edad;
    }

    // Setters
    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }

    public function setApellido(string $apellido): void {
        $this->apellido = $apellido;
    }

    public function setEdad(int $edad): void {
        $this->edad = $edad;
    }
}