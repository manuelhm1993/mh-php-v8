<?php

class Persona {
    // Propiedades
    private string $nombre; 
    private string $apellido; 
    private int $edad;

    // Métodos
    // 
    // Getters
    public function getNombre(): string { 
        return $this->darFormatoSalida($this->nombre);
    }

    public function getApellido(): string { 
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
}
