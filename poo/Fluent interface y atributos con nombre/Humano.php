<?php

class Humano {
    private string $nombre;
    private string $apellidoPaterno, $apellidoMaterno;
    private string $dni;

    public function setNombre(string $nombre): Humano {
        $this->nombre = $nombre;
        
        return $this; // Mantener vivo al objeto para poder encadenar métodos
    }

    public function setApellidos(string $apellidoPaterno, string $apellidoMaterno): Humano {
        $this->apellidoPaterno = $apellidoPaterno;
        $this->apellidoMaterno = $apellidoMaterno;
        
        return $this; // Mantener vivo al objeto para poder encadenar métodos
    }

    public function setDNI(string $dni): Humano {
        $this->dni = $dni;
        
        return $this; // Mantener vivo al objeto para poder encadenar métodos
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