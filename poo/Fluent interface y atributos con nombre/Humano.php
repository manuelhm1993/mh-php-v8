<?php

class Humano {
    private string $nombre;
    private string $apellidoPaterno, $apellidoMaterno;
    private string $dni;

    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }

    public function setApellidos(string $apellidoPaterno, string $apellidoMaterno): void {
        $this->apellidoPaterno = $apellidoPaterno;
        $this->apellidoMaterno = $apellidoMaterno;
    }

    public function setDNI(string $dni): void {
        $this->dni = $dni;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getApellidos(): string {
        return "{$this->apellidoPaterno} {$this->apellidoMaterno}";
    }

    public function getDNI(string $dni): string {
        return $this->dni;
    }

    public function imprimirDatos(): void {
        echo "
            - Nombre: {$this->nombre} <br>
            - Apellido paterno: {$this->apellidoPaterno} <br>
            - Apellido materno: {$this->apellidoMaterno} <br>
            - DNI: {$this->dni} <br>
        ";
    }
}