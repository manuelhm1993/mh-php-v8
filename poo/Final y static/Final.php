<?php

class Hogar {
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

    // Si se aplica 'final' a un método, este no podrá ser sobreescrito
    public final function saludar(): void {
        echo "Bienvenido a mi hogar";
    }
}

class Departamento extends Hogar {}