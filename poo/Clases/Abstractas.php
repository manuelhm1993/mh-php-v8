<?php

// Las clases abstractas no se pueden instanciar
abstract class ClaseAbstracta {
    abstract protected function getValor(): string;
    abstract protected function valorPrefijo(string $prefijo): string;

    public function imprimir(): void {
        echo $this->getValor();
    }
}

// Las clases abstractas pueden ser extendidas, pero no instanciadas
class ClaseConcreta extends ClaseAbstracta {
    // Se deben implementar todos los métodos abstractos
    protected function getValor(): string {
        return "Clase concreta";
    }

    // Se puede definir un modificador más permisivo y anexar parámetros
    public function valorPrefijo(string $prefijo, string $separador = "."): string {
        return "$prefijo - Clase concreta";
    }
}

$obj = new ClaseConcreta;

$obj->imprimir();
echo "<br>";
echo $obj->valorPrefijo('Hola mundo');
