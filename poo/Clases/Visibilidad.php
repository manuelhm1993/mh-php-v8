<?php

class Visibilidad {
    public $public = "Public"; // Accesible desde dentro y fuera de la clase
    protected $protected = "Protected"; // Accesible desde dentro de la clase y clases hijas
    private $private = "Private"; // Accesible solamente desde dentro de la clase 

    public function printHello(): void {
        // Para acceder a propiedades no es necesaria la interpolación compleja, pero prefiero usarla
        echo "{$this->public} <br>";
        echo "{$this->protected} <br>";
        echo "{$this->private} <br>";
    }
}

class Visibilidad2 extends Visibilidad {
    public $public = "Public 2"; 
    protected $protected = "Protected 2"; // Sobreescribir las propiedades

    public function printHello(): void {
        echo "{$this->public} <br>";
        echo "{$this->protected} <br>";
        // echo "{$this->private} <br>"; // No visible
    }
}
