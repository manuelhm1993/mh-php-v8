<?php

// La palabra reservada 'final' corta la cadena de herencia
final class Hogar {
    private string $color;
    private string $seguridad;

    public function getColor(): string {
        return $this->color;
    }

    public function getSeguridad(): string {
        return $this->seguridad;
    }

    public function setColor(string $color): void {
        $this->color = $color;
    }

    public function setSeguridad(string $seguridad): void {
        $this->seguridad = $seguridad;
    }
}

class Departamento extends Hogar {}